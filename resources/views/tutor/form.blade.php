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
      <strong>Password Tutor : </strong>
      {!! Form::password('password_tutor', null, ['placeholder'=>'*******','class'=>'form-control']) !!}
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
    <a class="btn btn-xs btn-success" href="{{ route('tutor.index') }}">Back</a>
    <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
  </div>
</div>
