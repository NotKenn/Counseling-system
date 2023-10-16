@extends('layouts.user_type.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('students.create-step-one-post') }}" method="POST">
                {{csrf_field()}}

                <div class="card">
                    <div class="card-header">Step 1: Student's Info</div>

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
                                <label>NISN</label>
                                <input type="number" class="form-control" id="NISN"  name="NISN">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="Nama" name="Nama">
                            </div>

                            <div class="form-group">
                                <label for="description">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempatLahir" name="tempatLahir">
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tglLahir" name="tglLahir">
                            </div>

                            <div class="form-group">
                                <label for="description">No. HP</label>
                                <input type="text" class="form-control" id="noHP" name="noHP">
                            </div>

                            <div class="form-group">
                                <label for="description">Alamat</label>
                                <input type="text" class="form-control" id="Alamat" name="Alamat">
                            </div>

                            <div class="form-group">
                                <label for="description">Status</label>
                                <select type="text" class="form-control" id="statusKeaktifanSiswa" name="statusKeaktifanSiswa">
                                    <option value ="Aktif"> Aktif </option>
                                    <option value ="Drop Out"> Drop Out </option>
                                    <option value ="Lulus"> Lulus </option>
                                </select>
                            </div>
                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
