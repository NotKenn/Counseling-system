@extends('layouts.user_type.auth')

@section('content')

  <section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 mx-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
            <p class="text-lead text-white"></p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Add New User</h5>
            </div>
            <div class="row px-xl-5 px-sm-4 px-3">
            </div>
            <div class="card-body">
              <form role="form text-left" method="POST" action="{{route('users.update', $users->id)}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Name" value="{{old('namaUser', $users->namaUser)}}" name="namaUser" id="namaUser" aria-label="Your Name" aria-describedby="name">
                  @error('namaUser')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Username" value="{{old('username', $users->username)}}" name="username" id="username" aria-label="username" aria-describedby="email-addon">
                  @error('username')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                    <select type="text" class="form-control" value="{{old('role', $users->role)}}" placeholder="Role" name="role" id="role" aria-label="role">
                        <option value ="Admin"> Admin </option>
                        <option value ="Konselor"> Konselor </option>
                        <option value ="User"> Konselor </option>
                    </select>
                    @error('role')
                      <p class="text-danger text-xs mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password" value="{{old('password', $users->password)}}" name="password" id="password" aria-label="Password" aria-describedby="password-addon">
                  @error('password')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Done</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

