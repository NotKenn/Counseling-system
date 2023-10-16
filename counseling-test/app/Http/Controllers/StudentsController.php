<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Students;

use Illuminate\View\View;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\RedirectResponse;

class StudentsController extends Controller
{
    public function index(): View
    {
        $students = Students::OrderBy('Nama', 'asc')->paginate(15);

        return view('students.index', compact('students'));
    }

    public function createStepOne(Request $request): View
    {
        $student = $request->session()->get('students');

        return view('students.create-step-one',compact('student'));
    }
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'NISN'                  => 'required',
            'Nama'                  => 'required',
            'tempatLahir'           => 'required',
            'tglLahir'              => 'required',
            'noHP'                  => 'required',
            'Alamat'                => 'required',
            'statusKeaktifanSiswa'  => 'required'
        ]);

        if(empty($request->session()->get('student'))){
            $student = new Students();
            $student->fill($validatedData);
            $request->session()->put('student', $student);
        }else{
            $student = $request->session()->get('student');
            $student->fill($validatedData);
            $request->session()->put('student', $student);
        }
        return redirect()->route('students.create-step-two');
    }
    public function createStepTwo(Request $request)
    {
        $student = $request->session()->get('student');

        return view('students.create-step-two',compact('student'));
    }
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'namaAyah'              => 'required',
            'noHPAyah'              => 'required',
            'pekerjaanAyah'         => 'required',
            'alamatAyah'            => 'required',
            'isAyahAlive'           => 'required',
            'namaIbu'               => 'required',
            'noHPIbu'               => 'required',
            'pekerjaanIbu'          => 'required',
            'alamatIbu'             => 'required',
            'isIbuAlive'            => 'required',
            'statusMaritalOrtu'     => 'required',
            'isTinggalBersamaOrtu'  => 'required'
        ]);

        if(empty($request->session()->get('student'))){
            $student = new Students();
            $student->fill($validatedData);
            $request->session()->put('student', $student);
        }else{
            $student = $request->session()->get('student');
            $student->fill($validatedData);
            $request->session()->put('student', $student);
        }

        return redirect()->route('students.create-step-three');
    }
    public function createStepThree(Request $request)
    {
        $student = $request->session()->get('student');

        return view('students.create-step-three',compact('student'));
    }
    public function postCreateStepThree(Request $request)
    {
        $validatedData = $request->validate([
            'namaWali'      => 'required',
            'noHPWali'      => 'required',
            'pekerjaanWali' => 'required',
            'alamatWali'    => 'required'
        ]);

        if(empty($request->session()->get('student'))){
            $student = new Students();
            $student->fill($validatedData);
            $request->session()->put('student', $student);
        }else{
            $student = $request->session()->get('student');
            $student->fill($validatedData);
            $request->session()->put('student', $student);
        }

        return redirect()->route('students.create-step-final');
    }
    public function createStepFinal(Request $request)
    {
        $student = $request->session()->get('student');

        return view('students.create-step-final',compact('student'));
    }

    public function postCreateStepFinal(Request $request)
    {
        $student = $request->session()->get('student');
        $student->save();

        $request->session()->forget('student');

        return redirect()->route('students.index');
    }
    public function editStepOne(Request $request, $id)
    {
        $student =  Students::findOrFail($id);

        return view('students.edit-step-one',compact('student'));
    }
    public function postEditStepOne(Request $request, $id)
    {

        $student = Students::findOrFail($id);

        $validatedData = $request->validate([
            'NISN'                  => 'required',
            'Nama'                  => 'required',
            'tempatLahir'           => 'required',
            'tglLahir'              => 'required',
            'noHP'                  => 'required',
            'Alamat'                => 'required',
            'statusKeaktifanSiswa'  => 'required'
        ]);

        $student->update($validatedData);


        return redirect()->route('students.edit-step-two', $id);
    }
    public function editStepTwo(Request $request, $id)
    {
        $student =  Students::findOrFail($id);

        return view('students.edit-step-two', compact('student'));
    }
    public function postEditStepTwo(Request $request, $id)
    {
        $student = Students::findOrFail($id);

        $validatedData = $request->validate([
            'namaAyah'              => 'required',
            'noHPAyah'              => 'required',
            'pekerjaanAyah'         => 'required',
            'alamatAyah'            => 'required',
            'isAyahAlive'           => 'required',
            'namaIbu'               => 'required',
            'noHPIbu'               => 'required',
            'pekerjaanIbu'          => 'required',
            'alamatIbu'             => 'required',
            'isIbuAlive'            => 'required',
            'statusMaritalOrtu'     => 'required',
            'isTinggalBersamaOrtu'  => 'required'
        ]);

        $student->update($validatedData);


        return redirect()->route('students.edit-step-three', $id);
    }
    public function editStepThree(Request $request, $id)
    {
        $student =  Students::findOrFail($id);

        return view('students.edit-step-three', compact('student'));
    }
    public function postEditStepThree(Request $request, $id)
    {
        $student = Students::findOrFail($id);

        $validatedData = $request->validate([
            'namaWali'      => 'required',
            'noHPWali'      => 'required',
            'pekerjaanWali' => 'required',
            'alamatWali'    => 'required'
        ]);

        $student->update($validatedData);


        return redirect()->route('students.edit-step-final', $id);
    }
    public function editStepFinal(Request $request, $id)
    {
        $student = Students::findOrFail($id);

        return view('students.edit-step-final',compact('student'));
    }

    public function postEditStepFinal(Request $request, $id)
    {
        $student = Students::findOrFail($id);
        $student->update();

        $request->session()->forget('student');

        return redirect()->route('students.index');
    }
    public function destroy($id): RedirectResponse
    {
        
        //get post by ID
        $student = Students::findOrFail($id);

        //delete post
        $student->delete();

        //redirect to index
        return redirect()->route('students.index');
    }

}
