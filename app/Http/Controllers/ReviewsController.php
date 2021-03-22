<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reviews;

class ReviewsController extends Controller
{
    public function postreview(Request $request){
        
        $this->validate($request, [
            'review'=>'required|max:500',
            'rating'=>'required',
        ]);

        $reviews = new Reviews;
        
        $reviews->review = $request->input('review');
        $reviews->rating = $request->input('rating');
        $reviews->save();

        return redirect('/')->with('successrev', 'REVIEW POSTED!');
}
}
