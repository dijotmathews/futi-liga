<?php

use Illuminate\Database\Seeder;

use App\Models\Player;

class PlayerSeeder extends Seeder
{

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // list of initial players

        $players = [
            ['name' => 'Lieonel', 'surname' => 'Messi', 'jersey' => 10, 'position' => 'lwf', 'role' => 'c' ], 
            ['name' => 'Jordi','surname' =>  'Alba', 'jersey' => 11, 'position' =>  'lb', 'role' => ''], 
            ['name' => 'Luis', 'surname' => 'Suarez', 'jersey' => 9, 'position' =>  'cf', 'role' => '']
        ];


       
        foreach($players as $pl)
        {
            $player = Player::create($pl);
            
        }
        

       


    }
}
