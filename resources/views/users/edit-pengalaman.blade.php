@extends('user-default')
        @section('content')
        <!-- Page wrapper  -->
        <div class="home-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-title">
                        <h1 class="color-success">Edit Pengalaman</h1>
                      </div>
                      <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                              <div class="card-toggle-body">
                                <div class="button-list">
                                  <div class="btn-group-vertical">
                                      <button type="button" onclick="window.location='{{ route('users.edit-profil') }}'" class="btn btn-success">Profil</button>
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

                        <div class="col-lg-8">
                           <div class="card">
                               <div class="card-title">
                                   <h4>Pengalaman & Riwayat</h4>
                               </div>
                               <div class="card-body">
                                   <div class="basic-form">
                                       <form>
                                           <div class="form-group">
                                               <label>Pengalaman Mengajar</label>
                                               <textarea class="form-control" id="pengalaman" rows="3" placeholder="Enter text ..." style="height:100px"></textarea>
                                           </div>

                                           <div class="form-group">
                                               <label>Riwayat Pendidikan</label>
                                               <textarea class="form-control" id="pendidikan" rows="3" placeholder="Enter text ..." style="height:100px"></textarea>
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
