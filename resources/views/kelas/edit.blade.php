@extends('user-default')
@section('content')

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
  <div class="home-wrapper">
      <!-- Container fluid  -->
      <div class="container-fluid">
        <div class="row">
            <div class="card col-lg-12">
              <div class="card-title"><h2>Edit Kelas</h2></div>
              <div class="card-body">
                  <form method="post" action="{{route('kelas.update', $kelas)}}">
                      {{ csrf_field() }}
                      {{ method_field('patch') }}


                        <div class="form-group">
                          <label>Harga</label>
                          <input class="form-control" type="text" name="harga" value="{{ $kelas->harga }}" />
                        </div>


                        <div class="form-group">
                          <a class="btn btn-success" href="{{ route('kelas.index') }}">Back</a>
                          <button class="btn btn-primary" type="submit">Send</button>
                        </div>

                  </form>
              </div>



                </div>
            </div>
        </div>
      </div>
  </div>

@endsection
