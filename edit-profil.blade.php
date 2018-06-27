@extends('user-default')

    @section('content')
     <!-- Page wrapper  -->
     <div class="home-wrapper">
       <!-- Container Fluid -->
       <div class="col-lg-12">
         <div class="card">

           <div class="media">
               <div class="media-left meida media-middle">
                 <span><i class="fa fa-user f-s-40 color-danger"</i></span>
               </div>
               <div class="media-body media-text-right">
                 <h2>{{$user -> name}}</h2>
               </div>
           </div>

           <div class="row">
               <div class="col-lg-3">
                 <div class="card">
                   <div class="card-toggle-body">
                     <div class="button-list">
                       <div class="btn-group-vertical">
                         <button type="button" class="btn btn-success" onclick="window.location='{{ route('users.edit-profil') }}'">Profile</button>
                         <button type="button" class="btn btn-success" onclick="window.location='{{ route('kelas.edit-kelas') }}'">Mata Kuliah & Jadwal</button>
                         <button type="button" class="btn btn-success" onclick="window.location='{{ route('users.edit-pengalaman') }}'">Pengalaman</button>
                         <button type="button" class="btn btn-success" onclick="window.location='{{ route('users.ubah-sandi') }}'">Ubah Kata Sandi</button>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

               <div class="col-lg-8">
                  <div class="card">

                      <div class="card-title">
                          <h4>Edit Profile</h4>
                      </div>

                      <div class="card-body">
                        <div class="basic-form">
                            <form method="post" action="{{route('users.update', $user)}}">
                              {{ csrf_field() }}
                              {{ method_field('patch') }}
                              <div class="col-md-5">
                                <div class="text-center">
                                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5OXzJk62g-Kl3rwfBcKq0jllmtlM-4u68cNcW599fWrUVl708" class="avatar img-circle" alt="avatar">
                                  <label> Upload Foto Profile </label>
                                  <input type="file" class="form-control" value="{{ $user->picture }}" required>
                                </div>
                              </div>

                              <div class="form-group">
                                  <label>Nama</label>
                                  <input type="text" id="name" class="form-control" value="{{ $user->name }}" required>
                              </div>

                              <div class="form-group">
                                  <label>Jenis Kelamin</label>
                                  <select class="form-control" id="jk">
                                    <option value="{{ $user->jk }}"> --Jenis Kelamin-- </option>
                                    <option value="Laki-Laki"> Laki-Laki</option>
                                    <option value="Perempuan"> Perempuan</option>
                                  </select>
                              </div>

                              <div class="form-row">
                                <div class="col">
                                  <label>Fakultas</label>
                                  <select class="form-control" id="fakultas">
                                    <option value="{{ $user->fakultas }}"> Pilih ... </option>
                                    @foreach ($fak as $fakultas => $value)
                                    <option value="{{ $fakultas }}"> {{ $value }}</option>
                                    @endforeach
                                  </select>
                                </div>

                                <div class="col">
                                   <label>Departemen</label>
                                   <select class="form-control" id="departemen">
                                     <option value="{{ $user->departemen }}"> Pilih ... </option>

                                   </select>
                                </div>
                              </div>

                              <div class="form-group">
                               <label>Nomor HP</label>
                               <input type="number" class="form-control" id="telp" value="{{ $user->telp }}" required>
                              </div>

                              <div class="form-group">
                                  <label>Alamat Tempat Tinggal</label>
                                  <input type="text" class="form-control" id="alamat" value="{{ $user->alamat }}" required>
                              </div>

                              @if( Auth::user()->type=='2' )
                              <div class="form-group">
                                  <label>Biodata Singkat</label>
                                  <textarea rows="2" cols="50" id="bio">{{ $user->bio }}</textarea>
                              </div>

                              <div class="form-group">
                                  <label for="tentang">Tentang Saya</label>
                                  <textarea rows="4" cols="50" id="tentang"> {{ $user->tentang }}</textarea>
                              </div>
                              @endif

                              <div class="form-group">
                                  <label>Foto KTM</label>
                                  <input type="file" class="form-control" id="picture" value="{{ $user->picture }}" required>
                              </div>

                              <div class="form-group">
                                <a class="btn btn-danger" href="{{ route('users.index') }}">Back</a>
                                <button class="btn btn-success" type="submit" value="{{ $user->save }}">
                                  <a href="{{ route('users.index') }}">Submit</a>
                                </button>
                              </div>

                            </form>
                        </div>
                      </div>
                  </div>
               </div>

           </div>
         </div>
       </div>
       <!-- End Container Fluid -->
     </div>
     <!-- End Page Wrapper -->
     @endsection
