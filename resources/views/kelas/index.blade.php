@extends('user-default')
@section('content')
<!-- Page wrapper  -->
<div class="home-wrapper">
    <!-- Container fluid  -->
    <div class="container-fluid">
      <!-- Start Page Content -->
      <div class="row">
        <div class="col-lg-12">
            @if(Auth::user()->type==2)
            <div class="card">
              <div class="card-title">
                <h1 class="color-success">Edit Kelas</h1>
              </div>
              <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                      <div class="card-toggle-body">
                        <div class="button-list">
                          <div class="btn-group-vertical">
                              <button type="button" onclick="window.location='{{ route('users.edit-profil') }}'" class="btn btn-success">Profil</button>
                              <button type="button" onclick="window.location='{{ route('picture.index')}}'" class="btn btn-success">Foto Profil</button>
                              <button type="button" onclick="window.location='{{ route('users.ubah-sandi') }}'" class="btn btn-success">Ubah Password</button>
                              @if( Auth::user()->type=='2' )
                              <button type="button" onclick="window.location='{{ route('kelas.index') }}'" class="btn btn-success">Kelas</button>
                              <button type="button" onclick="window.location='{{ route('profil-tutor', Auth::user()->id) }}'" class="btn btn-primary">Lihat Tampilan Saya</button>
                              @endif
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-9">
                <div class="card">
                       <div class="card-title"><h4>Mata Kuliah</h4></div>
                       <div class="card-body">
                         <form method="post" action="{{route('kelas.store')}}">
                              {{ csrf_field() }}
                              <input type = "hidden" name = "id_tutor" value = "{{Auth::user()->id}}">
                              <div class="col-md-12">
                               <div class="form-group">
                                 <select name="fakultas" id="fakultas" class="form-control dynamic">
                                     <option value="">--Select Fakultas--</option>
                                     @foreach ($fak as $fakultas => $value)
                                     <option value="{{ $fakultas }}"> {{ $value }}</option>
                                     @endforeach
                                 </select>
                               </div>
                             </div>
                              <div class="col-md-12">
                               <div class="form-group">
                                 <select name="departemen" id="departemen" class="form-control dynamic">
                                  <option>--Departemen--</option>
                                 </select>
                               </div>
                             </div>
                              <div class="col-md-12">
                               <div class="form-group">
                                 <select name="id_matakuliah" id="matkul" class="form-control dynamic">
                                  <option>--Mata Kuliah--</option>
                                 </select>
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label> Harga/jam </label>
                                <input type="text" class="form-control" name="harga" rows="3"></>
                              </div>
                              <button type="submit" class="btn btn-success">Submit</button>
                         </form>
                         <br>
                         <table class="table table-bordered">
                           <tr>
                             <th>Kode</th>
                             <th>Mata Kuliah</th>
                             <th>Departemen</th>
                             <th>Harga</th>
                             <th width="300px">Action</th>

                           </tr>

                           @foreach ($kelas as $post)
                             <tr>
                               <td>{{ $post->id_matakuliah }}</td>
                               <td>{{ $post->nama_matkul }}</td>
                               <td>{{ $post->nama_departemen }}</td>
                               <td>{{ $post->harga }}</td>


                               <td>
                                 <a class="btn btn-xs btn-primary" href="{{route('kelas.edit', $post->id_kelas)}}">Edit</a>
                                 {!! Form::open(['method' => 'DELETE', 'route' => ['kelas.destroy', $post->id_kelas], 'style'=> 'display:inline']) !!}
                                 {!! Form::submit('Delete', ['class'=> 'btn btn-xs btn-danger']) !!}
                                 {!! Form::close() !!}

                               </td>
                             </tr>
                           @endforeach
                         </table>

                       </div>
                  </div>
                </div>
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
      </div>
      <!-- End Page Content -->
    </div>
    <!-- End Container fluid  -->
</div>
<!-- End Page wrapper  -->

@endsection
