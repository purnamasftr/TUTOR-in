@extends('user-default')
@section('content')
<!-- Page wrapper  -->
<div class="home-wrapper">
    <!-- Container fluid  -->
    <div class="container-fluid">

        <!-- Start Page Content -->
        <!-- Start Page Content -->
        <div class="row">
          @if((Auth::user()->id==$user->id AND $user->type==2) OR (Auth::user()->type==1 AND $user->type==2))
            <!-- Kepala Profilnya -->
            <div class="col-lg-12">
              <div class="card">
                    <div class="card-body">
                        <div class="card-two">
                            <header>
                                <div class="avatar">
                                  <img src="/storage/{{$user -> picture}}" alt="{{$user -> name}}" class="img-responsive radius" />
                                </div>
                            </header>
                            <h3>{{$user -> name}}</h3>
                            <div class="desc">
                                {{$user -> nama_fakultas}}
                                <br>
                                {{$user -> nama_departemen}}
                                @if(Auth::user()->type=='2')
                                  <br><br><button type="button" onclick="window.location='{{ route('users.edit-profil')}}'" class="btn btn-info">Kembali</button>
                                @else
                                  <br><br><a href="javascript:;" data-toggle="modal" data-target="#detail-pesan-modal" class="btn btn-success"> Pesan Tutor</a>
                                @endif
                            </div>
                            <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="detail-pesan-modal">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title text-center">Detail Pesan Tutor</h4>
                                      <button type="button btn-md" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" action="{{route('member.store')}}">
                                        {{ csrf_field() }}

                                            <div class="card-body">
                                                <label for="detail-tutor">Detail Tutor</label>
                                                <div class="m-t-20 row">
                                                  <div class="col-md-2 col-xs-12">
                                                    <img src="/storage/{{$user -> picture}}" alt="{{$user -> name}}" class="img-responsive radius" />
                                                  </div>
                                                  <div class="col-md-10 col-xs-12">
                                                    <h4> <strong>{{$user -> name}}</strong> </h4>
                                                    <a> Fakultas {{$user -> fakultas}} </a>
                                                    <a>Departemen {{$user -> departemen}} </a>
                                                  </div>
                                                </div>
                                            </div><br>
                                            <input type="hidden" name="id_tutor" value="{{$user -> id}}"/>
                                            <input type="hidden" name="id_siswa" value="{{Auth::user() -> id}}"/>
                                            <input type="hidden" name="status" value="1"/>
                                            <div class="card-body">
                                              <div class="form-group">
                                                <label for="mata-kuliah">Mata Kuliah</label>
                                                <select class="form-control" name='id_kelas'>
                                                  <option>---select---</option>
                                                  @foreach($kelas as $matkul)
                                                  <option value='{{$matkul -> id_kelas}}'>{{$matkul -> nama_matkul}} - {{$matkul -> harga}}</option>
                                                  @endforeach
                                                </select>
                                              </div>
                                            </div><br>
                                            <div class="card-body">
                                              <label for="pesan-tambahan">Pesan Tambahan</label>
                                              <div class="form-group">
                                                  <textarea name="pesan" class="textarea_editor form-control" rows="5" placeholder="Enter text ..." style="height:100px"></textarea>
                                              </div>
                                            </div>
                                            <button type="submit" class="btn btn-success">Pesan Tutor</button>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tabpane -->
            <div class="col-lg-12">
              <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tentang" role="tab">Tentang</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#matakuliah" role="tab">Mata Kuliah</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- Tab Tentang -->
                        <div class="tab-pane active" id="tentang" role="tabpanel">
                          <br>
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-3 col-xs-6 b-r"> <strong>Nama Lengkap</strong>
                                      <br>
                                      <p class="text-muted">{{$user -> name}}</p>
                                  </div>
                                  <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                      <br>
                                      <p class="text-muted">{{$user -> telp}}</p>
                                  </div>
                                  <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                      <br>
                                      <p class="text-muted">{{$user -> email}}</p>
                                  </div>
                                  <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                      <br>
                                      <p class="text-muted">{{$user -> alamat}}</p>
                                  </div>
                              </div>
                              <hr>
                              <div class="col-md-3 col-xs-6 b-r"> <strong>Tentang Saya</strong></div>
                              <p class="m-t-30">{{$user -> tentang}}
                              </p>
                              <hr>
                              <div class="col-md-3 col-xs-6 b-r"> <strong>Pengalaman Mengajar</strong></div><br>
                              <h5>{{$user -> pengalaman}}</h5>
                              </ul>
                              <hr>
                              <div class="col-md-3 col-xs-6 b-r"> <strong>Riwayat Pendidikan</strong></div><br>
                              <h5>{{$user -> riwayat}}</h5>
                              <hr>
                          </div>
                        </div>
                        <!--Tab Mata Kuliah-->
                        <div class="tab-pane" id="matakuliah" role="tabpanel">
                            <br>
                            <div class="card-body">
                              <div class="card-body">
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Mata Kuliah</strong></div><br>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Departemen</th>
                                                    <th>Mata Kuliah</th>
                                                    <th>Tarif/jam</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kelas as $matkul)
                                                <tr>
                                                    <td class="color-primary">{{$matkul -> nama_departemen}}</td>
                                                    <td class="color-primary">{{$matkul -> nama_matkul}}</td>
                                                    <td class="color-primary">{{$matkul -> harga}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Jadwal</strong></div><br>
                                <div>
                                  {{$user -> jadwal}}
                                </div>
                                <hr>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          @else
          <div class="col-lg-12">
            <div class="card">
              <div class="text-center">
                  <h1>404</h1>
                  <h3 class="text-uppercase">Page not found </h3>
                  <p class="text-muted m-t-30 m-b-30">Please try after some time</p>
                  <button class="btn btn-info btn-rounded waves-effect waves-light m-b-40" onclick="window.location='{{ url('/userhome') }}'">Back to home</button>
              </div>
            </div>
          </div>
          @endif
        </div>

        <!-- End Page Content -->
    </div>
    <!-- End Container fluid  -->
</div>
<!-- End Page wrapper  -->

@endsection
