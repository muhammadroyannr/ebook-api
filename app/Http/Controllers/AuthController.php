<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119124,
        'name' => 'Muhammad Royan Nur Ramadhan',
        'gender' => 'Male',
        'phone' => '085604041987',
        'class' => 'XII RPL 4'];
  }
}