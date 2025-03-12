<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get(); 
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $users = User::all(); 
        return view('posts.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'user_id' => 'required|exists:users,id'
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')->with('success', 'تمت إضافة المنشور بنجاح!');
    }
}
