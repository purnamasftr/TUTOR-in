@extends('user-default')

@section('content')
<!-- Page wrapper  -->
<div class="home-wrapper" style="height:1000px;">
    <!-- Container fluid  -->
    <div class="container-fluid">

        <!-- Start Page Content -->
        <!-- Start Page Content -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
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
                                {{Auth::user() -> fakultas}}
                                <br>{{Auth::user() -> departemen}}
                                <br>{{Auth::user() -> type}}
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
                    @if( Auth::user() -> type=='2' )
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#kelas-aktif" role="tab">Kelas Aktif</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#permintaan-tutor" role="tab">Permintaan Tutor</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#histori-kelas" role="tab">Histori Kelas</a> </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="kelas-aktif" role="tabpanel">
                              @foreach($aktif_s as $aktifs)
                              <div class="card-body">
                                <div class="card-body">
                                  <div class="m-t-20 row">
                                    <div class="col-md-2 col-xs-12">
                                      <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="user" class="img-responsive radius" />
                                    </div>
                                    <div class="col-md-10 col-xs-12">
                                      <h2> <strong>{{$aktifs->nama_matkul}}</strong> </h2>
                                      <h4> Murid : {{$aktifs->name}}</strong> </h4>
                                      <form method="post" action="{{route('member.update', $aktifs -> id_member)}}">
                                        {{ csrf_field() }}
                                        {{ method_field('patch') }}
                                        <input type="hidden" value="3" name="status"/>
                                        <button class="btn btn-primary"> Selesai</a>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                  <hr>
                                </div>
                                @endforeach
                              </div>

                            <!--Tab Permintaan Tutor-->
                            <div class="tab-pane" id="permintaan-tutor" role="tabpanel">
                              @foreach($pending_s as $tunda_siswa)
                                <div class="card-body">
                                  <div class="card-body">
                                    <div class="m-t-20 row">
                                      <div class="col-md-2 col-xs-12">
                                        <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="user" class="img-responsive radius" />
                                      </div>
                                      <div class="col-md-10 col-xs-12">
                                        <h2> <strong>{{$tunda_siswa -> id_matakuliah}}</strong> </h2>
                                        <h4> Murid : {{$tunda_siswa -> name}}</strong> </h4>
                                        <form method="post" action="{{route('member.update', $tunda_siswa -> id_member)}}">
                                          {{ csrf_field() }}
                                          {{ method_field('patch') }}
                                          <input type="hidden" value="2" name="status"/>
                                          <button class="btn btn-success"> Terima</a>
                                        </form>
                                        <form method="post" action="{{route('member.update', $tunda_siswa -> id_member)}}">
                                          {{ csrf_field() }}
                                          {{ method_field('patch') }}
                                          <input type="hidden" value="4" name="status"/>
                                          <button class="btn btn-danger"> Tolak</a>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                    <hr>
                                </div>
                              @endforeach
                            </div>
                            <!--Histori Kelas-->

                            <div class="tab-pane" id="histori-kelas" role="tabpanel">
                                @foreach($histori_s as $hists)
                                <div class="card-body">
                                  <div class="card-body">
                                    <div class="m-t-20 row">
                                      <div class="col-md-2 col-xs-12">
                                        <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="user" class="img-responsive radius" />
                                      </div>
                                      <div class="col-md-10 col-xs-12">
                                        <h2> <strong>{{$hists->nama_matkul}}</strong> </h2>
                                        <h4> Murid : {{$hists->name}}</strong> </h4>
                                      </div>
                                    </div>
                                  </div>
                                    <hr>
                                </div>
                              @endforeach
                            </div>

                        </div>


                    @else
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tutor-aktif" role="tab">Tutor Aktif</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#pengajuan-tutor" role="tab">Pengajuan Tutor</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#histori-tutor" role="tab">Histori Tutor</a> </li>
                        </ul>
                        <div class="tab-content">
                          <!-- Tab Tutor Aktif -->
                          <div class="tab-pane" id="tutor-aktif" role="tabpanel">
                            @if ($acc->count())
                            @foreach($acc as $diterima)
                            <div class="card-body">
                              <div class="m-t-20 row">
                                <div class="col-md-2 col-xs-12">
                                  <img src='/storage/avatars/{{$diterima -> picture}}' class="img-responsive radius" />
                                </div>
                                <div class="col-md-10 col-xs-12">
                                  <h2> <strong>{{$diterima -> nama_matkul}}</strong> </h2>
                                  <h4> Tutor : {{$diterima -> name}}</strong> </h2>
                                </div>
                              </div>
                              <hr>
                            </div>
                            @endforeach
                            @else
                            <div class="text-center">
                              <p class=" text-center text-muted m-b-20"> Anda belum memiliki Tutor</p>
                                <img src="{{asset('images/sad-gray.png')}}" class="center" />
                            </div>
                            @endif
                          </div>
                          <!-- Tab Pengajuan Tutor -->
                          <div class="tab-pane" id="pengajuan-tutor" role="tabpanel">
                            @if ($pending->count())
                            @foreach($pending as $ditunda)
                            <div class="card-body">
                              <div class="m-t-20 row">
                                <div class="col-md-2 col-xs-12">
                                  <img src='/storage/avatars/{{$ditunda -> picture}}' class="img-responsive radius" />
                                </div>
                                <div class="col-md-10 col-xs-12">
                                  <h2> <strong>{{$ditunda -> nama_matkul}}</strong> </h2>
                                  <h4> Tutor : {{$ditunda -> name}}</strong> </h2>
                                  <form method="post" action="{{route('member.update', $ditunda -> id_member)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('patch') }}
                                    <input type="hidden" value="4" name="status"/>
                                    <button data-toggle="modal" data-target="" class="btn btn-danger">Batalkan</button>
                                  </form>
                                </div>
                              </div>
                              <hr>
                            </div>
                            @endforeach
                            @else
                              <div class="text-center">
                                <p class=" text-center text-muted m-b-20"> Anda belum memiliki Tutor</p>
                                <img src="{{asset('images/sad-gray.png')}}" class="center" />
                                <br><br>
                              </div>
                              @endif
                              <div class="text-center">
                                <button type="button" onclick="window.location='{{ route('pages.cari-tutor') }}'" class="btn btn-success"><i class="ti-plus"></i>Cari Tutor</button>
                              </div>
                          </div>
                          <!-- Tab Histori Tutor -->
                          <div class="tab-pane" id="histori-tutor" role="tabpanel">
                            @foreach($histori as $hist)
                            <div class="card-body">
                            <div class="card-body">
                              <div class="m-t-20 row">
                                <div class="col-md-2 col-xs-12">
                                  <img src='/storage/avatars/{{$hist -> picture}}' class="img-responsive radius" />
                                </div>
                                <div class="col-md-10 col-xs-12">
                                  <h2> <strong>{{$hist -> nama_matkul}}</strong> </h2>
                                  <h4> Tutor : {{$hist -> name}}</strong> </h2>
                                </div>
                              </div>
                              <hr>
                            </div>
                          </div>
                            @endforeach
                          </div>
                        </div>

                    @endif

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

@endsection
