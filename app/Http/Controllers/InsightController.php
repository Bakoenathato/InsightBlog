<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InsightController extends Controller
{
    //Function to show the posted insights
    public function show(Insight $insight)
    {
        return view('posts.show', compact('insight'));
    }

    //Create a blog post and show on feed
    public function store(){
        $validated = request()->validate([
            'title' => 'required|max:120',
            'content' => 'required|max:255'
        ]);

        $validated['user_id'] = Auth::id();

        Insight::create($validated);

        return redirect()->route('dashboard') -> with('success', 'Insight created!');
    }



    //Allow editing of the posted blog
    public function edit(Insight $insight){
        if(Auth::id() !== $insight->user_id){
            abort(403);
        }

        $editing = true;
        return view('posts.edit', compact('insight', 'editing'));
    }

    //Update a selected blog
    public function update(Insight $insight){
        if(Auth::id() !== $insight->user_id){
            abort(404);
        }

        $validated = request()->validate([
            'title' => 'required|max:120',
            'content' => 'required|max:255'
        ]);

        $insight->update($validated);

        return redirect()->route('insights.show', $insight->id) -> with('success', 'Insight updated!');
    }

    //Delete blog
    public function destroy(Insight $insight){
        if(Auth::id() !== $insight->user_id){
            abort(404);
        }

        $insight->delete();
        return redirect()->route('dashboard') -> with('success', 'Insight deleted!');
    }

    public function recentPosts(){
        $recent = Insight::orderBy('created_at', 'desc')->take(4)->get();

        $recent = $recent->shuffle();

        return view('dashboard', ['insight' => $recent]);
    }

}
