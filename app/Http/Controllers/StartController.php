<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StartController extends Controller
{
  public function getIndex()
  {
    $posts = DB::table('posts')->take(5)->get();    

    return view('welcome')
      ->withPosts($posts);
  }
}
