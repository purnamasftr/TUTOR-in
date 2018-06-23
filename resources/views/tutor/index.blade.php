@extends('tutor.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h3>Simple CRUD</h3>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="{{ route('tutor.create') }}">Create New Tutor</a>
      </div>
    </div>
  </div>


  @if($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th>No.</th>
      <th>id_user_tutor</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Password</th>
      <th>Alamat</th>
      <th>Fakultas</th>
      <th>Jurusan</th>
      <th>Waktu masuk</th>
      <th width="300px">Action</th>

    </tr>

    @foreach ($fak as $post)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $post->id_user_tutor }}</td>
        <td>{{ $post->nama_tutor }}</td>
        <td>{{ $post->email_tutor }}</td>
        <td>{{ $post->password_tutor }}</td>
        <td>{{ $post->alamat_tutor }}</td>
        <td>{{ $post->fakultas_tutor }}</td>
        <td>{{ $post->jurusan_tutor }}</td>
        <td>{{ $post->created_at }}</td>
        <td>
          <a class="btn btn-xs btn-primary" href="{{ route('tutor.edit', $post->id_user_tutor) }}">Edit</a>

          {!! Form::open(['method' => 'DELETE', 'route'=>['tutor.destroy', $post->id_user_tutor], 'style'=> 'display:inline']) !!}
          {!! Form::submit('Delete', ['class'=> 'btn btn-xs btn-danger']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>

  {!! $tutor->links() !!}
@endsection
