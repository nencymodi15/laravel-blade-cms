<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Academic;

class AcademicsController extends Controller
{
    public function list()
    {
        return view('academics.list', [
            'academics' => Academic::all()
        ]);
    }

    public function addForm()
    {
        return view('academics.add', [
            'projects' => Project::all(),
        ]);
    }

    public function add()
    {

        $attributes = request()->validate([
            'clgname' => 'required',
            'degree' => 'required',
            'course' => 'required',
            'description' => 'required',
            'project_id' => 'required',
        ]);

        $academic = new Academic();
        $academic->clgname = $attributes['clgname'];
        $academic->degree = $attributes['degree'];
        $academic->course = $attributes['course'];
        $academic->description = $attributes['description'];
        $academic->project_id = $attributes['project_id'];
        $academic->save();

        return redirect('/console/academics/list')
            ->with('message', 'academic has been added!');
    }

    public function editForm(Academic $academic)
    {
        return view('academics.edit', [
            'academic' => $academic,
            'projects' => Project::all(),
        ]);
    }

    public function edit(Academic $academic)
    {

        $attributes = request()->validate([
            'clgname' => 'required',
            'degree' => 'required',
            'course' => 'required',
            'description' => 'required',
            'project_id' => 'required',
        ]);

        $academic->clgname = $attributes['clgname'];
        $academic->degree = $attributes['degree'];
        $academic->course = $attributes['course'];
        $academic->description = $attributes['description'];
        $academic->project_id = $attributes['project_id'];
        $academic->save();

        return redirect('/console/academics/list')
            ->with('message', 'Project has been edited!');
    }

    public function delete(Academic $academic)
    {
        $academic->delete();
        return redirect('/console/academics/list')
            ->with('message', 'Project has been deleted!');        
    }
}
