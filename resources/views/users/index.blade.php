@extends('\layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                  <div class="panel-body">
                    Ini profile mu

                    <a class="btn btn-xs btn-primary" href="{{ route('users.edit', Auth::user()->id) }}">Edit</a>
                    <a class="btn btn-xs btn-primary" href="{{ route('users.kelas', Auth::user()->id) }}">Kelas</a>
                  </div>

            </div>
        </div>
    </div>
</div>
@endsection
