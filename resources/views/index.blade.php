@extends('layout.base')

@section('title', 'Home page')

@section('pageTitle', 'Benvenuti sul nostro sito')

@section('pageContent')
	<h2>Mi chiamo {{$nome}} {{$cognome}}</h2>
	<h3>I miei amici sono:</h3>
	<ul>
		@foreach ($amici as $amico)
		<li>{{$amico}}</li>
		@endforeach
	</ul>
@endsection