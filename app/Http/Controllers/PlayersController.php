<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PlayersController extends Controller {

  public function index()
  {
    return view('players.index');
  }
}
