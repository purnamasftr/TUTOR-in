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
                                        <a class="btn btn-xs btn-primary" href="{{ route('users.index', Auth::user()->id) }}">profil</a>
                  </div>
                @else
                  <div class="panel-body">
                    Selamat datang Murid!
                    Hello {{ Auth::user()->name }}
                    Anda adalah {{ Auth::user()->type }}
                    <a class="btn btn-xs btn-primary" href="{{ route('users.index', Auth::user()->id) }}">profil</a>
                  </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
