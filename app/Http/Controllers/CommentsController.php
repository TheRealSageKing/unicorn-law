<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Post;
use App\Models\r;
use Corcel\Model\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CommentRequest $request)
    {
        try{

            $request->validated();

            $post = Post::getPostFromId( $request->post_id );

            if ( $post == null)
            {
                throw new \Exception('Post does not exist');
            }

            $comment = new Comment();
            $comment->comment_author = $request->author;
            $comment->comment_author_email = $request->author_email;
            $comment->comment_author_url = $request->author_url;
            $comment->comment_author_IP = $request->author_ip;
            $comment->comment_content = $request->comment;
            $comment->comment_approved = 0;
            $comment->comment_agent = $request->agent;
            $comment->comment_type = 'comment';
            $comment->comment_parent = $request->parent_id;
            $comment->save();

            $post->comments()->save($comment);

            return redirect()->route('news.single', $post->slug)
                ->with('success', 'Comment was added successfully');
        }catch(\Exception $ex)
        {
            Log::error($request);
            Log::error($ex->getMessage());
            return redirect()->route('news')->with('error', $ex->getMessage());
        }
    }

}
