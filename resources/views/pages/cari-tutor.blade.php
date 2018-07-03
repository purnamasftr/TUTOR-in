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
