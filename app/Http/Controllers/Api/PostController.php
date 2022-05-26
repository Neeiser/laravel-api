<?php

namespace App\Http\Controllers\Api;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(15);

        return response()->json([
            'status'    => 'success',
            'response'  => $posts
        ]);
    }
}
