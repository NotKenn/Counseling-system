@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, and Remove Notes Data!</strong>
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
                        <a href="{{route('noteInd.create')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Note</a>
                    </div>

                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0 table-responsive" id ="table-data">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Nama Pembimbing
                                    </th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Nama Siswa
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Tanggal Konseling
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Jenis Konseling
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    @auth
                                    @if(auth()->user()->role != "User")
                                    
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                    @endif
                                    @endauth
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($notes as $note)
                                <tr>
                                        <td class="ps-4 text-s font-weight-bold mb-0">
                                            {{$note->user->namaUser}}
                                        </td>
                                        <td class="ps-4 text-s font-weight-bold mb-0">
                                            {{ $note->student->Nama }}
                                        </td>
                                        <td class="p-2 text-center text-s font-weight-bold mb-0">
                                            {{ $note->tglKonseling }}
                                        </td>
                                        <td class="text-center text-s font-weight-bold mb-0">
                                            {{ $note->jenisKonseling }}
                                        </td>
                                        <td class="text-center text-s font-weight-bold mb-0">
                                            {{ $note->status }}
                                        </td>
                                        <td class="text-center ">
                                            @auth
                                            @if(auth()->user()->role != "User")
                                            <a href="{{route('noteInd.edit', $note->id)}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Note">
                                                <i class="fas fa-user-edit text-secondary"></i>
                                            </a>
                                            <span>
                                            <a href="{{route('noteInd.destroy', $note->id)}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Remove Note">
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
                        <a href = "{{route('noteInd.printPdf')}}" style = "float:right; margin-right:1.5%;" class="btn bg-gradient-primary btn-sm mb-0" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                                <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707z"/>
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                              </svg>
                            Export to PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
