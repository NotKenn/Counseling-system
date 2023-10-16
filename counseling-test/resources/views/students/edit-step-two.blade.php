@extends('layouts.user_type.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('students.edit-step-two-post', $student->id) }}" method="POST">
                {{csrf_field()}}


                <div class="card">
                    <div class="card-header">Step 2: Parents' Data</div>

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
                                {{-- Data Ayah --}}
                            <label style="font-size: 1em">Data Ayah</label>
                            <div class="form-group">
                                <label>Nama Ayah</label>
                                <input type="text" class="form-control" value="{{ old('namaAyah', $student->namaAyah) }}" id="namaAyah"  name="namaAyah">
                            </div>
                            <div class="form-group">
                                <label>No. Hp Ayah</label>
                                <input type="number" class="form-control" value="{{ old('noHPAyah', $student->noHPAyah) }}" id="noHPAyah" name="noHPAyah">
                            </div>

                            <div class="form-group">
                                <label for="description">Pekerjaan Ayah</label>
                                <input type="text" class="form-control" value="{{ old('pekerjaanAyah', $student->pekerjaanAyah) }}" id="pekerjaanAyah" name="pekerjaanAyah">
                            </div>

                            <div class="form-group">
                                <label>Alamat Ayah</label>
                                <input type="text" class="form-control" value="{{ old('alamatAyah', $student->alamatAyah) }}" id="alamatAyah" name="alamatAyah">
                            </div>
                            <div class="form-group">
                                <label for="description">Status Ayah</label>
                                <select type="text" class="form-control" value="{{ old('isAyahAlive', $student->isAyahAlive) }}" id="isAyahAlive" name="isAyahAlive">
                                    <option value ="Hidup"> Hidup </option>
                                    <option value ="Wafat"> Wafat </option>
                                </select>
                            </div>
                            {{-- Data Ibu --}}
                            <label style="font-size: 1em">Data Ibu</label>
                            <div class="form-group">
                                <label>Nama Ibu</label>
                                <input type="text" class="form-control" value="{{ old('namaIbu', $student->namaIbu) }}" id="namaIbu"  name="namaIbu">
                            </div>
                            <div class="form-group">
                                <label>No. Hp Ibu</label>
                                <input type="number" class="form-control" value="{{ old('noHPIbu', $student->noHPIbu) }}" id="noHpIbu" name="noHPIbu">
                            </div>

                            <div class="form-group">
                                <label for="description">Pekerjaan Ibu</label>
                                <input type="text" class="form-control" value="{{ old('pekerjaanIbu', $student->pekerjaanIbu) }}" id="pekerjaanIbu" name="pekerjaanIbu">
                            </div>

                            <div class="form-group">
                                <label>Alamat Ibu</label>
                                <input type="text" class="form-control" value="{{ old('alamatIbu', $student->alamatIbu) }}" id="alamatIbu" name="alamatIbu">
                            </div>

                            <div class="form-group">
                                <label for="description">Status Ibu</label>
                                <select type="text" class="form-control" value="{{ old('isIbuAlive', $student->isIbuAlive) }}" id="isIbuAlive" name="isIbuAlive">
                                    <option value ="Hidup"> Hidup </option>
                                    <option value ="Wafat"> Wafat </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description">Status Marital Orang Tua</label>
                                <select type="text" class="form-control" value="{{ old('statusMaritalOrtu', $student->statusMaritalOrtu) }}"
                                    id="statusMaritalOrtu" name="statusMaritalOrtu">
                                    <option value ="Nikah"> Nikah </option>
                                    <option value ="Cerai Hidup"> Cerai Hidup </option>
                                    <option value ="Cerai Mati"> Cerai Mati </option>
                                    <option value ="Berpisah"> Berpisah </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description">Tinggal Bersama Orang Tua</label>
                                <select type="text" class="form-control" value="{{ old('isTinggalBersamaOrtu', $student->isTinggalBersamaOrtu) }}"
                                    id="isTinggalBersamaOrtu" name="isTinggalBersamaOrtu">
                                    <option value ="Yes"> Yes </option>
                                    <option value ="No"> No </option>
                                </select>
                            </div>
                    </div>

                    <div class="card-footer text-right">
                        <a href="{{url()->previous()}}" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

