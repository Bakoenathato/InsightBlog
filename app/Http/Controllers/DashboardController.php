<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $insights = Insight::orderBy('created_at', 'desc');

        //check if there is a search request
        if(request()->has('search')){
            $insights = $insights->where('content', 'title', '%' . request()->get('search', '') . '%');
        }

        return view('dashboard', [
            'insights' => $insights->paginate(5),
        ]);
    }
}
