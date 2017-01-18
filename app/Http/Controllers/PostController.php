<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\Request;
use App\Post;
use Carbon\Carbon;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', ['only' => ['index', 'create', 'store', 'update', 'destroy', 'edit']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::where('published_at', '<=', Carbon::now())
          ->orderBy('published_at', 'desc')->get();

      return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('posts.create');//->with('categories' ,$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
      $post = Post::create($request->all());
        return redirect(action('PostController@show', $post->id))
            ->with('message', 'Post wurde erstellt!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

      //dd($post->content);
      return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit')
                ->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
      $post->fill($request->all());
      $post->save();
        return redirect('posts')
            ->with('message', 'Post wurde geändert!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      $post->delete();
        return redirect('/')
            ->with('message', 'Post wurde gelöscht!');
    }
}
