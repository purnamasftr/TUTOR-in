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
                        <h1 class="color-success">Edit Profil</h1>
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
                        <div class="col-lg-9">
                           <div class="card">
                               <div class="card-title">
                                   <h4>Edit Profile</h4>
                               </div>
                               <div class="card-body">
                                   <div class="basic-form">
                                       <form>
                                         <div class="col-md-5">
                                        <div class="text-center">
                                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5OXzJk62g-Kl3rwfBcKq0jllmtlM-4u68cNcW599fWrUVl708" class="avatar img-circle" alt="avatar">
                                          <label> Upload Foto Profile </label>
                                          <input type="file" class="form-control" required>
                                        </div>
                                       </div>
                                         <div class="form-group">
                                             <label>Nama</label>
                                             <input type="text" class="form-control" id="user" required>
                                         </div>
                                         <div class="form-group">
                                             <label>Jenis Kelamin</label>
                                             <select class="form-control" id="jk">
                                               <option selected> Pilih... </option>
                                               <option> Laki-Laki </option>
                                               <option> Perempuan </option>
                                             </select>
                                         </div>
                                         <div class="form-row">
                                           <div class="col">
                                             <label>Fakultas</label>
                                             <select class="form-control" id="fakultas">
                                               <option selected> Pilih ... </option>
                                               <option> FAPERTA </option>
                                               <option> FKH </option>
                                               <option> FPIK </option>
                                               <option> FAPET </option>
                                               <option> FAHUTAN </option>
                                               <option> FATETA </option>
                                               <option> FMIPA </option>
                                               <option> FEM </option>
                                               <option> FEMA </option>
                                               <option> SEKOLAH BISNIS </option>
                                             </select>
                                           </div>

                                           <div class="col">
                                              <label>Departemen</label>
                                              <select class="form-control" id="dept">
                                                <option selected> Pilih ... </option>
                                                <option> Agribisnis </option>
                                                <option> Agronomi dan Hortikultura </option>
                                                <option> Aktuaria </option>
                                                <option> Arsitektur Lanskap </option>
                                                <option> Biokimia </option>
                                                <option> Biologi </option>
                                                <option> Bisnis </option>
                                                <option> Fisika </option>
                                                <option> Ilmu Gizi </option>
                                                <option> Ilmu Keluarga dan Konsumen </option>
                                                <option> Ilmu Komputer </option>
                                                <option> Kedokteran Hewan </option>
                                                <option> Manajemen </option>
                                                <option> Manajemen Hutan </option>
                                                <option> Proteksi Tanaman </option>
                                                <option> Silvikultur </option>
                                              </select>
                                           </div>
                                         </div>
                                         <div class="form-group">
                                          <label>Nomor HP</label>
                                          <input type="number" class="form-control" id="nomor" required>
                                         </div>
                                         <div class="form-group">
                                             <label>Alamat Tempat Tinggal</label>
                                             <input type="text" class="form-control" id="alamat" placeholder="Alamat" required>
                                         </div>
                                         <div class="form-group">
                                             <label>Biodata Singkat</label>
                                             <input type="text" class="form-control" id="bio" placeholder=""></input>
                                         </div>
                                         <div class="form-group">
                                           <label for="tentang">Tentang Saya</label>
                                           <textarea class="form-control" id="tentang" rows="3"></textarea>
                                         </div>
                                         <div class="form-group">
                                             <label>Foto KTM</label>
                                             <input type="file" class="form-control" id="foto_ktm" required>
                                         </div>
                                         <button type="submit" class="btn btn-success ">Submit</button>

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
