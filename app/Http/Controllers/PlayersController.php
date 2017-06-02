<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PlayersController extends Controller {

  public function index()
  {
    $players = [
      ['id' => 1, 'first_name' => 'Joe', 'last_name' => 'Muto'],
      ['id' => 2, 'first_name' => 'Pete', 'last_name' => 'Smith'],
      ['id' => 3, 'first_name' => 'Larry', 'last_name' => 'Fitzgerald'],
      ['id' => 4, 'first_name' => 'Scott', 'last_name' => 'Grates'],
      ['id' => 5, 'first_name' => 'Mike', 'last_name' => 'Young'],
      ['id' => 6, 'first_name' => 'Chris', 'last_name' => 'Muto'],
      ['id' => 7, 'first_name' => 'Tony', 'last_name' => 'Barkett'],
      ['id' => 8, 'first_name' => 'Rick', 'last_name' => 'Bernier'],
      ['id' => 9, 'first_name' => 'Kevin', 'last_name' => 'Knipe'],
      ['id' => 10, 'first_name' => 'Matt', 'last_name' => 'Mitchell'],
    ];

    return view('players.index', ['players' => $players]);
  }
}