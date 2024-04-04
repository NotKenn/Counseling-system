<!DOCTYPE html>
<html>
<head>
	<title>Achievements Report</title>
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
		<h5>Laporan Prestasi</h4>
	</center>

	<div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <table class="table table-bordered" style="table-layout: fixed">
                            <thead>
                              <tr>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Tanggal Kasus</th>
                                <th scope="col">Penjalasan</th>
                                <th scope="col">Penanganan</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @forelse ($kasus as $kas)
                                  <tr>
                                    <td>{!! $kas->student->Nama !!}</td>
                                    <td>{!! $kas->tglKasus !!}</td>
                                    <td>{!! $kas->penjelasan !!}</td>
                                    <td>{!! $kas->penanganan !!}</td>
                                    <td>{!! $kas->status !!}</td>
                                  </tr>
                                    @empty

                                    @endforelse
                                </tr>
                            </tbody>
                          </table>
</body>
</html>
