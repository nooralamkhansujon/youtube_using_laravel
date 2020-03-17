<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\CommentNotification;
use App\Comment;
use App\Video;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //save comment in database
         $comment                   = new Comment();
         $comment->from_id          = auth()->user()->id;
         $comment->comment          = $request->comment;
         $comment->commentable_id   = $request->video_id;
         $comment->commentable_type = 'App\Video';
         $comment->save();

         //  show notification to the video user
         $video_user                = Video::find($request->video_id)->channel->user;
         $video_user->notify(new CommentNotification(auth()->user()));

        $output = array(
            'message' => "ok",
        );
        return $output;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }



}
