@extends('user-default')
        @section('content')
        <!-- Page wrapper  -->
        <div class = "home-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-title">
                        <h1 class="color-success">Ubah Kata Sandi</h1>
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
                                    @endif
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>



                        <div class="col-lg-8">
                           <div class="card">
                               <div class="card-body">
                                   <div class="basic-form">
                                       <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                                           {{ csrf_field() }}
                                         <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                             <label for="new-password" >Current Password</label>
                                             <input id="current-password" type="password" class="form-control" name="current-password" required>
                                             @if ($errors->has('current-password'))
                                                 <span class="help-block">
                                                     <strong>>Whooops!! {{ $errors->first('current-password') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                             <label for="new-password" >New Password</label>
                                                 <input id="new-password" type="password" class="form-control" name="new-password" required>


                                                 @if ($errors->has('new-password'))
                                                     <span class="help-block">
                                                         <strong>>Whooops!! {{ $errors->first('new-password') }}</strong>
                                                     </span>
                                                 @endif
                                         </div>
                                         <div class="form-group">
                                             <label for="new-password-confirm" >Confirm New Password</label>
                                            <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                            >Whooops!!
                                         </div>



                                           <button type="submit" class="btn btn-success">Change Password</button>
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
