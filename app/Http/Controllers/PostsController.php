<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user = Auth::user()->id;
        $posts = Posts::where('user_id', $user)->get();
        $data = [
            'posts' => $posts
        ];
        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {
        $data = $request->all();

        $data['image'] = $request->file('image')->store('image');
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($request->title);

        Posts::create($data);

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Posts::where('slug', $slug)->first();
        $comments = $data->comments()->get();
        $total_comments = $comments->count();

        return view('posts.show', compact('data', 'comments', 'total_comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Posts::where('slug', $slug)->first();
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(PostsRequest $request, $slug)
    {
        $post = Posts::where('slug', $slug)->first();
        $new_slug = Str::slug($request['title']);

        if (empty($request->image)) {
            $post->update([
                'title' => $request['title'],
                'content' => $request['content'],
                'slug' => $new_slug,
            ]);
            return redirect("posts/$new_slug/show");
        } else{
            Storage::delete($post->image);
            $post->update([
                'title' => $request['title'],
                'content' => $request['content'],
                'slug' => $new_slug,
                'image' => $request->file('image')->store('image')
            ]);
            return redirect("posts/$new_slug/show");
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $post, $slug)
    {
        $data = $post->where('slug', $slug)->first();
        $data->delete();
        return redirect('posts');
    }
}
