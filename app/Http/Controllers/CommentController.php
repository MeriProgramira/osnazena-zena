<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function store(Request $request, Post $post)
    {
        $this->validate($request, [
            'content' => 'required|max:255',
        ]);


        $comment = new Comment;
        $comment->content = $request->get('content');
        $comment->user()->associate($request->user());
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($comment);

        return back();
    }


    public function update(Request $request,$id) {

        $comment = Comment::find($id);

        $this->validate($request, [
            'content' => 'required|max:255',
        ]);

        $comment->content = $request->input('content');

        $comment->save();

        return back();
        //->with('success', 'Post je uspjesno azuriran');

    }


    public function destroy($id) {

        Comment::find($id)->delete();
        return back();
    }


}
