<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\Request;
use App\Post;
use App\Tag;
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
      $posts = Post::paginate(15);

      return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tags = Tag::pluck('name', 'id');
      return view('posts.create')->withTags($tags);//->with('categories' ,$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
      $file = $request->file('image');
      $path = $file->store('public/uploads');

      // Merge the new path to the request
      $request->merge(array('image_path' => $path));

      $post = Post::create($request->all());

      $tagIds = $request->input('tag_list');

      $post->tags()->attach($tagIds);

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
        $tags = Tag::pluck('name', 'id');
        return view('posts.edit')
                ->with('post', $post)
                ->with('tags', $tags);
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
      //dd($request->all());
      $post->update($request->all());
;
      $post->tags()->sync( $request->input('tag_list') );

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
