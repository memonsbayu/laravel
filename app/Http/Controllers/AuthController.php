<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119041,
        'name' => 'Bayu Salmaa Abiyyah',
        'gender' => 'Female',
        'phone' => '081226045878',
        'class' => 'XII RPL 2'];
  }
}