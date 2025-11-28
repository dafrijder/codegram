<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create()
    {
        return view('main.post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'photo' => 'required|image|max:6000',
        ]);

        $path = $request->file('photo')->store('posts', 'public');

        Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $path,
        ]);

        return redirect()->route('feed');
    }

    public function show(Post $post)
    {
        return view('main.profile.post', compact('post'));
    }
}
