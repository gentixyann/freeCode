<?php

namespace App\Http\Controllers;


use App\User;
//Appの中のUser.phpを使うから
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
  // App\UserのUserとして
     public function index(User $user)
    {
      // $user = User::findOrFail($user);

        return view('profiles.index', compact('user'));
    }

    public function edit(User $user)
    {
      return view('profiles.edit', compact('user'));
    }
}
