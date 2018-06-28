        @extends('user-default')

        @section('content')
        <!-- Page wrapper  -->
        <div class="home-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">

                <!-- Start Page Content -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-two">
                                    <header>
                                        <div class="avatar">
                                            <img src="/storage/{{ Auth::user()->picture }}"/>
                                        </div>
                                    </header>

                                    <h3>{{$user -> name}}</h3>
                                    <div class="desc">
                                        {{$user -> fakultas}}
                                        <br>Departemen {{$user -> departemen}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#kelas-aktif" role="tab">Kelas Aktif</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#permintaan-tutor" role="tab">Permintaan Tutor</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#histori-kelas" role="tab">Histori Kelas</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tutor-aktif" role="tab">Tutor Aktif</a> </li>
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#pengajuan-tutor" role="tab">Pengajuan Tutor</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#histori-tutor" role="tab">Histori Tutor</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Tab Tutor -->
                                <!-- Tab Kelas Aktif -->
                                <div class="tab-pane" id="kelas-aktif" role="tabpanel">
                                    <div class="card-body">
                                      <div class="m-t-20 row">
                                        <div class="col-md-2 col-xs-12">
                                          <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="user" class="img-responsive radius" />
                                        </div>
                                        <div class="col-md-10 col-xs-12">
                                          <h2> <strong>Perilaku Konsumen</strong> </h2>
                                          <h4> Murid : Velia Deby Rachmawati</strong> </h4>
                                          <a href="javascript:;" data-toggle="modal" data-target="#detail-kelas-modal" class="btn btn-success"> Lihat Detail</a>
                                        </div>
                                      </div>
                                    </div>
                                      <hr>
                                </div>
                                <!--Tab Permintaan Tutor-->
                                <div class="tab-pane" id="permintaan-tutor" role="tabpanel">
                                    <div class="card-body">
                                      <div class="card-body">
                                        <div class="m-t-20 row">
                                          <div class="col-md-2 col-xs-12">
                                            <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="user" class="img-responsive radius" />
                                          </div>
                                          <div class="col-md-10 col-xs-12">
                                            <h2> <strong>Perilaku Konsumen</strong> </h2>
                                            <h4> Murid : Velia Deby Rachmawati</strong> </h4>
                                            <a href="javascript:;" data-toggle="modal" data-target="#detail-kelas-modal" class="btn btn-success"> Lihat Detail</a>
                                          </div>
                                        </div>
                                      </div>
                                        <hr>
                                    </div>
                                </div>
                                <!--Histori Kelas-->
                                <div class="tab-pane" id="histori-kelas" role="tabpanel">
                                    <div class="card-body">
                                      <div class="card-body">
                                        <div class="m-t-20 row">
                                          <div class="col-md-2 col-xs-12">
                                            <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="user" class="img-responsive radius" />
                                          </div>
                                          <div class="col-md-10 col-xs-12">
                                            <h2> <strong>Perilaku Konsumen</strong> </h2>
                                            <h4> Murid : Velia Deby Rachmawati</strong> </h4>
                                            <a href="javascript:;" data-toggle="modal" data-target="#detail-kelas-modal" class="btn btn-success"> Lihat Detail</a>
                                          </div>
                                        </div>
                                      </div>
                                        <hr>
                                    </div>
                                </div>
                                <!-- Tab Murid -->
                                <!-- Tab Tutor Aktif -->
                                <div class="tab-pane" id="tutor-aktif" role="tabpanel">
                                    <div class="card-body">
                                      <div class="m-t-20 row">
                                        <div class="col-md-2 col-xs-12">
                                          <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="user" class="img-responsive radius" />
                                        </div>
                                        <div class="col-md-10 col-xs-12">
                                          <h2> <strong>Perilaku Konsumen</strong> </h2>
                                          <h4> Tutor : Mochamad Suryono</strong> </h2>
                                          <a href="javascript:;" data-toggle="modal" data-target="#detail-tutor-modal" class="btn btn-success"> Lihat Detail</a>
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="text-center">
                                        <p class=" text-center text-muted m-b-20"> Anda belum memiliki Tutor</p>
                                          <img src="{{URL::to('/')}}/../user-tutor/images/sad-gray.png" class="center" />
                                      </div>
                                      <br>
                                    </div>
                                    <hr>
                                </div>
                                <!-- Tab Pengajuan Tutor -->
                                <div class="tab-pane active" id="pengajuan-tutor" role="tabpanel">
                                    <div class="card-body">
                                      <div class="m-t-20 row">
                                        <div class="col-md-2 col-xs-12">
                                          <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="user" class="img-responsive radius" />
                                        </div>
                                        <div class="col-md-10 col-xs-12">
                                          <h2> <strong>Perilaku Konsumen</strong> </h2>
                                          <h4> Tutor : Mochamad Suryono</strong> </h2>
                                            <a href="javascript:;" data-toggle="modal" data-target="#detail-tutor-modal" class="btn btn-success"> Lihat Detail</a>
                                        </div>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                      <p class=" text-center text-muted m-b-20"> Anda belum memiliki Tutor</p>
                                      <img src="{{URL::to('/')}}/../user-tutor/images/sad-gray.png" class="center" />
                                      <br><br>
                                      <button type="button" onclick="window.location='{{ route('pages.cari') }}'" class="btn btn-success"><i class="ti-plus"></i>Cari Tutor</button>
                                    </div>

                                    <hr>
                                </div>
                                <!-- Tab Histori Tutor -->
                                <div class="tab-pane" id="histori-tutor" role="tabpanel">
                                    <div class="card-body">
                                      <div class="m-t-20 row">
                                        <div class="col-md-2 col-xs-12">
                                          <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="user" class="img-responsive radius" />
                                        </div>
                                        <div class="col-md-10 col-xs-12">
                                          <h2> <strong>Perilaku Konsumen</strong> </h2>
                                          <h4> Tutor : Mochamad Suryono</strong> </h2>
                                            <a href="javascript:;" data-toggle="modal" data-target="#detail-tutor-modal" class="btn btn-success"> Lihat Detail</a>
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="text-center">
                                        <p class=" text-center text-muted m-b-20"> Anda belum memiliki Tutor</p>
                                        <img src="{{URL::to('/')}}/../user-tutor/images/sad-gray.png" class="center" />
                                      </div>
                                      <br>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>

                  </div>
                    <!-- Column -->
                </div>

                <!-- End Page Content -->
            </div>
            <!-- End Container fluid  -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="detail-kelas-modal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                <form action="javascript:;" novalidate="novalidate">
                    <div class="modal-header">
                      <h4 class="modal-title text-center">Detail Kelas</h4>
                      <button type="button btn-md" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>

                    </div>
                    <div class="modal-body">
                        <div class="">
                            <div class="card-body">
                                <label for="detail-murid">
                                    Detail Murid
                                </label>
                                <div class="m-t-20 row">
                                  <div class="col-md-2 col-xs-12">
                                    <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="user" class="img-responsive radius" />
                                  </div>
                                  <div class="col-md-10 col-xs-12">
                                    <h4> <strong>Velia Deby Rahmawati</strong> </h4>
                                    <a> FMIPA </a>
                                    <a> Ilmu Komputer </a>
                                  </div>
                                </div>
                            </div>
                            <div class="card-body">
                              <div class="m-t-20 row">
                                <div class="col-md-6">
                                  <label for="mata-kuliah">
                                      Mata Kuliah
                                  </label>
                                  <div class="alert alert-info">
                                      PERILAKU KONSUMEN
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <label for="mata-kuliah">
                                      Tarif per Jam
                                  </label>
                                  <div class="alert alert-info">
                                      Rp 25.000
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <label for="pesan-tambahan">
                                  Pesan Tambahan
                              </label>
                              <div>
                                  <p class="text-muted m-b-15"> Saya bersama 4 teman lainnya, harga bisa didiskusikan?</p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Hapus Kelas</button>
                    <button type="submit" class="btn btn-success">Terima</button>
                    </div>
                </form>
          </div>
        </div>
      </div>
    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="detail-tutor-modal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                  <form action="javascript:;" novalidate="novalidate">
                      <div class="modal-header">
                        <h4 class="modal-title text-center">Detail Tutor</h4>
                        <button type="button btn-md" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                      </div>
                      <div class="modal-body">
                          <div class="">
                              <div class="card-body">
                                  <label for="detail-murid">
                                      Detail Tutor
                                  </label>
                                  <div class="m-t-20 row">
                                    <div class="col-md-2 col-xs-12">
                                      <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="user" class="img-responsive radius" />
                                    </div>
                                    <div class="col-md-10 col-xs-12">
                                      <h4> <strong>Mochamad Suryono</strong> </h4>
                                      <a> FMIPA </a>
                                      <a> Ilmu Komputer </a>
                                    </div>
                                  </div>
                              </div>
                              <div class="card-body">
                                <div class="m-t-20 row">
                                  <div class="col-md-6">
                                    <label for="mata-kuliah">
                                        Mata Kuliah
                                    </label>
                                    <div class="alert alert-info">
                                        PERILAKU KONSUMEN
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="mata-kuliah">
                                        Tarif per Jam
                                    </label>
                                    <div class="alert alert-info">
                                        Rp 25.000
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-body collapse" id="collapseExample">
                                <div class="card">
                                  <label>Testimoni</label>
                                  <div>
                                    <form method="post">
                                        <div>
                                            <textarea class="textarea_editor form-control" rows="5" placeholder="Say Something Nice!" style="height:100px"></textarea>
                                        </div>
                                        <br><button class="btn btn-info">Kirim Testimoni</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-success" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Beri Testimoni</button>
                      </div>

                  </form>
            </div>
          </div>
        </div>

        @endsection
