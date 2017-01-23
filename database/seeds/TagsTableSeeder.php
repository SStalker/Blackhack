<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $current_time = Carbon::now();

      DB::table('tags')->insert([
        ['name' => 'Programming', 'created_at' => $current_time, 'updated_at' => $current_time],
        ['name' => 'OpenGL', 'created_at' => $current_time, 'updated_at' => $current_time],
        ['name' => 'Unreal Engine 4', 'created_at' => $current_time, 'updated_at' => $current_time],
        ['name' => 'Hacking', 'created_at' => $current_time, 'updated_at' => $current_time],
        ['name' => 'Game', 'created_at' => $current_time, 'updated_at' => $current_time],
        ['name' => 'Evil', 'created_at' => $current_time, 'updated_at' => $current_time],
        ['name' => 'Good', 'created_at' => $current_time, 'updated_at' => $current_time],
        ['name' => 'Hochschule Osnabrück', 'created_at' => $current_time, 'updated_at' => $current_time],
        ['name' => 'C/C++', 'created_at' => $current_time, 'updated_at' => $current_time],
        ['name' => 'Python', 'created_at' => $current_time, 'updated_at' => $current_time],
        ['name' => 'Java', 'created_at' => $current_time, 'updated_at' => $current_time],
        ['name' => 'Android', 'created_at' => $current_time, 'updated_at' => $current_time]
        ['name' => 'Tutorial', 'created_at' => $current_time, 'updated_at' => $current_time]
      ]);
    }
}
