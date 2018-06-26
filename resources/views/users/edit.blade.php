<html>
<head>
    <title>Edit Profile</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href=" https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <style>
   #loader{
   visibility:hidden;
   }
   </style>
</head>

<body>
  @if(count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whooops!! </strong> There were some problems with your input.<br>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading"><h2>Edit Profile</h2></div>
<!--
  Navigation tab: sementara pake js cuz gaada bootsrap. (edit: buat link page lain aja)
  Nanti kalau udah ada front-endnya, ubahnya disini
 -->
<!-- <div class="tab">
  <ul class="nav nav-tabs nav-justified" role="tablist">
  <button class="tablinks" onclick="openCity(event, 'General')" id="defaultOpen">Profil General</button>
  <button class="tablinks" onclick="openCity(event, 'Password')">Password Akun</button>
  <button class="tablinks" onclick="openCity(event, 'Biografi')">Biografi Tutor</button>
  <button class="tablinks" onclick="openCity(event, 'Kelas')">Edit Kelas</button>
</ul>
</div> -->



<!--
  Form ini isinya: Nama, No HP, alamat, fakultas, departemen.
  Murid and Tutor sama-sama punya ini
  isi dari tab general profile
-->

  <div id="General" class="tabcontent">
    <div class="panel-body">
                        <form method="post" action="{{route('users.update', $user)}}">
                            {{ csrf_field() }}
                            {{ method_field('patch') }}
                            <div class="col-xs-12">
                              <div class="form-group">
                                <strong>Nama : </strong><br>
                                <input type="text" name="name"  value="{{ $user->name }}" />
                              </div>
                            </div>
                            <div class="col-xs-12">
                              <div class="form-group">
                                <strong>Jenis Kelamin : </strong><br>
                                <select name="jk" class="form-control">
                                    <option value="{{ $user->jk }}">--Jenis Kelamin--</option>
                                    <option value="Laki-laki"> Laki-laki</option>
                                    <option value="Perempuan"> Perempuan</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-xs-12">
                              <div class="form-group">
                                <strong>No HP : </strong><br>
                                <input type="text" name="telp"  value="{{ $user->telp }}" />
                              </div>
                            </div>
                            <div class="col-xs-12">
                              <div class="form-group">
                                <strong>Alamat : </strong><br>
                                <textarea rows="2" cols="50" name="alamat">{{ $user->alamat }}</textarea>
                              </div>
                            </div>
                            <div class="form-group-sm">

                                <div class="col-xs-12">
                                  <div class="form-group">
                                    <select name="fakultas" class="form-control">
                                        <option value="{{ $user->fakultas }}">--Select Fakultas--</option>
                                        @foreach ($fak as $fakultas => $value)
                                        <option value="{{ $fakultas }}"> {{ $value }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                </div>
                                <div class="col-xs-12">
                                  <div class="form-group">
                                    <select name="departemen" class="form-control">
                                     <option value="{{ $user->departemen }}">--Departemen--</option>
                                   </div>

                                 </select>
                             </div><div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>
                                @if( Auth::user()->type=='2' )
                             <div class="col-xs-12">
                               <div class="form-group">
                                 <strong>Biodata Singkat : </strong><br>
                                 <textarea rows="2" cols="50" name="bio">{{ $user->bio }}</textarea>
                               </div>
                             </div>
                             <div class="form-group-sm">
                             </div><div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>
                             <div class="col-xs-12">
                               <div class="form-group">
                                 <strong>Tentang Saya : </strong><br>
                                 <textarea rows="4" cols="50" name="tentang"> {{ $user->tentang }}</textarea>
                               </div>
                             </div>
                             @endif
                         <div class="col-xs-12">
                           <div class="form-group">
                             <a class="btn btn-xs btn-success" href="{{ route('users.index') }}">Back</a>
                             <button class="btn btn-xs btn-primary" type="submit">Send</button>
                           </div>
                         </div>
                     </form>
        </div>
</div>


</div>
</div>
</div>

</div>
</div>


 <script src="{{ asset('js/app.js') }}"></script>
 <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
