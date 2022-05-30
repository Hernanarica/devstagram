<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
	public function index()
	{
		return view('auth.register');
	}
	
	public function store(Request $request)
	{
		$request->request->add(['username' => Str::slug($request->username)]);
		
		$this->validate($request, [
			'name'     => 'required|max:30',
			'username' => 'required|unique:users|min:3|max:20',
			'email'    => 'required|unique:users|email|max:60',
			'password' => 'required|min:6'
		]);
		
		User::create([
			'name'     => $request->name,
			'username' => $request->username,
			'email'    => $request->email,
			'password' => Hash::make($request->password)
		]);

//		1ra forma de autenticar
//		auth()->attempt([
//			'name'     => $request->name,
//			'email'    => $request->email,
//			'password' => $request->password
//		]);

//		2da forma de autenticar
		auth()->attempt($request->only('name', 'email', 'password'));
		
		return redirect()->route('muro');
	}
}
