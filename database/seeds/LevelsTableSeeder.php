<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('levels')->insert([
        'level_name' => 'Sales Recruit',
        'slug' => 'SR',
        'commission_percent' => 20,
      ]);

      DB::table('levels')->insert([
        'level_name' => 'Sales Member',
        'slug' => 'SM',
        'commission_percent' => 20,
      ]);

      DB::table('levels')->insert([
        'level_name' => 'Sales Leader',
        'slug' => 'SL',
        'commission_percent' => 30,
      ]);

      DB::table('levels')->insert([
        'level_name' => 'Legend',
        'slug' => 'LE',
      ]);
    }
}
