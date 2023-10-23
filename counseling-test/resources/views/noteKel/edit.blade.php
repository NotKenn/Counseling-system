@extends('layouts.user_type.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('noteKel.update', $notesK->id) }}" method="POST">
                {{csrf_field()}}
                @method('PUT')

                <div class="card">
                    <div class="card-header">Create Note</div>

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

                            <div class="form-group" style="display:none">
                                <label>Konselor</label>
                                <input type="number" class="form-control" value="{{auth()->user()->id}}" id="user_id"  name="user_id" readonly>
                            </div>

                            <div class="form-group">
                                <label for="description">Target Konseling</label>
                                <input type="text" class="form-control" value="{{old('targetKonselingKelompok', $notesK->targetKonselingKelompok)}}"
                                 id="targetKonselingKelompok" name="targetKonselingKelompok">
                            </div>

                            <div class="form-group">
                                <label>Tanggal Rencana</label>
                                <input type="date" class="form-control" value="{{old('tglRencanaPelaksanaan', $notesK->tglRencanaPelaksanaan)}}"
                                id="tglRencanaPelaksanaan" name="tglRencanaPelaksanaan">
                            </div>

                            <div class="form-group">
                                <label for="description">Materi</label>
                                <input type="text" class="form-control" value="{{old('materi', $notesK->materi)}}" id="materi" name="materi">
                            </div>

                            <div class="form-group">
                                <label for="description">Tanggal Realisasi</label>
                                <input type="date" class="form-control" value="{{old('tlgRealisasiPelaksanaan', $notesK->tlgRealisasiPelaksanaan)}}"
                                id="tglRealisasiPelaksanaan" name="tglRealisasiPelaksanaan">
                            </div>

                            <div class="form-group">
                                <label for="description">Evaluasi Proses</label>
                                <input type="text" class="form-control" value="{{old('evaluasiProses', $notesK->evaluasiProses)}}" id="evaluasiProses" name="evaluasiProses">
                            </div>

                            <div class="form-group">
                                <label for="description">Evaluasi Akhir</label>
                                <input type="text" class="form-control" value="{{old('evaluasiAkhir', $notesK->evaluasiAkhir)}}" id="evaluasiAkhir" name="evaluasiAkhir">
                            </div>

                            <div class="form-group">
                                <label for="description">Status</label>
                                <select type="text" class="form-control" value="{{old('status', $notesK->status)}}" id="status" name="status">
                                    <option value ="Selesai"> Selesai </option>
                                    <option value ="Dalam Pemantauan"> Dalam Pemantauan </option>
                                    <option value ="Tidak Selesai"> Tidak Selesai </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description">Hambatan</label>
                                <input type="text" class="form-control" value="{{old('descHambatan', $notesK->descHambatan)}}" id="descHambatan" name="descHambatan">
                            </div>

                            <div class="form-group">
                                <label for="description">Solusi Alternatif</label>
                                <input type="text" class="form-control" value="{{old('descAltSolusi', $notesK->descAltSolusi)}}" id="descAltSolusi" name="descAltSolusi">
                            </div>

                            <div class="form-group">
                                <label for="description">Rencana Tindak Lanjut</label>
                                <input type="text" class="form-control" value="{{old('descRTL', $notesK->descRTL)}}" id="descRTL" name="descRTL">
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
