@extends('user-default')
        @section('content')
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                  <form>
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Pengaturan</li>
                        <li><a>Departemen</a>
                          <select class="selectpicker" data-width='auto' id="dept">
                            <option selected> Pilih Departemen... </option>
                            <option> Ilmu Komputer </option>
                          </select>
                        </li>
                        <li><a>Mata Kuliah</a>
                          <select class="selectpicker" data-width='auto' id="dept">
                            <option selected> Pilih Mata Kuliah... </option>
                            <option> Ilmu Komputer </option>
                          </select>
                        </li><br>
                        <li class="nav-devider"></li>
                        <li class="nav-label">Filter Tambahan</li>
                        <li><a>Harga</a>
                          <select class="selectpicker" data-width='auto' id="dept">
                            <option selected> Pilih Harga... </option>
                            <option> Ilmu Komputer </option>
                          </select>
                        </li>
                        <li><a>Jenis Kelamin</a>
                          <select class="selectpicker" data-width='auto' id="dept">
                            <option selected> Pilih JK... </option>
                            <option> Ilmu Komputer </option>
                          </select>
                        </li><br>
                        <li> <button type="submit" class="btn btn-success">Cari</button> </li>
                    </ul>
                  </form>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Hasil Pencarian Tutor : Analisis Algoritma</h3>
                </div>
            </div>
            <!-- End Bread crumb -->

            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->

                <div class="basic-form">
                  <form>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                      <div class="card">
                          <div class="card-body">
                              <div class="card-two">
                                  <header>
                                      <div class="avatar">
                                          <img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Allison Walker" />
                                      </div>
                                  </header>

                                  <h3>{{$user -> name}}</h3>
                                  <div class="desc">
                                        {{$user -> fakultas}} - {{$user -> departemen}}
                                        <h4 class="text-primary font-weight-bold">
                                            Rp 25.000/jam
                                        </h4>
                                    <button class="btn btn-success" onclick="window.location='{{ url('/userhome') }}'"> Kunjungi Profil </button>
                                  </div>
                                </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card">
                          <div class="card-body">
                              <div class="card-two">
                                  <header>
                                      <div class="avatar">
                                          <img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Allison Walker" />
                                      </div>
                                  </header>

                                  <h3>{{$user -> name}}</h3>
                                  <div class="desc">
                                        {{$user -> fakultas}} - {{$user -> departemen}}
                                        <h4 class="text-primary font-weight-bold">
                                            Rp 25.000/jam
                                        </h4>
                                    <button class="btn btn-success" onclick="window.location='{{ url('/userhome') }}'"> Kunjungi Profil </button>
                                  </div>
                                </div>
                          </div>
                      </div>
                    </div>


                </div>


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->

        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
@endsection
