<!DOCTYPE html>
<html lang="{{ str_replace ('_', '-', app()->getLocale ()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>DevStagram - @yield('titulo')</title>
		{{--
			asset() => Apunta a la carpeta public ypuedo importar su hoja de estilos.
			now() => Es un objeto con el cual puedo acceder a la fecha actual.
			csrf => Es un tipo de ataque Cross sire request forgery.
		--}}
		<Link href={{ asset('css/app.css') }} rel="stylesheet">
	</head>
	<body class="bg-gray-100">
		<header class="p-5 border-b bg-white shadow">
			<div class="container mx-auto flex justify-between items-center">
				<h1 class="text-3xl font-black">
					<a href="{{ route('home')  }}">DevStagram</a>
				</h1>
				<nav class="flex items-center gap-2">
					<a href="#" class="font-bold uppercase text-gray-600">Login</a>
					<a href="{{ route('register')  }}" class="font-bold uppercase text-gray-600">Crear cuenta</a>
				</nav>
			</div>
		</header>
		<main class="container mx-auto mt-10">
			<h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
			@yield('contenido')
		</main>
		<footer class="text-center p-5 text-gray-500 font-bold uppercase mt-10">DevStagram - todos los derechos reservados {{ now()->year  }}</footer>
	</body>
</html>