<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function send(Request $request){
        // Validate request
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'comment' => ['required', 'string', 'max:500'],
        ]);

        // Sanitize
        $validatedData['name'] = preg_replace('/([^a-zA-Z0-9\- ])/', '', $validatedData['name']);
        $validatedData['comment'] = preg_replace('/([^a-zA-Z0-9\- ])/', '', $validatedData['comment']);

        // Save
        $comment = new Comment();
        $comment->name = $validatedData['name'];
        $comment->comment = $validatedData['comment'];
        $comment->save();

        return back();
    }
}
