@extends('layouts.user_type.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('kasus.store') }}" method="POST">
                {{csrf_field()}}

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
                                <label>Nama Siswa</label>
                                <select type="number" class="form-control" id="NISN"  name="NISN">
                                    @foreach ($students as $student)
                                        <option value="{{$student->NISN}}">{{$student->Nama}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Kasus</label>
                                <input type="date" class="form-control" id="tglKasus" name="tglKasus">
                            </div>

                            <div class="form-group">
                                <label for="description">Keterangan</label>
                                <input type="text" class="form-control" id="penjelasan" name="penjelasan">
                            </div>

                            <div class="form-group">
                                <label for="description">Penanganan</label>
                                <input type="text" class="form-control" id="penanganan" name="penanganan">
                            </div>

                            <div class="form-group">
                                <label for="description">Status</label>
                                <select type="text" class="form-control" id="status" name="status">
                                    <option value="Selesai">Selesai</option>
                                    <option value="Dalam Pemantauan">Dalam Pemantauan</option>
                                    <option value="Tidak Selesai">Tidak Selesai</option>
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
