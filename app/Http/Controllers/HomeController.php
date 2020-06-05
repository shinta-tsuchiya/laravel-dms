<?php

namespace App\Http\Controllers;

use App\Document;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index() {
    return view('home');
  }
}
