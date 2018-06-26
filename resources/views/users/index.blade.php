@extends('\layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                  <div class="panel-body">
                    <p>Ini profile mu</p>
                    <p>Nama : {{Auth::user()->name}}</p>
                    <p>Fakultas : {{Auth::user()->fakultas}}</p>
                    <p>Departemen : {{Auth::user()->departemen}}</p>
                    <p>Alamat : {{Auth::user()->alamat}}</p>
                    <p>No HP: {{Auth::user()->telp}}</p>
                    <a class="btn btn-xs btn-primary" href="{{ route('users.edit', Auth::user()->id) }}">Edit</a>
                  </div>

            </div>
        </div>
    </div>
</div>
@endsection
