<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Experience;
use App\Models\Project;

class ExperiencesController extends Controller
{
    public function list()
    {
        return view('experiences.list', [
            'experiences' => Experience::all()
        ]);
    }

    public function addForm()
    {
        return view('experiences.add', [
            'projects' => Project::all(),
        ]);
    }

    public function add()
    {

        $attributes = request()->validate([
            'CompanyName' => 'required',
            'yearsofexperiance' => 'required',
            'position' => 'required',
            'project_id' => 'required',
        ]);

        $experience = new Experience();
        $experience->CompanyName = $attributes['CompanyName'];
        $experience->yearsofexperiance = $attributes['yearsofexperiance'];
        $experience->position = $attributes['position'];
        $experience->project_id = $attributes['project_id'];
        $experience->save();

        return redirect('/console/experiences/list')
            ->with('message', 'Experiance has been added!');
    }

    public function editForm(Experience $experience)
    {
        return view('experiences.edit', [
            'experience' => $experience,
            'projects' => Project::all(),
        ]);
    }

    public function edit(Experience $experience)
    {

        $attributes = request()->validate([
            'CompanyName' => 'required',
            'yearsofexperiance' => 'required',
            'position' => 'required',
            'project_id' => 'required',
        ]);

        $experience->CompanyName = $attributes['CompanyName'];
        $experience->yearsofexperiance = $attributes['yearsofexperiance'];
        $experience->position = $attributes['position'];
        $experience->project_id = $attributes['project_id'];
        $experience->save();

        return redirect('/console/experiences/list')
            ->with('message', 'Experiance has been edited!');
    }

    public function delete(Experience $experience)
    {
        $experience->delete();
        return redirect('/console/experiences/list')
            ->with('message', 'Experience has been deleted!');        
    }

    
}
