@extends('layouts.user_type.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="/noteInd-submit" method="POST">
                @csrf

                <div class="card">
                    <div class="card-header">Create Note</div>

                    <div class="card-body">
                        @if($previousNotes->isEmpty())
                            <p>No previous counseling found</p>
                        @else
                            <ul>
                                @foreach($previousNotes as $note)
                                    <li>{{ $note->tglKonseling }}: {{ $note->deskripsiMasalah }}</li>
                                @endforeach
                            </ul>
                        @endif

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
                                @foreach ($student as $stud)
                                    <option value ={{$stud->NISN}}> {{$stud->Nama}} </option>
                                @endforeach
                            </select>

                            </div>
                            
                            <div class="form-group">
                                <label for="description">Konseling Sebelumnya</label>
                                
                                @php 
                                    $previousNotes = \DB::table('noteindividu')->where('students_id', $studentId)->orderBy('tglKonseling', 'desc')->first();
                                @endphp
                                    <select type="text" class="form-control" id="konselingSebelumnya" name="konselingSebelumnya">
                                            <option value={{$previousNotes->id}}> {{$previousNotes->tglKonseling}} </option>
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
