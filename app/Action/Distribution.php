<?php

namespace App\Action;

class Distribution
{
    function getTeam($players, $team_size = 5)
    {
        //Shuffle array and generate a random unique team of 5
        shuffle($players);
        return array_chunk($players, $team_size);
    }

    //Used to check member duplication in teams in my previous approach - NOT IN USE NOW
    public function teamExists($teams, $team)
    {
        if (empty($teams)) {
            return false;
        }

        foreach ($teams as $players) {
            $players = $this->arrayPluck($players, 'name');
            $team = $this->arrayPluck($team, 'name');

            if (! empty(array_intersect($players, $team))) {
                return true;
            }
        }
        return false;
    }


//Distributing team members evenly
    public function testTeamPlayerDistribution()
    {
        $scores = [];
        $teams = [];
        $allTeams = [];

        $contents = \file_get_contents(__DIR__ . '/players.json');
        $players = json_decode($contents, true);

        do{
            for($i=0;$i<=10;$i++) {
                $teams = $this->getTeam($players);

                foreach ( $teams as $team) {
                    $scoreTotal = array_sum(array_map(function ($player) {
                        return (float) $player['score'];
                    }, $team));
                    array_push($scores, $scoreTotal);
                }

                $differences=[];
                for($i=0;$i<count($scores);$i++){
                    for($j=$i+1;$j<count($scores);$j++){
                        $differences[]=abs($scores[$i]-$scores[$j]);

                    }
                }
                if(round($differences[0], 2) >= 0.01 &&  round($differences[0], 2) <= 0.09 ){
                    array_push($allTeams, $teams);
                }
            }
        } while(count($allTeams) === 0);

        return $allTeams;
    }

    //Used in Team existence check in my previous approach - NOT IN USE NOW
    public function arrayPluck($array, $key)
    {
        return array_map(function ($v) use ($key) {
            return is_object($v) ? $v->$key : $v[$key];
        }, $array);
    }
}
