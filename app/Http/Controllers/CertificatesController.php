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
        $certificate->name = $attributes['name'];
        $certificate->level = $attributes['level'];
        $certificate->skill_id = $attributes['skill_id'];
        $certificate->save();

        return redirect('/console/certificates/list')
            ->with('message', 'certificate has been added!');
    }

    public function editForm(Certificate $certificate)
    {
        return view('certificates.edit', [
            'certificate' => $certificate,
            'skills' => Skill::all(),
        ]);
    }

    public function edit(certificate $certificate)
    {

        $attributes = request()->validate([
            'name' => 'required',
            'level' => 'required',
            'skill_id' => 'required',
        ]);

        $certificate->name = $attributes['name'];
        $certificate->level = $attributes['level'];
        $certificate->skill_id = $attributes['skill_id'];
        $certificate->save();

        return redirect('/console/certificates/list')
            ->with('message', 'Cerificate has been edited!');
    }


    public function delete(certificate $certificate)
    {
        $certificate->delete();
        return redirect('/console/certificates/list')
            ->with('message', 'certificate has been deleted!');        
    }

    public function imageForm(certificate $certificate)
    {
        return view('certificates.image', [
            'certificate' => $certificate,
        ]);
    }

    public function image(certificate $certificate)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        if($certificate->image)
        {
            Storage::delete($certificate->image);
        }
        
        $path = request()->file('image')->store('certificates');

        $certificate->image = $path;
        $certificate->save();
        
        return redirect('/console/certificates/list')
            ->with('message', 'certificate image has been edited!');
    }

}
