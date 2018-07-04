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
                                    <button type="button" onclick="window.location='{{ route('users.edit-profil')}}'" class="btn btn-info">Profil</button>
                                    <button type="button" onclick="window.location='{{ route('picture.index')}}'" class="btn btn-success">Foto Profil</button>
                                    <button type="button" onclick="window.location='{{ route('users.ubah-sandi') }}'" class="btn btn-success">Ubah Password</button>
                                    @if( Auth::user()->type=='2' )
                                    <button type="button" onclick="window.location='{{ route('kelas.index') }}'" class="btn btn-success">Kelas</button>
                                    <button type="button" onclick="window.location='{{ route('profil-tutor', Auth::user()->id) }}'" class="btn btn-primary">Lihat Tampilan Saya</button>
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
                                         {{ method_field('patch') }}

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
                                                 <option value="{{$user -> fakultas}}">--Select Fakultas--</option>
                                                 @foreach ($fak as $fakultas => $value)
                                                 <option value="{{ $fakultas }}"> {{ $value }}</option>
                                                 @endforeach
                                             </select>
                                           </div>

                                           <div class="col">
                                              <label>Departemen</label>
                                              <div class="form-group">
                                                <select name="departemen" id="departemen" class="form-control dynamic">
                                                  <option value="{{$user -> departemen}}">--Select Departemen--</option>
                                                </select>
                                              </div>
                                           </div>
                                         </div>

                                         <div class="form-group">
                                          <label>Nomor HP</label>
                                          <input type="number" min="0" name="telp" class="form-control" maxlength="12" value="{{ $user->telp }}" />
                                         </div>

                                         <div class="form-group">
                                             <label>Alamat Tempat Tinggal</label>
                                             <textarea type="text" rows="5" class="textarea_editor form-control" style="height:100px" name="alamat">{{ $user->alamat }}</textarea>
                                         </div>

                                         @if( Auth::user()->type=='2' )
                                         <div class="form-group">
                                             <label>Biodata Singkat</label>
                                             <textarea rows="3" class="textarea_editor form-control" style="height:100px" name="bio">{{ $user->bio }}</textarea>
                                         </div>

                                         <div class="form-group">
                                           <label for="tentang">Tentang Saya</label>
                                           <textarea rows="4" class="textarea_editor form-control" style="height:100px" name="tentang"> {{ $user->tentang }}</textarea>
                                         </div>

                                         <div class="form-group">
                                             <label>Pengalaman Mengajar</label>
                                             <textarea rows="4" class="textarea_editor form-control" style="height:100px" name="pengalaman">{{ $user->pengalaman }}</textarea>
                                         </div>

                                         <div class="form-group">
                                             <label>Riwayat Pendidikan</label>
                                             <textarea rows="4" class="textarea_editor form-control" style="height:100px" name="riwayat" rows="3">{{ $user->riwayat }}</textarea>
                                         </div>

                                         <div class="form-group">
                                           <label for="tentang">Jadwal</label>
                                           <textarea rows="4" class="textarea_editor form-control" style="height:100px" name="jadwal">{{ $user->jadwal }}</textarea>
                                         </div>
                                         @endif

                                         <div class="form-group">
                                           <a class="btn btn-success" href="{{ route('pages.userhome') }}">Back</a>
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
    @endsection
