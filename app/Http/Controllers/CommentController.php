<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function comment()
{
   return view('post.comment');
}
public function comment_store(Request $request)
{
    $comment = $this->validate(request(),[
       'comment' => 'required',
       'date' => 'required'
    ]);
    $comment = new Comment();
    $comment->comment_content = $request->get('comment');
    $comment->comment_date = $request->get('date');
    $comment->save();

    return redirect('home');
}
public function show ($id){
        $comment = Post::find($id);
        return view('post.comment', compact('comment'));
}

}
