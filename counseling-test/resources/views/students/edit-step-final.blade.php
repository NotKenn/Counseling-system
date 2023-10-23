@extends('layouts.user_type.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('students.edit-step-final-post', $student->id) }}" method="POST">
                {{csrf_field()}}


                <div class="card">
                    <div class="card-header">Step 4: Confirm Data</div>

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

                            <table class="table align-items-center mb-0 table-responsive" id ="table-data">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            NISN
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Nama
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tempat Lahir
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tanggal Lahir
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No. Hp
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                            <td class="ps-4 text-xs font-weight-bold mb-0">
                                                {{ $student->NISN }}
                                            </td>
                                            <td class="ps-2 text-xs font-weight-bold mb-0">
                                                {{ $student->Nama }}
                                            </td>
                                            <td class="text-center text-xs font-weight-bold mb-0">
                                                {{ $student->tempatLahir }}
                                            </td>
                                            <td class="text-center text-xs font-weight-bold mb-0">
                                                {{ $student->tglLahir }}
                                            </td>
                                            <td class="text-center text-xs font-weight-bold mb-0">
                                                {{ $student->noHP }}
                                            </td>
                                            <td class="text-center text-xs font-weight-bold mb-0">
                                                {{ $student->statusKeaktifanSiswa }}
                                            </td>
                                    </tr>
                                </tbody>
                            </table>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Finish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
