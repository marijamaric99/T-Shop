<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Reviews;
use App\Categories;
use App\User;
use App\Notifications;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{



    public function index()
    {

        $notifications=Notifications::get()->all();
        $count=count($notifications);

        $category=Categories::get()->all();
        $cat=array();
        foreach($category as $data){
            array_push($cat, $data);
        }
        $cat=collect($cat);
        $categories=$cat->sortBy('name');


        $product=Products::get()->all();
        $coll=array();
        foreach($product as $data1){
            array_push($coll, $data1);
        }
        $collection = collect($coll);
        $products1 = $collection->sortBy('created_at');
        $products = $products1->reverse();

        $review=Reviews::get()->all();
        $coll=array();
        foreach($review as $data1){
            array_push($coll, $data1);
        }
        $collection = collect($coll);
        $reviews1 = $collection->sortBy('created_at');
        $reviews = $reviews1->reverse();

        return view('/home',compact('count', 'products', 'categories', 'reviews', 'notifications'));
    }

    public function about(){
        $products=Products::get()->all();
        $notifications=Notifications::get()->all();

        $count=count($notifications);

        $category=Categories::get()->all();
        $cat=array();
        foreach($category as $data){
            array_push($cat, $data);
        }
        $cat=collect($cat);
        $categories=$cat->sortBy('name');

        $review=Reviews::get()->all();
        $coll=array();
        foreach($review as $data1){
            array_push($coll, $data1);
        }
        $collection = collect($coll);
        $reviews1 = $collection->sortBy('created_at');
        $reviews = $reviews1->reverse();

       
            return view('about', ['products'=>$products, 'categories'=>$categories, 'reviews'=>$reviews, 'notifications'=>$notifications, 'count'=>$count]);
        
    }

    public function filter(Request $request)
    {
        $notifications=Notifications::get()->all();
        $count=count($notifications);

        $category=Categories::get()->all();
        $cat=array();
        foreach($category as $data){
                array_push($cat, $data);
        }
        $cat=collect($cat);
        $categories=$cat->sortBy('name');



        $c=$request->get('category');
        $sort=$request->get('sort');
        $product1=Products::get()->all();
            $product=array();
            if($c != 1){
            foreach($product1 as $product2 ){
                if($c===$product2['category']){
                array_push($product, $product2);
            }
        $product3=collect($product);
        if($sort==='date'){
        $product3=$product3->sortBy('created_at');
        $product3=$product3->reverse();}
        elseif($sort==='price'){
        $product3=$product3->sortBy('price');}
        elseif($sort==='popularity'){
            $product3=$product3->sortBy('popularity');
            $product3=$product3->reverse();}
        $products=$product3;}
    
    }

        else{
        $product3=collect($product1);
        if($sort==='date'){
        $product3=$product3->sortBy('created_at');
        $product3=$product3->reverse();}
        elseif($sort==='price'){
        $product3=$product3->sortBy('price');}
        elseif($sort==='popularity'){
            $product3=$product3->sortBy('popularity');
            $product3=$product3->reverse();}
        $products=$product3;}



    $review=Reviews::get()->all();
    $coll=array();
    foreach($review as $data1){
        array_push($coll, $data1);
    }
    $collection = collect($coll);
    $reviews1 = $collection->sortBy('created_at');
    $reviews = $reviews1->reverse();
    
            return view('/home',compact('count', 'products', 'categories', 'reviews', 'notifications'));
    }

    public  function search(Request $request)
    {
        $notifications=Notifications::get()->all();
        $count=count($notifications);

        $category=Categories::get()->all();
        $cat=array();
        foreach($category as $data){
            array_push($cat, $data);
        }
        $cat=collect($cat);
        $categories=$cat->sortBy('name');

        $search=$request->input('search');
        $product=Products::where('title', 'like', "%$search%")->get();
        $products=array();
        foreach($product as $data1){
          array_push($products, $data1);
    }

    $review=Reviews::get()->all();
    $coll=array();
    foreach($review as $data1){
        array_push($coll, $data1);
    }
    $collection = collect($coll);
    $reviews1 = $collection->sortBy('created_at');
    $reviews = $reviews1->reverse();

        return view('/home',compact('count', 'products', 'categories',  'reviews', 'notifications'));
    }
}