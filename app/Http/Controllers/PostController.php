<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog.index',[
          'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create',[
          'category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $validateData = $request->validate([
        'title' => 'required|max:255',
        'slug' => 'required|unique:posts',
        // 'image' => 'required|file|max:255',
        'category_id' => 'required',
        'body' => 'required'
      ]);

      if ($request->file('image')) {
        $validateData['image'] = $request->file('image')->store('post-images');
      }

      $validateData['user_id'] = auth()->user()->id;
      $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');

    Post::create($validateData);
    return response()->json($validateData);
    // return redirect('/mypost')->with('success','New post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    /**
     * Filtered Post
     */
    public function myposts()
    {
      return view('blog.myblog',[
        'posts' => Post::where('user_id',auth()->user()->id)->get()
      ]);
    }

    public function checkSlug(Request $request) 
    {
      $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
      return response()->json(['slug' => $slug]);
    }
}
