<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


// FOR AUTH USERS
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function viewPost($id)
    // {
    //     $viewPost = Post::where('id', $id)->get();

    //     dd($viewPost);
    // }


    public function index()
    {
        $user_posts =  Post::all()->where('user_id', Auth::id());
        return view('post.index')->with('user_posts', $user_posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        // // dd($input);
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required'
        ]);

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::id()
        ]);

        return to_route('dashboard')->with('success', 'Blog Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //dd($id);
        $posts = Post::where('id', $id)->first();
        //dd($post);
        return view('post.show')->with('posts', $posts);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit_post = Post::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        //dd($post);
        return view('post.edit')->with('edit_post', $edit_post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        Post::where('id', $id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return to_route('post.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_id = Post::find($id);
        $delete_id->delete();

        return to_route('post.index');
    }
}
