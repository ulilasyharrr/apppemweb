<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * index
     * 
     * @rturn void
     */

    public function index()

    {

        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts 
        return view('post/index', compact('posts'));

    }
}    