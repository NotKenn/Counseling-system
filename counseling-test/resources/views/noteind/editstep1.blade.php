@extends('layouts.user_type.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{route('noteind.editstep2', $note->id) }}" method="POST">
                @csrf

                <div class="card">
                    <div class="card-header">Create Note</div>

                    <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group">
                                <label>Siswa</label>
                            <select type="text"  class="form-control" id="students_id" name="students_id">
                                @php
                                    $getStudent = \DB::table('students')->where('statusKeaktifanSiswa', '=', 'Aktif')->select('NISN', 'Nama')->get();
                                @endphp
                                @foreach ($getStudent as $student)
                                    <option value ="{{$student->NISN}}" {{ $student->NISN == $note->students_id ? 'selected' : '' }}> {{$student->Nama}}, NISN: {{$student->NISN}} </option>
                                @endforeach
                            </select>

                            </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
