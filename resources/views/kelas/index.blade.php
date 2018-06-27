@extends('user-default')
@section('content')
@if( Auth::user()->type=='2' )
<head>
    <title>Kelas</title>
</head>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href=" https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>
#loader{
visibility:hidden;
}
</style>
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
                    <div class="panel-heading"><h2>Buat Kelas</h2></div>


<!--
 Form ini isinya: Tambah kelas.
 Tutor aja yang punya ini.
-->
<div id="Kelas" class="tabcontent">
  <div class="panel-body">
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
           </div>
         </select>
     </div>
     <div class="col-md-12">
       <div class="form-group">
         <select name="id_matakuliah" id="matkul" class="form-control dynamic">
          <option>--Mata Kuliah--</option>
        </div>
      </select>
  </div><div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>

        <div class="col-md-12">
          <div class="form-group">
            <strong>Harga : </strong>
            <input type="text" name="harga" />
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <strong>Ket : </strong>
            <input type="text" name="ket" />
          </div>
        </div>


     </div>
     <div class="col-xs-12">
       <div class="form-group">
         <a class="btn btn-xs btn-success" href="{{ route('users.index')}}">Back</a>
         <button class="btn btn-xs btn-primary" type="submit">Send</button>
       </div>
     </div>
 </form>

 <table class="table table-bordered">
   <tr>
     <th>Kode</th>
     <th>Mata Kuliah</th>
     <th>Departemen</th>
     <th>Harga</th>
     <th>Keterangan</th>
     <th width="300px">Action</th>

   </tr>

   @foreach ($kelas as $post)
     <tr>
       <td>{{ $post->id_matakuliah }}</td>
       <td>{{ $post->nama_matkul }}</td>
       <td>{{ $post->nama_departemen }}</td>
       <td>{{ $post->harga }}</td>
       <td>{{ $post->ket }}</td>

       <td>
         <a class="btn btn-xs btn-primary" href="{{ route('kelas.edit', $post->id_kelas) }}">Edit</a>
         {!! Form::open(['method' => 'DELETE', 'route'=>['kelas.destroy', $post->id_kelas], 'style'=> 'display:inline']) !!}
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
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@else
Sorry, this page is not available :(.
<br>
<a class="btn btn-xs btn-success" href="{{ route('home') }}">Return to Home</a>
@endif
@endsection
