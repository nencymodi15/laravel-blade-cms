<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Skill;
use App\Models\Project;

class SkillsController extends Controller
{
    public function list()
    {
        return view('skills.list', [
            'skills' => Skill::all()
        ]);
    }

    public function addForm()
    {
        return view('skills.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'prof' => 'required',
            'learned_at' => 'required',
        ]);

        $skill = new Skill();
        $skill->name = $attributes['name'];
        $skill->prof = $attributes['prof'];
        $skill->learned_at = $attributes['learned_at'];
        $skill->save();

        return redirect('/console/skills/list')
            ->with('message', 'skills has been added!');
    }

    public function editForm(Skill $skill)
    {
        return view('skills.edit', [
            'skill' => $skill,
        ]);
    }

    public function edit(Skill $skill)
    {

        $attributes = request()->validate([
            'name' => 'required',
            'prof' => 'required',
            'learned_at' => 'required',
        ]);

        $skill->name = $attributes['name'];
        $skill->prof = $attributes['prof'];
        $skill->learned_at = $attributes['learned_at'];
        $skill->save();

        return redirect('/console/skills/list')
            ->with('message', 'skill has been edited!');
    }


    public function delete(Skill $skill)
    {
        $skill->delete();
        return redirect('/console/skills/list')
            ->with('message', 'Skill has been deleted!');        
    }
}
