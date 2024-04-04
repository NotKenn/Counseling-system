<!DOCTYPE html>
<html>
<head>
	<title>Counseling Report</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
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
		<h5>Laporan Konseling Pribadi</h4>
	</center>

	<div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <table class="table table-bordered" style="table-layout: fixed">
                            <thead>
                              <tr>
                                <th scope="col">Konselor</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Jenis Konseling</th>
                                <th scope="col">Tanggal Konseling</th>
                                <th scope="col">Deskripsi Masalah</th>
                                <th scope="col">Tindakan</th>
                                <th scope="col">Catatan</th>
                                <th scope="col">Rencana Tindak Lanjut</th>
                                <th scope="col">Tanggal RTL</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @forelse ($notes as $note)
                                  <tr>
                                    <td>{!! $note->user->namaUser !!}</td>
                                    <td>{!! $note->student->Nama !!}</td>
                                    <td>{!! $note->jenisKonseling !!}</td>
                                    <td>{!! $note->tglKonseling !!}</td>
                                    <td>{!! $note->deskripsiMasalah !!}</td>
                                    <td>{!! $note->tindakan !!}</td>
                                    <td>{!! $note->catatan !!}</td>
                                    <td>{!! $note->rencanaTindakLanjut !!}</td>
                                    <td>{!! $note->tglRTL !!}</td>
                                    <td>{!! $note->status !!}</td>
                                  </tr>
                                    @empty

                                    @endforelse
                                </tr>
                            </tbody>
                          </table>
</body>
</html>
