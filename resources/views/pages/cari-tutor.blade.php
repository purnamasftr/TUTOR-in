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
                        <div class="card">
                            <div class="card-title">
                              <h4 class="text-primary" >Cari Tutormu Disini</h4>
                            </div>
                            <div class="card-body">
                              <form>
                                <div class="form-row">
                                    <select class="selectpicker" data-live-search="true" data-live-search-placeholder="Search" data-actions-box="true" data-width="400px">
                                    <optgroup label="filter1">
                                      <option>option1</option>
                                      <option>option2</option>
                                      <option>option3</option>
                                      <option>option4</option>
                                    </optgroup>
                                    <optgroup label="filter2">
                                      <option>option1</option>
                                      <option>option2</option>
                                      <option>option3</option>
                                      <option>option4</option>
                                    </optgroup>
                                    <optgroup label="filter3">
                                      <option>option1</option>
                                      <option>option2</option>
                                      <option>option3</option>
                                      <option>option4</option>
                                    </optgroup>
                                  </select>

                                  <select class="selectpicker" data-live-search="true" data-live-search-placeholder="Search" data-actions-box="true" data-width="400px">
                                    <option>option1</option>
                                    <option>option2</option>
                                    <option>option3</option>
                                    <option>option4</option>
                                  </optgroup>
                                  <optgroup label="filter2">
                                    <option>option1</option>
                                    <option>option2</option>
                                    <option>option3</option>
                                    <option>option4</option>
                                  </optgroup>
                                  <optgroup label="filter3">
                                    <option>option1</option>
                                    <option>option2</option>
                                    <option>option3</option>
                                    <option>option4</option>
                                  </optgroup>
                                  </select>
                                  <button class="btn btn-success" type="button">Cari Tutor</button>
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
    @endsection
