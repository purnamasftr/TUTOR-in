@extends('user-default')

        @section('content')
        <!-- Page wrapper  -->
        <div class="home-wrapper">
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

                                        </div>
                                    </header>

                                    <h3>{{$user -> name}}</h3>
                                          <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                                              <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                                              <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                                              <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                                              <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                                              <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                                          </div>
                                    <div class="desc">
                                        {{$user -> fakultas}}
                                        <br>Departemen {{$user -> departemen}}
                                        <br><br><a href="javascript:;" data-toggle="modal" data-target="#detail-pesan-modal" class="btn btn-success"> Pesan Tutor</a>

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
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tentang" role="tab">Tentang</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#matakuliah" role="tab">Mata Kuliah</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#testimoni" role="tab">Testimoni</a> </li>
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

                                                </table>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Jadwal</strong></div><br>
                                          {{$user -> jadwal}}
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <!--Tab Testimoni-->
                                <div class="tab-pane" id="testimoni" role="tabpanel">
                                    <div class="card-body">
                                      <div class="card-body">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="{{URL::to('/')}}/../user-tutor/images/users/avatar-2.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div> <a href="#" class="link">Velia Deby Rahmawati</a> <span class="sl-date">17 September 2017</span>
                                                      <div class="starrating risingstar d-flex justify-content-start flex-row">
                                                          <input type="radio" id="testi-star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                                                          <input type="radio" id="testi-star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                                                          <input type="radio" id="testi-star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                                                          <input type="radio" id="testi-star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                                                          <input type="radio" id="testi-star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                                                      </div>
                                                        <div class="m-t-20 row">
                                                            <div class="col-md-3 col-xs-12"><img src="{{URL::to('/')}}/../user-tutor/images/big/img1.jpg" alt="user" class="img-responsive radius" /></div>
                                                            <div class="col-md-9 col-xs-12">
                                                                <blockquote class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </blockquote>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="{{URL::to('/')}}/../user-tutor/images/users/avatar-3.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">Riska Ratnasari</a> <span class="sl-date">18 November 2017</span>
                                                      <div class="starrating risingstar d-flex justify-content-start flex-row">
                                                          <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                                                          <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                                                          <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                                                          <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                                                          <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                                                      </div>
                                                        <blockquote class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
                                                            Praesent mauris. Fusce nec tellus sed augue semper </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="{{URL::to('/')}}/../user-tutor/images/users/avatar-4.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">Juan Josua</a> <span class="sl-date">5 minutes ago</span>
                                                      <div class="starrating risingstar d-flex justify-content-start flex-row">
                                                          <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                                                          <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                                                          <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                                                          <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                                                          <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                                                      </div>
                                                        <blockquote class="m-t-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                        </blockquote>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                        <hr>
                                    </div>
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
    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="detail-pesan-modal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                <form action="javascript:;" novalidate="novalidate">
                    <div class="modal-header">
                      <h4 class="modal-title text-center">Detail Pesan Tutor</h4>
                      <button type="button btn-md" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>

                    </div>
                    <div class="modal-body">
                        <div class="">
                            <div class="card-body">
                                <label for="detail-tutor">Detail Tutor</label>
                                <div class="m-t-20 row">
                                  <div class="col-md-2 col-xs-12">
                                    <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="user" class="img-responsive radius" />
                                  </div>
                                  <div class="col-md-10 col-xs-12">
                                    <h4> <strong>{{$user -> name}}</strong> </h4>
                                    <div class="starrating risingstar d-flex justify-content-start flex-row">
                                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                                    </div>
                                    <a> {{$user -> fakultas}} </a>
                                    <a>Departemen {{$user -> departemen}} </a>
                                  </div>
                                </div>
                            </div><br>
                            <div class="card-body">
                                <label for="mata-kuliah">Mata Kuliah</label>
                                <select class="form-control">
                                  <option>---select---</option>

                                </select>
                            </div><br>
                            <div class="card-body">
                              <label for="pesan-tambahan">Pesan Tambahan</label>
                              <div>
                                <form method="post">
                                    <div class="form-group">
                                        <textarea class="textarea_editor form-control" rows="5" placeholder="Enter text ..." style="height:100px"></textarea>
                                    </div>
                                </form>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <div class="sweetalert m-t-15">
                          <button type="submit" class="btn btn-success">Pesan Tutor</button>
                      </div>
                    </div>
                </form>
          </div>
        </div>
      </div>
@endsection
