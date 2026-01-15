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

    public function store(Request $request)
{
    // Validazione
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'nullable|image|max:2048', // opzionale, max 2MB
    ]);

    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('posts', 'public');
    }

    Post::create([
        'title' => $request->title,
        'content' => $request->content,
        'image' => $imagePath,
    ]);

    return redirect()->route('posts.index');
}

}