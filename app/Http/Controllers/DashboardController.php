<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('dashboard')->with('posts', $posts);
    }

    public function viewPost($id)
    {
        $viewPost = Post::find($id);

        if (!$viewPost) {
            abort(404); // Or handle the case when the post is not found
        }

        return view('post.view_post', compact('viewPost'));
    }
}
