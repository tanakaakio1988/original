<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Original;

class UsersController extends Controller
{
    public function show()
    {
      $name = Auth::user()->name;
      $originals = Auth::user()->originals()->orderBy('created_at', 'DESC');

      return view('users.show')->with(array('name' => $name, 'originals' => $originals));

    }
}
