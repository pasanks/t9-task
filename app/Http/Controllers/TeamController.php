<?php

namespace App\Http\Controllers;

use App\Action\Distribution;

class TeamController extends Controller
{
  public function playerDistribution(Distribution $distributor)
  {
     $teams =  $distributor->testTeamPlayerDistribution();
     return view('welcome')->with([
         'data' => $teams,
         'total' => 0,
         'total2' => 0
     ]);
  }

//  Todo
//- create resource controller to perform crud operations on Teams

//if we are scaling this up further more we can mix and match teams for games and then store game details and
//assign games according to the scores afterwards.
}
