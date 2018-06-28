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
                    <h3 class="text-primary">Hasil Pencarian Tutor : <b> {{ $query }} </b></h3>
                </div>
            </div>
            <!-- End Bread crumb -->

            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
              @if(isset($details))

                <div class="row">
                  @if ($details->count()>0)
                  @foreach($details as $kelas)
                    <div class="col-lg-4">
                      <div class="card">
                          <div class="card-body">
                              <div class="card-two">
                                  <header>
                                      <div class="avatar">
                                          <img src="/storage/{{ $kelas->picture }}" alt="{{$kelas->name}}" />
                                      </div>
                                  </header>

                                  <h3>{{$kelas -> name }}</h3>
                                  <div class="desc">
                                        <p>{{$kelas->id_departemen}}/{{$kelas->nama_departemen}}<p>
                                        <h4 class="text-primary font-weight-bold">
                                            Rp.{{$kelas->harga}}
                                        </h4>
                                    <a class="btn btn-success" href="{{ route('profil-tutor', $kelas->id_tutor) }}"> Kunjungi Profil </a>
                                  </div>
                                </div>
                          </div>
                      </div>
                    </div>
                  @endforeach
                  @else
                  a
                  @endif
                </div>

              @endif
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->

        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
@endsection
