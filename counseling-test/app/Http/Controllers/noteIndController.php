<?php

namespace App\Http\Controllers;

use App\Models\noteIndividu as ModelsNoteIndividu;

use App\Models\Students;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;
use Barryvdh\DomPDF\Facade\Pdf;


class noteIndController extends Controller
{
    public function index(): View
    {
        $notes = ModelsNoteIndividu::all();
        $users = User::all();
        $students = Students::all();

        return view('noteInd.index', compact('notes', 'users', 'students'));
    }
    public function create()
    {
        $users = User::all();
        $students = Students::all();
        $notes = ModelsNoteIndividu::all();
        $getStudent = \DB::table('students')->where('statusKeaktifanSiswa', '=', 'Aktif')->get('NISN');

        return view('noteInd.create', compact('users', 'students', 'notes'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'user_id'               => 'required',
            'students_id'           => 'required',
            'konselingSebelumnya'   => 'required',
            'isNew'                 => 'required',
            'jenisKonseling'        => 'required',
            'tglKonseling'          => 'required',
            'deskripsiMasalah'      => 'required',
            'tindakan'              => 'required',
            'catatan'               => 'required',
            'rencanaTindakLanjut'   => 'required',
            'tglRTL'                => 'required',
            'status'                => 'required'
        ]);

        ModelsNoteIndividu::create($attributes);

        return redirect()->route('noteInd.index');
    }
    public function edit(string $id): View
    {
        //get post by ID
        $students = Students::all();
        $notes = ModelsNoteIndividu::findOrFail($id);

        //render view with post
        return view('noteInd.edit', compact('students', 'notes'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'user_id'               => 'required',
            'students_id'           => 'required',
            'konselingSebelumnya'   => 'required',
            'isNew'                 => 'required',
            'jenisKonseling'        => 'required',
            'tglKonseling'          => 'required',
            'deskripsiMasalah'      => 'required',
            'tindakan'              => 'required',
            'catatan'               => 'required',
            'rencanaTindakLanjut'   => 'required',
            'tglRTL'                => 'required',
            'status'                => 'required'
        ]);

        //get post by ID
        $notes = ModelsNoteIndividu::findOrFail($id);

            //update post without image
            $notes->update([
                'user_id'               => $request->user_id,
                'students_id'           => $request->students_id,
                'konselingSebelumnya'   => $request->konselingSebelumnya,
                'isNew'                 => $request->isNew,
                'jenisKonseling'        => $request->jenisKonseling,
                'tglKonseling'          => $request->tglKonseling,
                'deskripsiMasalah'      => $request->deskripsiMasalah,
                'tindakan'              => $request->tindakan,
                'catatan'               => $request->catatan,
                'rencanaTindakLanjut'   => $request->rencanaTindakLanjut,
                'tglRTL'                => $request->tglRTL,
                'status'                => $request->status
        ]);
        //redirect to index
        return redirect()->route('noteInd.index');
    }
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $note = ModelsNoteIndividu::findOrFail($id);

        //delete post
        $note->delete();

        //redirect to index
        return redirect()->route('noteInd.index');
    }
    public function cetak_pdf()
    {
        $notes = ModelsNoteIndividu::all();
        $students = Students::all();

        $pdf = Pdf::loadview('noteInd.printNote',['notes'=>$notes, 'student'>$students])->setpaper('A4', 'Landscape');
        return $pdf->stream('Data-Notes-Individuals.pdf');
    }
}
