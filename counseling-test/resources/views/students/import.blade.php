@extends('layouts.user_type.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('students.upload') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}

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
                            
                            
                            <div class="form-group">
                                <label for="description">Import Excel</label>
                                <input type="file" class="form-control" id ="inputGroupField01" name="importExcel">
                            </div>
                            <div class="col-md-12 mb-3 mt-3">
                                <p><a href="{{ asset('/assets/files/contoh-excel-import.xlsx') }}" target="_blank">Please Upload in Given Format</a></p>
                            </div>
                    </div>

                    <div class="card-footer text-right">
                        <a href="{{url()->previous()}}" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
