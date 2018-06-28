@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                @if( Auth::user()->type=='2' )
                  <div class="panel-body">
                    Selamat datang Tutor!
                    Hello {{ Auth::user()->name }}
                    Anda adalah {{ Auth::user()->type }}
                  <a class="btn btn-xs btn-primary" href="{{ route('users.index') }}">profil</a>
                  </div>
                @else
                  <div class="panel-body">
                    Selamat datang Murid!
                    Hello {{ Auth::user()->name }}
                    Anda adalah {{ Auth::user()->type }}
                    <a class="btn btn-xs btn-primary" href="{{ route('users.index') }}">profil</a>
                    List Tutor:
                    <table class="table table-bordered">
                      <tr>
                        <th>Nama</th>
                        <th>Action</th>
                      </tr>

                      @foreach ($tutor as $post)
                        <tr>
                          <td>{{ $post->name }}</td>
                          <td>
                            <a class="btn btn-xs btn-primary" href="">Tutorin!</a>

                          </td>
                        </tr>
                      @endforeach
                    </table>
                  </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
