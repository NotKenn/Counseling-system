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
                                <th scope="col">Target Konseling</th>
                                <th scope="col">Tanggal Pelaksanaan</th>
                                <th scope="col">Materi</th>
                                <th scope="col">Tanggal Realisasi</th>
                                <th scope="col">Evaluasi Proses</th>
                                <th scope="col">Evaluasi Akhir</th>
                                <th scope="col">Status</th>
                                <th scope="col">Hambatant</th>
                                <th scope="col">Solusi Alternatif</th>
                                <th scope="col">Rencana Tindak Lanjut</th>
                            
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @forelse ($noteK as $note)
                                  <tr>
                                    <td>{!! $note->user->namaUser !!}</td>
                                    <td>{!! $note->targerKonselingKelompok !!}</td>
                                    <td>{!! $note->tglRencanaPelaksanaan !!}</td>
                                    <td>{!! $note->materi !!}</td>
                                    <td>{!! $note->tglRealisasiPelaksanaan !!}</td>
                                    <td>{!! $note->evaluasiProses !!}</td>
                                    <td>{!! $note->evaluasiAkhir !!}</td>
                                    <td>{!! $note->status !!}</td>
                                    <td>{!! $note->descHambatan !!}</td>
                                    <td>{!! $note->descAltSolusi !!}</td>
                                    <td>{!! $note->descRTL !!}</td>
                                  </tr>
                                    @empty

                                    @endforelse
                                </tr>
                            </tbody>
                          </table>
</body>
</html>
