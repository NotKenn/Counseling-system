@extends('layouts.user_type.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('noteInd.update', $notes->id) }}" method="POST">
                {{csrf_field()}}
                @method('PUT')
                <div class="card">
                    <div class="card-header">Edit Note</div>

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

                            <div class="form-group" style="display:none">
                                <label>Konselor</label>
                                <input type="number" class="form-control" value="{{auth()->user()->id}}" id="user_id"  name="user_id" readonly>
                            </div>
                            <div class="form-group">
                                <label>Siswa</label>

                                <select type="text" class="form-control" value="{{old('students_id', $notes->students_id)}}" id="students_id" name="students_id">
                                    @foreach ($students as $student)
                                        <option value ={{$student->NISN}}> {{$student->Nama}} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description">Konseling Sebelumnya</label>
                                <input type="text" class="form-control" value="{{old('konselingSebelumnya', $notes->konselingSebelumnya)}}" id="konselingSebelumnya" name="konselingSebelumnya">
                            </div>

                            <div class="form-group">
                                <label>Konseling Baru</label>
                                <select type="text" class="form-control" value="{{old('isNew', $notes->isNew)}}" id="isNew" name="isNew">
                                    <option value="Yes"> Baru </option>
                                    <option value="No"> Sudah Ada </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description">Jenis Konseling</label>
                                <select type="text" class="form-control" value="{{old('jenisKonseling', $notes->jenisKonseling)}}" id="jenisKonseling" name="jenisKonseling">
                                    <option value="Pribadi"> Pribadi </option>
                                    <option value="Akademik"> Akademik</option>
                                    <option value="Sosial"> Sosial </option>
                                    <option value="Karir"> Karir </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description">Tanggal Konseling</label>
                                <input type="date" class="form-control" value="{{old('tglKonseling', $notes->tglKonseling)}}" id="tglKonseling" name="tglKonseling">
                            </div>

                            <div class="form-group">
                                <label for="description">Deskripsi Masalah</label>
                                <input type="text" class="form-control" value="{{old('deskripsiMasalah', $notes->deskripsiMasalah)}}" id="deskripsiMasalah" name="deskripsiMasalah">
                            </div>

                            <div class="form-group">
                                <label for="description">Tindakan</label>
                                <input type="text" class="form-control" value="{{old('tindakan', $notes->tindakan)}}" id="tindakan" name="tindakan">
                            </div>

                            <div class="form-group">
                                <label for="description">Catatan</label>
                                <input type="text" class="form-control" value="{{old('catatan', $notes->catatan)}}" id="catatan" name="catatan">
                            </div>

                            <div class="form-group">
                                <label for="description">Rencana Tindak Lanjut</label>
                                <input type="text" class="form-control" value="{{old('rencanaTindakLanjut', $notes->rencanaTindakLanjut)}}" id="rencanaTindakLanjut" name="rencanaTindakLanjut">
                            </div>

                            <div class="form-group">
                                <label for="description">Tanggal Rencana Tindak Lanjut</label>
                                <input type="date" class="form-control" value="{{old('tglRTL', $notes->tglRTL)}}" id="tglRTL" name="tglRTL">
                            </div>

                            <div class="form-group">
                                <label for="description">Status</label>
                                <select type="text" class="form-control" value="{{old('status', $notes->status)}}" id="status" name="status">
                                    <option value ="Selesai"> Selesai </option>
                                    <option value ="Dalam Pemantauan"> Dalam Pemantauan </option>
                                    <option value ="Tidak Selesai"> Tidak Selesai </option>
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
