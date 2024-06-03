@extends('layouts.user_type.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('noteInd.store') }}" method="POST">
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

                            <div class="form-group" style="display:none">
                                <label>Konselor</label>
                                <input type="number" class="form-control" value="{{auth()->user()->id}}" id="user_id"  name="user_id" readonly>
                            </div>

                            <div class="form-group">
                                <label>Siswa</label>
                            <select type="text" class="form-control" id="students_id" name="students_id">
                                @php
                                    $getStudent = \DB::table('students')->where('statusKeaktifanSiswa', '=', 'Aktif')->select('NISN', 'Nama')->get();
                                @endphp
                                @foreach ($getStudent as $student)
                                    <option value ={{$student->NISN}}> {{$student->Nama}} </option>
                                @endforeach
                            </select>

                            </div>
                            
                            <div class="form-group">
                                <label for="description">Konseling Sebelumnya</label>
                                
                                @php 
                                    // $nisn =  row('students_id').val();
                                    // $value = \App\Models\noteIndividu::get('konselingSebelumnya')->where('students_id', $student->NISN);

                                @endphp
                                    <select type="text" class="form-control" id="konselingSebelumnya" name="konselingSebelumnya">
                                        @foreach ($notes as $note)
                                            <option value={{$note->id}}> {{$note->tglKonseling}}, {{$note->student->Nama}} </option>
                                        @endforeach
                                            <option value = "-"> None <option>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label>Konseling Baru</label>
                                <select type="text" class="form-control" id="isNew" name="isNew">
                                    <option value="Yes"> Baru </option>
                                    <option value="No"> Sudah Ada </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description">Jenis Konseling</label>
                                <select type="text" class="form-control" id="jenisKonseling" name="jenisKonseling">
                                    <option value="Pribadi"> Pribadi </option>
                                    <option value="Akademik"> Akademik</option>
                                    <option value="Sosial"> Sosial </option>
                                    <option value="Karir"> Karir </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description">Tanggal Konseling</label>
                                <input type="date" class="form-control" id="tglKonseling" name="tglKonseling">
                            </div>

                            <div class="form-group">
                                <label for="description">Deskripsi Masalah</label>
                                <input type="text" class="form-control" id="deskripsiMasalah" name="deskripsiMasalah">
                            </div>

                            <div class="form-group">
                                <label for="description">Tindakan</label>
                                <input type="text" class="form-control" id="tindakan" name="tindakan">
                            </div>

                            <div class="form-group">
                                <label for="description">Catatan</label>
                                <input type="text" class="form-control" id="catatan" name="catatan">
                            </div>

                            <div class="form-group">
                                <label for="description">Rencana Tindak Lanjut</label>
                                <input type="text" class="form-control" id="rencanaTindakLanjut" name="rencanaTindakLanjut">
                            </div>

                            <div class="form-group">
                                <label for="description">Tanggal Rencana Tindak Lanjut</label>
                                <input type="date" class="form-control" id="tglRTL" name="tglRTL">
                            </div>

                            <div class="form-group">
                                <label for="description">Status</label>
                                <select type="text" class="form-control" id="status" name="status">
                                    <option value ="Selesai"> Selesai </option>
                                    <option value ="Dalam Pemantauan"> Dalam Pemantauan </option>
                                    <option value ="Tidak Selesai"> Tidak Selesai </option>
                                </select>
                            </div>
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
