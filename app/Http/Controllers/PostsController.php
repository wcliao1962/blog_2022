<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(User $user)
    {

        //$posts = Post::orderBy('created_at', 'DESC')->get();
        $posts = $user->posts()->latest()->get();
        $data = [
            'posts' => $posts, 'blogger'=> $user,
        ];

        return view('posts.index', $data);
    }

    public function show(Post $post)
    {
        $data = [
            'post' => $post,'blogger'=> $post->user,
        ];

        return view('posts.show', $data);
    }
}
