@extends('layouts.master')

<section>
  <h1>Selamat datang di single hehe</h1>
  <h2> {{ $blog }} !!</h2>
  <h3> {{$user}} ?</h3>
  <?php foreach ($users as $pengguna): ?>
          <li>{{$pengguna}}</li>
  <?php endforeach; ?>
</section>
