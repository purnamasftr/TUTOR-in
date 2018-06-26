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
                        <h1 class="color-success">Edit Kelas</h1>
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
                                      <button type="button" onclick="window.location='{{ route('users.ubah-sandi') }}'" class="btn btn-success">Ubah Password</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                           <div class="card">
                               <div class="card-title">
                                   <h4>Mata Kuliah & Jadwal</h4>
                               </div>
                               <div class="card-body">
                                 <form>
                                     <div class="form-row">
                                       <div class="col-md-6 mb-3">
                                         <select class="selectpicker" data-actions-box="true" data-width="auto">
                                           <option>--select Departemen--</option>
                                           <option>option2</option>
                                           <option>option3</option>
                                           <option>option4</option>
                                         </select>
                                       </div>
                                       <div class="col-md-6 mb-3">
                                         <select class="selectpicker" data-actions-box="true" data-width="auto">
                                           <option>--select Mata Kuliah--</option>
                                           <option>option2</option>
                                           <option>option3</option>
                                           <option>option4</option>
                                         </select>
                                       </div>
                                       <div class="col-md-6 mb-3">
                                         <label> Harga/jam </label>
                                         <textarea class="form-control" id="tentang" rows="3"></textarea>
                                       </div>
                                     </div>
                                     <button type="submit" class="btn btn-success">Submit</button>
                                 </form>
                                </div>

                          </div>
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
