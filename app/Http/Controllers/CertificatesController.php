<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Certificate;
use App\Models\Skill;


class CertificatesController extends Controller
{
    public function list()
    {
        return view('certificates.list', [
            'certificates' => Certificate::all()
        ]);
    }

    public function addForm()
    {
        return view('certificates.add', [
            'skills' => Skill::all(),
        ]);
    }

    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'level' => 'required',
            'skill_id' => 'required',
        ]);

        $certificate = new certificate();
        $certificate->clgname = $attributes['name'];
        $certificate->degree = $attributes['lavel'];
        $certificate->course = $attributes['skill_id'];
        $certificate->save();

        return redirect('/console/certificates/list')
            ->with('message', 'certificate has been added!');
    }
}
