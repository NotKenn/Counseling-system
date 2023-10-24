@extends('layouts.user_type.auth')

@section('content')

<div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Detail {{$student->Nama}}</h5>
                        </div>

                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <br>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>NISN</strong> <br>
                                            {{ $student->NISN }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Nama Siswa</strong> <br>
                                            {{ $student->Nama }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Tempat Lahir</strong> <br>
                                            {{ $student->tempatLahir }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Tanggal Lahir</strong> <br>
                                            {{ $student->tglLahir }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Nomor Hp</strong> <br>
                                            {{ $student->noHP }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Alamat</strong> <br>
                                            {{ $student->Alamat }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Status Siswa </strong>
                                            {{ $student->statusKeaktifanSiswa }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Nama Ayah</strong> <br>
                                            {{ $student->namaAyah }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Nomor Hp Ayah</strong> <br>
                                            {{ $student->noHPAyah }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Pekerjaan Ayah</strong> <br>
                                            {{ $student->pekerjaanAyah }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Alamat Ayah</strong> <br>
                                            {{ $student->alamatAyah }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Status Ayah</strong> <br>
                                            {{ $student->isAyahAlive }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Nama Ibu</strong> <br>
                                            {{ $student->namaIbu }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Nomor Hp Ibu</strong> <br>
                                            {{ $student->noHPIbu }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Pekerjaan Ibu</strong> <br>
                                            {{ $student->pekerjaanIbu }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Alamat Ibu</strong> <br>
                                            {{ $student->alamatIbu }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Status Ibu</strong> <br>
                                            {{ $student->isIbuAlive }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Status Marital Orang Tua</strong> <br>
                                            {{ $student->statusMaritalOrtu }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Tinggal Bersama Orang Tua</strong> <br>
                                            {{ $student->isTinggalBersamaOrtu }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Nama Wali</strong> <br>
                                            {{ $student->namaWali }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Nomor Hp Wali</strong> <br>
                                            {{ $student->noHPWali }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Pekerjaan Wali</strong> <br>
                                            {{ $student->pekerjaanWali }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Alamat Wali</strong> <br>
                                            {{ $student->alamatWali }}
                                        </p>
                                        @foreach ($prestasi as $no => $pres)
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Prestasi {{++$no}}</strong> <br>
                                            {{ $pres->namaPrestasi }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Tingkat Prestasi</strong> <br>
                                            {{ $pres->tingkatPrestasi }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Peringkat Prestasi</strong> <br>
                                            {{ $pres->peringkatPrestasi }}
                                        </p>
                                        @endforeach
                                        @foreach ($kasus as $no => $kas)
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Kasus {{++$no}}</strong> <br>
                                            {{ $kas->penjelasan }}
                                        </p>
                                        @endforeach
                                        @foreach ($noteI as $no => $note)
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Konseling {{++$no}}</strong> <br>
                                            {{ $note->jenisKonseling}}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Catatan</strong> <br>
                                            {{ $note->catatan}}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Pembimbing</strong> <br>
                                            {{ $note->user->namaUser }}
                                        </p>
                                        <p class="text-s font-weight-bold mb-0">
                                            <strong>Catatan</strong> <br>
                                            {{ $note->status }}
                                        </p>
                                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
