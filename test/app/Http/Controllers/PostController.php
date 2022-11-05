<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blog.index', ['posts' => Post::latest()->filter(request(['tag', 'search']))->paginate(2)]);
    }

    public function show(Post $post)
    {
        return view('blog.show',
            ['post' => $post]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'string',
            'tags' => 'string',
            'category' => 'string',
            'description' => 'string',
        ]);
        if ($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        $formFields['user_id'] = auth()->id();
        Post::create($formFields);
        return redirect('/blog')->with('success', 'Post Created Successfully!');
    }

    public function edit(Post $post)
    {

        return view('blog.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $formFields = $request->validate([
            'title' => 'string',
            'tags' => 'string',
            'category' => 'string',
            'description' => 'string',
        ]);

        if ($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        $post->update($formFields);

        return back()->with('success', 'Post Updated Successfully!');
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect('/blog')->with('success', 'You just deleted a Post!');
    }
    public function manage(){
        return view('blog.manage', ['posts'=> auth()->user()->posts()->get()]);
    }
}

