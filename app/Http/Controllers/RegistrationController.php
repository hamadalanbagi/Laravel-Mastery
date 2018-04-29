<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create(){
      return view('registration.create');
    }

    public function store(){

      // Validate the form
      $this->validate(request(), [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed'
      ]);

      // Create and save users
      $user = User::create(request(['name', 'email', 'password']));

      // Sign them in
      auth()->login($user);

      // Redirrect
      return redirect()->home();
    }
}
