@extends('user-default')
@section('content')

<!-- Page wrapper  -->
<div class="home-wrapper" style="height:1000px;">
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
            @if( Auth::user()->type=='1' )
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
            @else
                <div class="card">
                  <div class="text-center">
                      <h1>404</h1>
                      <h3 class="text-uppercase">Page not found </h3>
                      <p class="text-muted m-t-30 m-b-30">Please try after some time</p>
                      <button class="btn btn-info btn-rounded waves-effect waves-light m-b-40" onclick="window.location='{{ url('/userhome') }}'">Back to home</button>
                  </div>
                </div>
            @endif
            </div>

        <!-- End Page Content -->
        </div>

    <!-- End Container fluid  -->
    </div>
<!-- End Page wrapper  -->
</div>




  @endsection
