<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blog.index', ['posts' => Post::latest()->with('author')->filter(request(['tag', 'search', 'author']))->paginate(2)]);
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
        if (auth()->user()->hasRole('admin')){
            return view('blog.manage',['posts'=>Post::all()]);
        }else{
            return view('blog.manage', ['posts'=> auth()->user()->posts()->get()]);
        }
    }
    public function like(Request $request, $id){
        $user_id = $request->user()->id;
        $post = Post::find($id);
        $alreadyLiked = $post->likes()->where('user_id', $user_id)->first();
        if($alreadyLiked){
            $alreadyLiked->delete();
            return back()->with('success', 'Disliked!');
        }else{
            $like = new Like(['post_id'=>$id, 'user_id'=>$user_id]);
            $like->save();
            return back()->with('success', 'Liked!');
        }
    }
}

