@extends('layouts.app')

@section('title', 'Place')

@section('content')
    <!-- Contenido específico de la página de inicio -->
    <section class="home" id="home">
		<div class="home-text">
			<h1><span>Bienvenido</span> a Pizza Place</h1>
			<p>Disfruta de auténticas pizzas caseras.<br> Los mejores ingredientes en nuestra
				pizzería.</p>
			<a href="#" class="btn">Pide Ya</a>
		</div>

		<div class="home-img">
			<img src="{{ asset('img/home.png') }}" alt="home">
		</div>
	</section>
@endsection
