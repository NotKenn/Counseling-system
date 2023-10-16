@extends('layouts.user_type.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('students.edit-step-three-post', $student->id) }}" method="POST">
                {{csrf_field()}}


                <div class="card">
                    <div class="card-header">Step 3: Guardian's Info</div>

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

                            <div class="form-group">
                                <label>Nama Wali</label>
                                <input type="text" class="form-control" value="{{ old('namaWali', $student->namaWali) }}" id="namaWali"  name="namaWali">
                            </div>
                            <div class="form-group">
                                <label>No. Hp</label>
                                <input type="text" class="form-control" value="{{ old('noHPWali', $student->noHPWali) }}" id="noHPWali" name="noHPWali">
                            </div>

                            <div class="form-group">
                                <label for="description">Pekerjaan Wali</label>
                                <input type="text" class="form-control" value="{{ old('pekerjaanWali', $student->pekerjaanWali) }}" id="pekerjaanWali" name="pekerjaanWali">
                            </div>

                            <div class="form-group">
                                <label for="description">Alamat Wali</label>
                                <input type="text" class="form-control" value="{{ old('alamatWali', $student->alamatWali) }}" id="alamatWali" name="alamatWali">
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
