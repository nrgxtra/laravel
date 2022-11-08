<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addComment(Request $request, $id)
    {
        $user_id = $request->user()->id;
        $post = Post::find($id);
        $alreadyCommented = $post->comments()->where('user_id', $user_id)->first();
        if ($alreadyCommented) {
            return back()->with('success', 'You already commented!');
        } else {
            $formFields = $request->validate([
                'content' => 'string',
            ]);
            $formFields['post_id'] = $id;
            $formFields['user_id'] = $user_id;
            PostComment::create($formFields);
            return back()->with('success', 'You commented this post');
        }
    }

    public function editComment($id)
    {
        $comment = PostComment::find($id)->first();
        $post = Post::find($comment->post_id);
        return view('blog.edit-comment', ['comment' => $comment, 'post' => $post]);
    }

    public function updateComment(Request $request, $id)
    {

        $comment = PostComment::find($id)->first();
        $post = Post::find($comment->post_id);
        $formFields = $request->validate([
            'content' => 'string',
        ]);
        $comment->update($formFields);
        return redirect(route('show', $post))->with('success', 'Comment Updated');
    }

    public function deleteComment($id)
    {
        $comment = PostComment::find($id)->first();
        $comment->delete();
        return back()->with('success', 'Comment deleted');
    }
}
