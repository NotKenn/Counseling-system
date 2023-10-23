@extends('layouts.user_type.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('prestasi.update', $prestasi->id) }}" method="POST">
                {{csrf_field()}}
                @method('PUT')

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
                                <select type="number" class="form-control" value="{{old('NISN', $prestasi->NISN)}}" id="NISN"  name="NISN">
                                    @foreach ($students as $student)
                                        <option value="{{$student->NISN}}">{{$student->Nama}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Partisipasi</label>
                                <input type="date" class="form-control" value="{{old('tglPrestasi', $prestasi->tglPrestasi)}}" id="tglPrestasi" name="tglPrestasi">
                            </div>

                            <div class="form-group">
                                <label for="description">Nama Kegiatan</label>
                                <input type="text" class="form-control" value="{{old('namaPrestasi', $prestasi->namaPrestasi)}}" id="namaPrestasi" name="namaPrestasi">
                            </div>

                            <div class="form-group">
                                <label for="description">Tingkat Prestasi</label>
                                <input type="text" class="form-control" value="{{old('tingkatPrestasi', $prestasi->tingkatPrestasi)}}" id="tingkatPrestasi" name="tingkatPrestasi">
                            </div>

                            <div class="form-group">
                                <label for="description">Peringkat</label>
                                <input type="text" class="form-control" value="{{old('peringkatPrestasi', $prestasi->peringkatPrestasi)}}" id="peringkatPrestasi" name="peringkatPrestasi">
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
