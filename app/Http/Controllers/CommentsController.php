<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Comments;
use Illuminate\Support\facades\Auth;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function comments(CreateCommentRequest $request)
    {
        Comments::create([
            'comment' => $request->comment,
            'user_id' => Auth::user()->id,
            'post_id' => $request->post_id
        ]);
        return redirect()->back();
    }
}
