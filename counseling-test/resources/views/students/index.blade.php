@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, and Remove Students Data!</strong>
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Students</h5>
                        </div>
                        <div class="ms-md-3 pe-md-3 d-flex align-items-left">
                            <div class="input-group">
                                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                <input type="text" class="form-control form-control-navbar" name="" id="search-item" placeholder="Search by Name" onkeyup="search()">
                            </div>
                            <script>
                                function search(){
                                    var td, tr, searchbox, table, filter, textvalue;
                                    searchbox = document.getElementById("search-item")
                                    filter = searchbox.value.toUpperCase()
                                    table = document.getElementById("table-data")
                                    tr = table.getElementsByTagName("tr")

                                    for(var i = 0; i < tr.length; i++){
                                        td = tr[i].getElementsByTagName('td')[1];
                                        if(td){
                                            textvalue = td.textContent || td.innerText;

                                            if(textvalue.toUpperCase().indexOf(filter) > -1){
                                                tr[i].style.display = "";
                                            }else{
                                                tr[i].style.display = "none";
                                            }
                                        }
                                    }
                                }
                            </script>
                            </div>
                            @auth
                            @if(auth()->user()->role != "User")
                            <a href="students/create-step-one" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Student</a>
                            @endif
                            @endauth
                    </div>

                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0 table-responsive" id ="table-data">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        NISN
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
                                        Nama
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Tempat Lahir
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Tanggal Lahir
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        No. Hp
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($students as $student)
                                <tr>
                                        <td class="ps-4 text-s font-weight-bold mb-0">
                                            {{ $student->NISN }}
                                        </td>
                                        <td class="ps-2 text-s font-weight-bold mb-0">
                                            {{ $student->Nama }}
                                        </td>
                                        <td class="text-center text-s font-weight-bold mb-0">
                                            {{ $student->tempatLahir }}
                                        </td>
                                        <td class="text-center text-s font-weight-bold mb-0">
                                            {{ $student->tglLahir }}
                                        </td>
                                        <td class="text-center text-s font-weight-bold mb-0">
                                            {{ $student->noHP }}
                                        </td>
                                        <td class="text-center text-s font-weight-bold mb-0">
                                            {{ $student->statusKeaktifanSiswa }}
                                        </td>
                                        <td class="text-center ">
                                            @auth
                                            @if(auth()->user()->role != "User")
                                            <a href="{{route('students.edit-step-one', $student->id)}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Student">
                                                <i class="fas fa-user-edit text-secondary"></i>
                                            </a>
                                            @endif
                                            @endauth
                                            <a href="{{route('students.detail', $student->id)}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Detail Student">
                                                <i class="fas fa-address-card text-secondary"></i>
                                            </a>
                                            @auth
                                            @if(auth()->user()->role != "User")
                                            <span>
                                            <a href="{{route('students.destroy', $student->id)}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Remove Student">
                                                <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                            </a>
                                            </span>
                                            @endif
                                            @endauth 
                                        </td>
                                @empty

                                @endforelse
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        @auth
                        @if(auth()->user()->role != "User")
                        <a href = "{{route('students.printAll')}}" style = "float:right; margin-right:1.5%;" class="btn bg-gradient-primary btn-sm mb-0" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                                <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707z"/>
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                              </svg>
                            Export to PDF
                        </a>
                        <a href = "{{route('students.import')}}" style = "float:right; margin-right:1.5%;" class="btn bg-gradient-primary btn-sm mb-0" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z"/>
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                              </svg>
                            Import from Excel
                        </a>
                        @endif
                        @endauth
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
