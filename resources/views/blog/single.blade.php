@extends('layouts.master')

@section('title', 'Selamat Datang Mela')


@section('content')
    <h1> Selamat Datang ya Mela </h1>
    <h2> {{ $blog }} </h2>

    @foreach ($users as $user)
        <li> {{ $user }} </li>
    @endforeach

    {!! $unescaped !!}

    @if(count($users) > 5)
      <p> usernya lebih dari 5 </p>
    @else
      <p> usernya tidak lebih dari 5 </p>
    @endif


@endsection
