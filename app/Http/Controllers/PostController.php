<?php

namespace App\Http\Controllers;

use App\Models\Post;          // il tuo model
use Illuminate\Http\Request;   // per la Request
use App\Http\Controllers\Controller; // <-- aggiungi questa riga

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        Post::create($request->all());
        return redirect()->route('posts.index');
    }
}
