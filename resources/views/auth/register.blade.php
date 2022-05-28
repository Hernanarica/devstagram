@extends('layouts.app')

@section('titulo')
	Registrate en Devstagram
@endsection
@section('contenido')
	<div class="md:flex gap-10 items-center">
		<div class="md:w-3/5">
			<img src="{{ asset('imgs/registrar.jpg') }}" alt="Registrar">
		</div>
		<div class="md:w-2/5 bg-white p-6 rounded-lg">
			<form action="{{ route('register')  }}" method="post">
				@csrf
				<div class="mb-5 space-y-3">
					<label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
					<input type="text"
					       name="name"
					       id="name"
					       placeholder="Tu nombre"
					       class="border-2 p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
					       value="{{ old('name') }}"
					>
					@error('name')
						<p class="py-2 px-2 bg-red-500 text-white rounded-lg">{{ $message }}</p>
					@enderror
				</div>
				<div class="mb-5 space-y-3">
					<label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
					<input type="text"
					       name="username"
					       id="username"
					       placeholder="Tu username"
					       class="border-2 p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
					       value="{{ old('username') }}"
					>
					@error('username')
						<p class="py-2 px-2 bg-red-500 text-white rounded-lg">{{ $message }}</p>
					@enderror
				</div>
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
				<div class="mb-5 space-y-3">
					<label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir password</label>
					<input type="password"
					       name="password_confirmation"
					       id="password_confirmation"
					       placeholder="Tu password"
					       class="border p-3 w-full rounded-lg"
					>
				</div>
				<button type="submit" class="bg-sky-600 hover:bg-sky-700 uppercase transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg">Crear cuenta
				</button>
			</form>
		</div>
	</div>
@endsection