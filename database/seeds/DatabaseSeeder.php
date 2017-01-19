<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);

        Model::unguard();
        $this->call('PostTableSeeder');
        $this->call('TagTableSeeder');
    }
}

class PostTableSeeder extends Seeder
{
  public function run()
  {
    //App\Post::truncate();
    //App\Tag::truncate();

    factory(App\Post::class, 20)->create();
  }
}

class TagTableSeeder extends Seeder
{
  public function run()
  {
    factory(App\Tag::class, 5)->create();
  }
}