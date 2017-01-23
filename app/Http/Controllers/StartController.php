<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class StartController extends Controller
{
  public function getIndex()
  {
    $posts = Post::where('published_at', '<=', \Carbon\Carbon::now())
              ->take(5)
              ->orderBy('published_at', 'desc')
              ->get();

    return view('welcome')
      ->withPosts($posts);
  }
}
