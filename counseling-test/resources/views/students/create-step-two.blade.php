@extends('layouts.user_type.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('students.create-step-two-post') }}" method="POST">
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
                                <input type="text" class="form-control" id="namaAyah"  name="namaAyah">
                            </div>
                            <div class="form-group">
                                <label>No. Hp Ayah</label>
                                <input type="number" class="form-control" id="noHpAyah" name="noHPAyah">
                            </div>

                            <div class="form-group">
                                <label for="description">Pekerjaan Ayah</label>
                                <input type="text" class="form-control" id="pekerjaanAyah" name="pekerjaanAyah">
                            </div>

                            <div class="form-group">
                                <label>Alamat Ayah</label>
                                <input type="text" class="form-control" id="alamatAyah" name="alamatAyah">
                            </div>
                            <div class="form-group">
                                <label for="description">Status Ayah</label>
                                <select type="text" class="form-control" id="isAyahAlive" name="isAyahAlive">
                                    <option value ="Hidup"> Hidup </option>
                                    <option value ="Wafat"> Wafat </option>
                                </select>
                            </div>
                            {{-- Data Ibu --}}
                            <label style="font-size: 1em">Data Ibu</label>
                            <div class="form-group">
                                <label>Nama Ibu</label>
                                <input type="text" class="form-control" id="namaIbu"  name="namaIbu">
                            </div>
                            <div class="form-group">
                                <label>No. Hp Ibu</label>
                                <input type="number" class="form-control" id="noHpIbu" name="noHPIbu">
                            </div>

                            <div class="form-group">
                                <label for="description">Pekerjaan Ibu</label>
                                <input type="text" class="form-control" id="pekerjaanIbu" name="pekerjaanIbu">
                            </div>

                            <div class="form-group">
                                <label>Alamat Ibu</label>
                                <input type="text" class="form-control" id="alamatIbu" name="alamatIbu">
                            </div>

                            <div class="form-group">
                                <label for="description">Status Ibu</label>
                                <select type="text" class="form-control" id="isIbuAlive" name="isIbuAlive">
                                    <option value ="Hidup"> Hidup </option>
                                    <option value ="Wafat"> Wafat </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description">Status Marital Orang Tua</label>
                                <select type="text" class="form-control" id="statusMaritalOrtu" name="statusMaritalOrtu">
                                    <option value ="Nikah"> Nikah </option>
                                    <option value ="Cerai Hidup"> Cerai Hidup </option>
                                    <option value ="Cerai Mati"> Cerai Mati </option>
                                    <option value ="Berpisah"> Berpisah </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description">Tinggal Bersama Orang Tua</label>
                                <select type="text" class="form-control" id="isTinggalBersamaOrtu" name="isTinggalBersamaOrtu">
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
