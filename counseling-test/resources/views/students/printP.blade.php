<!DOCTYPE html>
<html>
<head>
	<title>Students Report</title>
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
    p{
      font-size: 9pt;
      text-align: center;
      padding-right: 13%;
    }
	</style>
  
  <div class="col-lg-5 ms-auto mt-5 mt-lg-0" style="width:auto;height:auto;float:left">
        <img height="128" width="112" src="..\public\assets\img\shapes\logo.png">
  </div>
  <br>
  <div>
        <p>
          <br>
        <b style="font-size: 13pt">SEKOLAH MENENGAH PERTAMA SWASTA KRISTEN</b> <br>
        <b style="font-size: 13pt">T A B Q H A</b> <br>
        TERAKREDITASI - A<br> 
        NPSN: 69757259 <br>
        Komplek Center Park Blok lll No.03 - Batam Centre 🕾 (0778) 478 988 <br>
        E-mail: smpkristentabqha@tabgha.education <br>
      ______________________________________________________________________________________________________________________________________________________________________________________________________</p>

  </div>
  <br>
	<center>
		<h5>Students Report</h4>
	</center>

	<div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <table class="table table-bordered" style="table-layout: fixed">
                            <thead>
                              <tr>  
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Kelas Siswa</th>
                                <th scope="col">Tanggal Partisipasi</th>
                                <th scope="col">Nama Kegiatan</th>
                                <th scope="col">Tingkat Kegiatan</th>
                                <th scope="col">Preingkat</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @forelse ($prestasi as $pres)
                                    <tr>
                                    <td>{!! $pres->student->Nama !!}</td>
                                    <td>{!! $pres->jenisKonseling !!}</td>
                                    <td>{!! $pres->tglKonseling !!}</td>
                                    <td>{!! $pres->deskripsiMasalah !!}</td>
                                    <td>{!! $pres->tindakan !!}</td>
                                    <td>{!! $pres->catatan !!}</td>
                                    
                                    @empty

                                    @endforelse
                                    <tr>
                                </tr>
                            </tbody>
                          </table>
                        </div>
</body>
</html>
