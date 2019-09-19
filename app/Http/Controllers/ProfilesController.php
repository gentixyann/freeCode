<?php

namespace App\Http\Controllers;


use App\User;
//Appの中のUser.phpを使うから
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
     public function index($user)
    {
      $user = User::findOrFail($user);

        return view('home', [
          'user' => $user
        ]);
    }
}
