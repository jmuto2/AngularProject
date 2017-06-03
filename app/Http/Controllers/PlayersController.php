<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PlayersController extends Controller {

  public function index(Request $request)
  {
    return view('players.index');
  }
}