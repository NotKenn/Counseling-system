@extends('layouts.user_type.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('kasus.update', $kasus->id) }}" method="POST">
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
                                <select type="number" class="form-control" value="{{old('NISN', $kasus->NISN)}}" id="NISN"  name="NISN">
                                    @foreach ($students as $student)
                                        <option value="{{$student->NISN}}">{{$student->Nama}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Kasus</label>
                                <input type="date" class="form-control" value="{{old('tglKasus', $kasus->tglKasus)}}" id="tglKasus" name="tglKasus">
                            </div>

                            <div class="form-group">
                                <label for="description">Keterangan</label>
                                <input type="text" class="form-control" value="{{old('penjelasan', $kasus->penjelasan)}}" id="penjelasan" name="penjelasan">
                            </div>

                            <div class="form-group">
                                <label for="description">Penanganan</label>
                                <input type="text" class="form-control" value="{{old('penanganan', $kasus->penanganan)}}" id="penanganan" name="penanganan">
                            </div>

                            <div class="form-group">
                                <label for="description">Kelas</label>
                                <input type="text" class="form-control" value="{{old('kelas', $kasus->kelas)}}" id="kelas" name="kelas">
                            </div>

                            <div class="form-group">
                                <label for="description">Penangan Kasus</label>
                                <input type="text" class="form-control" value="{{old('penanganKasus', $kasus->penanganKasus)}}"id="penanganKasus" name="penanganKasus">
                            </div>

                            <div class="form-group">
                                <label for="description">Rencana Tindak Lanjut</label>
                                <input type="text" class="form-control" value="{{old('rencanaTindakLanjut', $kasus->rencanaTindakLanjut)}}"id="rencanaTindakLanjut" name="rencanaTindakLanjut">
                            </div>

                            <div class="form-group">
                                <label for="description">Status</label>
                                <select type="text" class="form-control" value="{{old('status', $kasus->status)}}" id="status" name="status">
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
