@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                @if( Auth::user()->type=='2' )
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="form-group">
                          <strong>Nama Tutor : </strong>
                          {!! Form::text('nama_tutor', null, ['placeholder'=>'Tulis nama tutor...','class'=>'form-control']) !!}
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <div class="form-group">
                          <strong>Email Tutor : </strong>
                          {!! Form::text('email_tutor', null, ['placeholder'=>'Tulis email tutor...','class'=>'form-control']) !!}
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <div class="form-group">
                          <strong>Alamat : </strong>
                          {!! Form::textarea('alamat_tutor', null, ['placeholder'=>'Tulis alamat tutor...','class'=>'form-control','style'=>'height:150px']) !!}
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <div class="form-group">
                          <strong>Fakultas : </strong>
                          {!! Form::text('fakultas_tutor', null, ['placeholder'=>'Tulis fakultas tutor...','class'=>'form-control']) !!}
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <div class="form-group">
                          <strong>Jurusan : </strong>
                          {!! Form::text('jurusan_tutor', null, ['placeholder'=>'Tulis jurusan tutor...','class'=>'form-control']) !!}
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <a class="btn btn-xs btn-success" href="{{ route('home') }}">Back</a>
                        <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
                      </div>
                    </div>
                  </div>
                @else
                  <div class="panel-body">
                    Selamat datang Murid!
                    Hello {{ Auth::user()->name }}
                    Anda adalah {{ Auth::user()->type }}
                  </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
