@extends('user-default')
@section('content')
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
      <form method="post" action="{{route('picture.update', $user)}}" enctype="multipart/form-data" >
          {{ csrf_field() }}
          {{ method_field('patch') }}
          <div class="profile-header-container">
<div class="profile-header-img">
  <img class="rounded-circle" src="/storage/{{ $user->picture }}" width="50" height="50" />
  <!-- badge -->
  <div class="rank-label-container">
      <span class="label label-default rank-label">{{$user->name}}</span>
  </div>
</div>
      </div>
          <div class="form-group">
            <input type="file" class="form-control-file" name="picture" id="picture" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
          </div>
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
@endsection
