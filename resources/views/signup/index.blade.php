@extends('\layouts')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h3>Sign up</h3>
  </div>


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

  {!! Form::open(['route' => 'tutor.store', 'method' => 'POST']) !!}
    @include('signup.formTutor')
  {!! Form::close() !!}

  {!! $tutor->links() !!}
@endsection
