@extends('user-default')
@section('content')
@if( Auth::user()->type=='1' )

        <!-- Page wrapper  -->
        <div class="home-wrapper" style="height:1000px;">
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                              <h4 class="text-primary" >Cari Tutormu Disini</h4>
                            </div>
                            <div class="card-body">
                              <form action="search" method="POST" role="search">
                                  {{ csrf_field() }}
                                <div class="form-row">
                                  <select  name="fakultas" id="fakultas" class="form-control dynamic">
                                    <option value="">--pilih fakultas--</option>
                                    @foreach ($fak as $fakultas => $value)
                                    <option value="{{ $fakultas }}"> {{ $value }}</option>
                                    @endforeach
                                  </select>
                                  <select  name="departemen" id="departemen" class="form-control dynamic">
                                    <option value="">--pilih departemen--</option>

                                  </select>
                                  <select  name="id_matakuliah"
                          					placeholder="Search kelas" id="matkul" class="form-control dynamic">
                                    <option value="">--pilih matakuliah--</option>

                                  </select>

                                  <div class="text-center">
                                    <br><button type="submit" class="btn btn-success">Cari</button>
                                  </div>
                                </div>
                              </form>
                              <form>
                                <br>
                                <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                  Filter Tambahan <i class="ti-plus"></i>
                                </a>
                                <div class="collapse" id="collapseExample">
                                  <br>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label >Kisaran Harga</label>
                                      <select class="selectpicker" data-actions-box="true" data-width="400px" >
                                        <option>option1</option>
                                        <option>option2</option>
                                        <option>option3</option>
                                        <option>option4</option>
                                      </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label>Jenis Kelamin Guru</label>
                                      <select class="selectpicker" data-actions-box="true" data-width="400px" >
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </form>

                            </div>
                        </div>
                    </div>
                <!-- End Page Content -->
                </div>
            <!-- End Container fluid  -->
            </div>
        <!-- End Page wrapper  -->
        </div>
  @endif
  @endsection
