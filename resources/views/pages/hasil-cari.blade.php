@extends('user-default')
@section('content')


	<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Mata Kuliah</th>
                <th>Harga</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $kelas)
            <tr>
                <td>{{$kelas->id_matakuliah}}</td>
                <td>{{$kelas->harga}}</td>
                <td>{{$kelas->ket}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
	</div>



@endsection
