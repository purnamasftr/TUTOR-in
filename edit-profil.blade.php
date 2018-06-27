@extends('user-default')

        @section('content')
        <!-- Page wrapper  -->

        @if(count($errors) > 0)
          <div class="alert alert-danger">
            <strong>Whooops!! </strong> There were some problems with your input.<br>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <div class = "home-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-title">
                        <h1 class="color-success">Edit Profil</h1>
                      </div>
                      <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                              <div class="card-toggle-body">
                                <div class="button-list">
                                  <div class="btn-group-vertical">
                                      <button type="button" onclick="window.location='{{ route('users.edit', Auth::user()->id)}}'" class="btn btn-success">Profil</button>
                                      <button type="button" onclick="window.location='{{ route('users.ubah-sandi') }}'" class="btn btn-success">Ubah Password</button>
                                      @if( Auth::user()->type=='2' )
                                      <button type="button" onclick="window.location='{{ route('kelas.edit-kelas') }}'" class="btn btn-success">Kelas</button>
                                      <button type="button" onclick="window.location='{{ route('users.edit-pengalaman') }}'" class="btn btn-success">Pengalaman</button>
                                      @endif
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                           <div class="card">
                               <div class="card-title">
                                   <h4>Edit Profile</h4>
                               </div>
                               <div class="card-body">
                                   <div class="basic-form">
                                       <form method="POST" action="{{route('users.update', $user)}}">
                                         {{ csrf_field() }}
                                         <div class="col-md-5">
                                            <div class="text-center">
                                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5OXzJk62g-Kl3rwfBcKq0jllmtlM-4u68cNcW599fWrUVl708" class="avatar img-circle" alt="avatar">
                                              <label> Upload Foto Profile </label>
                                              <input type="file" class="form-control" value="{{$user -> picture}}">
                                            </div>
                                         </div>

                                         <div class="form-group">
                                             <label>Nama</label>
                                             <input type="text" name="name" class="form-control" value="{{ $user->name }}" />
                                         </div>

                                         <div class="form-group">
                                             <label>Jenis Kelamin</label>
                                             <select name="jk" class="form-control">
                                                 <option value="{{ $user->jk }}">--Jenis Kelamin--</option>
                                                 <option value="Laki-laki"> Laki-laki</option>
                                                 <option value="Perempuan"> Perempuan</option>
                                             </select>
                                         </div>

                                         <div class="form-row">
                                           <div class="col">
                                             <label>Fakultas</label>
                                             <select name="fakultas" id="fakultas" class="form-control dynamic">
                                                 <option value="">--Select Fakultas--</option>
                                                 @foreach ($fak as $fakultas => $value)
                                                 <option value="{{ $fakultas }}"> {{ $value }}</option>
                                                 @endforeach
                                             </select>
                                           </div>

                                           <div class="col">
                                              <label>Departemen</label>
                                              <div class="form-group">
                                                <select name="departemen" id="departemen" class="form-control dynamic">
                                                  <option>--Select Departemen--</option>
                                                </select>
                                              </div>
                                           </div>
                                         </div>

                                         <div class="form-group">
                                          <label>Nomor HP</label>
                                          <input type="text" name="telp" class="form-control" value="{{ $user->telp }}" />
                                         </div>

                                         <div class="form-group">
                                             <label>Alamat Tempat Tinggal</label>
                                             <textarea rows="2" cols="65" name="alamat">{{ $user->alamat }}</textarea>
                                         </div>

                                         @if( Auth::user()->type=='2' )
                                         <div class="form-group">
                                             <label>Biodata Singkat</label>
                                             <textarea rows="3" cols="65" name="bio">{{ $user->bio }}</textarea>
                                         </div>

                                         <div class="form-group">
                                           <label for="tentang">Tentang Saya</label>
                                           <textarea rows="4" cols="65" name="tentang"> {{ $user->tentang }}</textarea>
                                         </div>
                                         @endif

                                         <div class="form-group">
                                             <label>Foto KTM</label>
                                             <input type="file" class="form-control" id="foto_ktm">
                                         </div>

                                         <div class="form-group">
                                           <a class="btn btn-success" href="{{ route('users.index') }}">Back</a>
                                           <button class="btn btn-primary" type="submit">Send</button>
                                         </div>

                                       </form>
                                   </div>
                               </div>
                           </div>
                           <!-- /# card -->
                        </div>

                      </div>
                    </div>
                </div>
                </div>
                <!-- End Page Content -->
            </div>
            <!-- End Container fluid  -->
        </div>
        <!-- End Page wrapper  -->

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

    @endsection
