<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }


    public function fileStore(Request $request)
    {
        $post = new Post();

        // validation 

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png',
        ]);

        $imageName =  time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $post->name = $request->name;
        $post->email = $request->email;
        $post->image = $imageName;

        $post->save();

        return redirect()->route('home');
    }


    public function fileEdit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit', ['ourPost' => $post]);
    }

    public function fileUpdate($id, Request $request)
    {


        // validation 

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png',
        ]);

        $imageName =  time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $post = Post::findOrFail($id);
        $post->name = $request->name;
        $post->email = $request->email;
        $post->image = $imageName;

        $post->save();

        return redirect()->route('home');
    }

    public function fileDelete($id)
    {
        $post = Post::findOrFail($id);

        $post -> delete();

        return redirect()->route('home');
    }
}
