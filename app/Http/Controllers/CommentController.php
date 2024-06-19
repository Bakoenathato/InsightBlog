<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Insight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $insight){

        $validateData = $request->validate([
           'comment' => 'required|string|max:255',
        ]);

        $insight = Insight::findOrFail($insight);

        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->insight_id = $insight->id;
        $comment->comment = $validateData['comment'];
        $comment->save();

        return redirect()->route('insights.show', $insight->id)->with('success', 'Comment posted');
    }

}
