<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    public function addcategory(Request $request){
        
        $this->validate($request, [
            'name'=>'required|max:25',
        ]);

        $categories = new Categories;
        
        $categories->name = $request->input('name');
        $categories->save();

        return redirect('/')->with('success4', 'CATEGORY CREATED SUCCESSFULLY!');
}
}
