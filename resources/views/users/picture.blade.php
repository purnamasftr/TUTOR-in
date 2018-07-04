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
                                      <button type="button" onclick="window.location='{{ route('users.edit-profil', Auth::user()->id)}}'" class="btn btn-success">Profil</button>
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

                                  <form method="post" action="{{route('picture.update', $user)}}" enctype="multipart/form-data" >
                                      {{ csrf_field() }}
                                      {{ method_field('patch') }}
                                      <div class="form-group">
                                         <div class="col-md-5">
                                            <div class="text-center">
                                                <img src="/storage/{{ $user->picture }}" class="img-circle" height=200 weight=200/>
                                              <label> Upload Foto Profile </label>
                                              <input type="file" class="form-control" name="picture" id="picture">
                                            </div>
                                         </div>
                                      </div>
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

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

    @endsection
