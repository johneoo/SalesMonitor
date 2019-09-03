<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('teams')->insert([
          'team_name' => 'Dominicans',
      ]);

      DB::table('teams')->insert([
          'team_name' => 'Trillionaires',
      ]);
    }
}
