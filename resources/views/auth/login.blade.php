@extends('layouts.app')

@section('titulo')
	Inicia sesion en Devstagram
@endsection
@section('contenido')
	<div class="md:flex gap-10 items-center">
		<div class="md:w-3/5">
			<img src="{{ asset('imgs/login.jpg') }}" alt="Imagen login de usuarios">
		</div>
		<div class="md:w-2/5 bg-white p-6 rounded-lg">
			<form action="{{ route('login')  }}" method="post">
				@csrf
				@if(session('mensaje'))
					<p class="py-2 px-2 bg-red-500 text-white rounded-lg">{{ session('mensaje') }}</p>
				@endif
				<div class="mb-5 space-y-3">
					<label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
					<input type="email"
					       name="email"
					       id="email"
					       placeholder="Tu email"
					       class="border-2 p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
					       value="{{ old('email') }}"
					>
					@error('email')
					<p class="py-2 px-2 bg-red-500 text-white rounded-lg">{{ $message }}</p>
					@enderror
				</div>
				<div class="mb-5 space-y-3">
					<label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
					<input type="password"
					       name="password"
					       id="password"
					       placeholder="Tu password"
					       class="border-2 p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
					>
					@error('password')
					<p class="py-2 px-2 bg-red-500 text-white rounded-lg">{{ $message }}</p>
					@enderror
				</div>
				<div class="mb-5">
					<input type="checkbox" name="remember" id="remember">
					<label for="remember" class="uppercase text-gray-500 text-sm">Mantener mi session abierta</label>
				</div>
				<button type="submit" class="bg-sky-600 hover:bg-sky-700 uppercase transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg">Iniciar sesion
				</button>
			</form>
		</div>
	</div>
@endsection