
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
    <form method="post" action="{{route('kelas.update', $kelas)}}">
        {{ csrf_field() }}
        {{ method_field('patch') }}

        <div class="col-md-12">
          <div class="form-group">
            <strong>Harga : </strong>
            <input type="text" name="harga" "{{ $kelas->harga }}" />
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <strong>Ket : </strong>
            <input type="text" name="ket" value="{{ $kelas->ket}}"/>
          </div>
        </div>

     </div>
     <div class="col-xs-12">
       <div class="form-group">
         <a class="btn btn-xs btn-success" href="{{ route('kelas.index') }}">Back</a>
         <button class="btn btn-xs btn-primary" type="submit">Send</button>
       </div>
     </div>
 </form>

      </div>
</div>

</div>
</div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
