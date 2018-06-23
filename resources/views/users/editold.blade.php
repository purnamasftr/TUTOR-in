@extends('\layouts.app')

@section('content')
<html>
<head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href=" https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
            <div class="panel panel-default">
              <div class="panel-heading">Edit Profile</div>
              <div class="row">

                <form method="post" action="{{route('users.update', $user)}}">
                  {{ csrf_field() }}
                  {{ method_field('patch') }}
                  <div class="col-xs-12">
                    <div class="form-group">
                      <strong>Nama : </strong>
                      <input type="text" name="name"  value="{{ $user->name }}" />
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                      <strong>No HP : </strong>
                      <input type="text" name="telp"  value="{{ $user->telp }}" />
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                      <strong>Alamat : </strong>
                      <input type="text" name="alamat"  value="{{ $user->alamat }}" />
                    </div>
                  </div>

                  <div class="form-group-sm">

                      <div class="col-md-6">
                        <div class="form-group">
                          <select name="fakultas" class="form-control">
                              <option value="{{ $user->fakultas }}">--Select Fakultas--</option>
                              @foreach ($fak as $fakultas => $value)
                              <option value="{{ $fakultas }}"> {{ $value }}</option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select name="departemen" class="form-control">
                           <option value="{{ $user->departemen }}">--Departemen--</option>
                         </div>

                       </select>
                   </div><div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>

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
      </body>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
</html>
@endsection
