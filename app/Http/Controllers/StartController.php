<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StartController extends Controller
{
  public function getIndex()
  {
    $posts = DB::table('posts')->where('published_at', '<=', \Carbon\Carbon::now())->take(5)->orderBy('published_at', 'desc')->get();
    //dd($posts);
    return view('welcome')
      ->withPosts($posts);
  }
}
