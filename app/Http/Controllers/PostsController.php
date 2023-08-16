<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Post;
use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $post = Post::find(1);
   
        $comment1 = new Comments();
        $comment1->comment = "Hi ItSolutionStuff.com Comment 1";
        
        /*$post = Post::find(1);
        $comment2 = new Comments;
        $comment2->comment = "nuevo comentario";
           
        $post = $post->comments()->saveMany([$comment2]);
        $comments = Post::find(1)->comments;
        
        echo $comments;*/
        
        /*$comment = Comments::find(1);
        $post = Post::find(2);
        dd($comment);
        $comment->post()->associate($post)->save();
        */
        $comment=Comments::get();
        return view('post',['posts'=>$comment]);
        /*$post = new Post();
        $post->name = "German";
        $post->save();*/
    }
}
