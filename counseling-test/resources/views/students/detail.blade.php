@extends('layouts.user_type.auth')

@section('content')

<div>
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 10pt;
		}
        th{
        font-size: 10pt;
        background-color:gray;
        text-align: center;
        }
	</style>

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
                        <a style="float: right;" href = "{{route('students.printPDF', $student->id)}}" class = "btn btn-md btn-success mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                                <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707z"/>
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                              </svg>
                            Export Counseling
                        </a>
                        <a style="float: right;" href = "{{route('students.printP', $student->id)}}" class = "btn btn-md btn-success mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                                <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707z"/>
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                              </svg>
                            Export Prestasi
                        </a>
                        <a style="float: right;" href = "{{route('students.printK', $student->id)}}" class = "btn btn-md btn-success mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                                <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707z"/>
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                              </svg>
                            Export Kasus
                        </a>
                        <strong> Data Siswa </strong>
                        <table class="table table-bordered" style="table-layout: auto">
                            <thead>
                              <tr>
                                <th scope="col">NISN</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Nomor Hp</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Status Siswa</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <tr>
                                    <td>{{  $student->NISN }}</td>
                                    <td>{!! $student->Nama !!}</td>
                                    <td>{!! $student->tempatLahir !!}</td>
                                    <td>{!! $student->tglLahir !!}</td>
                                    <td>{!! $student->noHP !!}</td>
                                    <td>{!! $student->Alamat !!}</td>
                                    <td>{!! $student->statusKeaktifanSiswa !!}</td>
                                    <tr>
                                </tr>
                            </tbody>
                          </table>
                          <br>
                          <strong> Data Ayah </strong>
                          <table class="table table-bordered" style="table-layout: auto">
                            <thead>   
                                <tr>
                                <th scope="col">Nama Ayah</th>
                                <th scope="col">No Hp Ayah</th>
                                <th scope="col">Pekerjaan Ayah</th>
                                <th scope="col">Alamat Ayah</th>
                                <th scope="col">Status Ayah</th>
                                <tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <tr>
                                    <td>{!! $student->namaAyah !!}</td>
                                    <td>{!! $student->noHPAyah !!}</td>
                                    <td>{!! $student->pekerjaanAyah !!}</td>
                                    <td>{!! $student->alamatAyah !!}</td>
                                    <td>{!! $student->isAyahAlive !!}</td>
                                    <tr>
                                </tr>
                            </tbody>
                        </table>
                        <strong> Data Ibu </strong>
                        <table class="table table-bordered" style="table-layout: auto">
                            <thead>    
                                <tr>
                                <th scope="col">Nama Ibu</th>
                                <th scope="col">No Hp Ibu</th>
                                <th scope="col">Pekerjaan Ibu</th>
                                <th scope="col">Alamat Ibu</th>
                                <th scope="col">Status Ibu</th>
                                <th scope="col">Status Marital Orang Tua</th>
                                <th scope="col">Tinggal Bersama Orang Tua</th>
                                <tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{!! $student->namaIbu !!}</td>
                                    <td>{!! $student->noHPIbu !!}</td>
                                    <td>{!! $student->pekerjaanIbu !!}</td>
                                    <td>{!! $student->alamatIbu !!}</td>
                                    <td>{!! $student->isIbuAlive !!}</td>
                                    <td>{!! $student->statusMaritalOrtu !!}</td>
                                    <td>{!! $student->isTinggalBersamaOrtu !!}</td>
                                    
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <strong>Data Wali</strong> 
                        <table class="table table-bordered" style="table-layout: auto">
                            <thead>   
                                <tr>
                                    <th scope="col">Nama Wali</th>
                                    <th scope="col">No Hp Wali</th>
                                    <th scope="col">Pekerjaan Wali</th>
                                    <th scope="col">Alamat Wali</th>
                                <tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <tr>
                                        <td>{!! $student->namaWali !!}</td>
                                        <td>{!! $student->noHPWali !!}</td>
                                        <td>{!! $student->pekerjaanWali !!}</td>
                                        <td>{!! $student->alamatWali !!}</td>
                                    <tr>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                                        
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
