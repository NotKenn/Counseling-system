<!DOCTYPE html>
<html>
<head>
	<title>Students Report</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style>
        @page { margin : 1.5%:}
    </style>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
    th{
      font-size: 9pt;
      background-color:gray;
      text-align: center;
    }
	</style>
	<center>
		<h5>Students Report</h4>
	</center>

	<div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <table class="table table-bordered" style ="table-layout: fixed">
                            <thead>
                              <tr>
                                <th scope="col">NISN</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Nama Ayah</th>
                                <th scope="col">Nama Ibu</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Nomor Hp</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Status Siswa</th>
                            </thead>
                            <tbody>
                                <tr>
                                    @forelse ($students as $student)
                                <tr>
                                    <td>{{ $student->NISN }}</td>
                                    <td>{!! $student->Nama !!}</td>
                                    <td>{!! $student->namaAyah !!}</td>
                                    <td>{!! $student->namaIbu !!}</td>
                                    <td>{!! $student->tempatLahir !!}</td>
                                    <td>{!! $student->tglLahir !!}</td>
                                    <td>{!! $student->noHP !!}</td>
                                    <td>{!! $student->Alamat !!}</td>
                                    <td>{!! $student->statusKeaktifanSiswa !!}</td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Not Available.
                                  </div>
                              @endforelse
                                </tr>
                            </tbody>
                          </table>
</body>
</html>
