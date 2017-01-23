<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
    public function search(Request $request)
    {
      $searchFor = $request->get('query');
      $query = '%' . $searchFor .'%';

      $result = Post::where('title', 'LIKE', $query)->get();

      return view('search.result')
        ->with('query', $searchFor)
        ->withResults($result);
    }
}
