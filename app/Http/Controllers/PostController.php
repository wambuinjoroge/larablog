<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function post()
    {
        return view('post.post');
    }

    public function post_store(Request $request)
    {
        $post = $this->validate(request(), [
            'post_title' => 'required',
            'post_content' => 'required',
            'date' => 'required'
        ]);

        $post= new Post();
        $post->post_title = $request->get('post_title');
        $post->post_content = $request->get('post_content');
        $post->date = $request->get('date');
        $post->save();
        return redirect('home')->with('success', 'Your post has been added');
    }

}
