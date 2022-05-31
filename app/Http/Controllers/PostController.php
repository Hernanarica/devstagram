<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function __construct()
	{
		// Si el usuario no esta logeado me redirecciona a la vista de login.
		$this->middleware('auth');
	}
	
	public function index(User $user)
	{
		return view('sections.dashboard', [
			'user' => $user
		]);
	}
	
}