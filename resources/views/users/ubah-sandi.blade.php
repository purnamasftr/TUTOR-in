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
                                      <button type="button" onclick="window.location='{{ route('users.edit-profil') }}'" class="btn btn-success">Profil</button>
                                      <button type="button" onclick="window.location='{{ route('kelas.edit-kelas') }}'" class="btn btn-success">Kelas</button>
                                      <button type="button" onclick="window.location='{{ route('users.edit-pengalaman') }}'" class="btn btn-success">Pengalaman</button>
                                      <button type="button" onclick="window.location='{{ route('users.ubah-sandi') }}'" class="btn btn-success">Ubah Kata Sandi</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                           <div class="card">
                               <div class="card-title">
                                   <h4>Ubah Kata Sandi</h4>
                               </div>
                               <div class="card-body">
                                   <div class="basic-form">
                                       <form>
                                           <div class="form-group">
                                               <label>Kata Sandi Baru</label>
                                               <input class="form-control" type="password">
                                           </div>

                                           <button type="submit" class="btn btn-success">Submit</button>
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
