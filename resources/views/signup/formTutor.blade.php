<div class="row">
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Email : </strong>
      {!! Form::text('email', null, ['placeholder'=>'Tulis email anda...','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Password Tutor : </strong>
      {!! Form::password('password', null, ['placeholder'=>'*******','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <a class="btn btn-xs btn-success" href="{{ route('tutor.index') }}">Back</a>
    <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
  </div>
</div>
