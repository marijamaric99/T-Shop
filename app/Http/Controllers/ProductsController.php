<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Products;
use App\Categories;
use App\Cart;
use App\Orders;
use App\Reviews;
use App\Notifications;
use Session;

class ProductsController extends Controller
{

    public function addproduct(Request $request){
        
        $this->validate($request, [
            'title'=>'required|max:25|unique:products',
            'price'=> 'required|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'category'=>'required',
            'cover_image'=>'required|image|max:1999|unique:products',
            'image2'=>'required|image|max:1999|unique:products',
            'image3'=>'required|image|max:1999|unique:products',
            'image4'=>'required|image|max:1999|unique:products',
            'image5'=>'required|image|max:1999|unique:products',
            'description'=>'required|max:500',
        ]);

        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        $filenameWithExt2 = $request->file('image2')->getClientOriginalName();
        $filenameWithExt3 = $request->file('image3')->getClientOriginalName();
        $filenameWithExt4 = $request->file('image4')->getClientOriginalName();
        $filenameWithExt5 = $request->file('image5')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
        $filename3 = pathinfo($filenameWithExt3, PATHINFO_FILENAME);
        $filename4 = pathinfo($filenameWithExt4, PATHINFO_FILENAME);
        $filename5 = pathinfo($filenameWithExt5, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        $extension2 = $request->file('image2')->getClientOriginalExtension();
        $extension3 = $request->file('image3')->getClientOriginalExtension();
        $extension4 = $request->file('image4')->getClientOriginalExtension();
        $extension5 = $request->file('image5')->getClientOriginalExtension();

        // Upload Image

        $thumbStore = $filename.'_'.time().'.'.$extension;
        $thumbStore2 = $filename2.'_'.time().'.'.$extension2;
        $thumbStore3 = $filename3.'_'.time().'.'.$extension3;
        $thumbStore4 = $filename4.'_'.time().'.'.$extension4;
        $thumbStore5 = $filename5.'_'.time().'.'.$extension5;
        $thumb = Image::make($request->file('cover_image')->getRealPath());
        $thumb2 = Image::make($request->file('image2')->getRealPath());
        $thumb3 = Image::make($request->file('image3')->getRealPath());
        $thumb4 = Image::make($request->file('image4')->getRealPath());
        $thumb5 = Image::make($request->file('image5')->getRealPath());
        $thumb->resize(400, 500);
        $thumb2->resize(400, 500);
        $thumb3->resize(400, 500);
        $thumb4->resize(400, 500);
        $thumb5->resize(400, 500);
        
        
        $thumb->save('storage/images_resized/'.$thumbStore);
        $thumb2->save('storage/images_resized/'.$thumbStore2);
        $thumb3->save('storage/images_resized/'.$thumbStore3);
        $thumb4->save('storage/images_resized/'.$thumbStore4);
        $thumb5->save('storage/images_resized/'.$thumbStore5);

        $products = new Products;
        
        $products->title = $request->input('title');
        $products->price = $request->input('price');
        $products->category = $request->get('category');
        $products->cover_image = $thumbStore;
        $products->image2 = $thumbStore2;
        $products->image3 = $thumbStore3;
        $products->image4 = $thumbStore4;
        $products->image5 = $thumbStore5;
        $products->description = $request->input('description');

        $products->save();

        return redirect('/')->with('success', 'PRODUCT ADDED SUCCESSFULLY!');

    }

    public function getAddToCart(Request $request, $id){
        $this->validate($request, [
            'color'=>'required',
            'size'=> 'required',
            'type'=> 'required',
            ]);
        $color = request()->get('color');
        $size = request()->get('size');
        $type = request()->get('type');
            $produc=Products::find($id);
            $s=$produc->id;
            $produc->color=request()->get('color');
            $produc->size=request()->get('size');
            $produc->type=request()->get('type');
            $result = [$produc['title'],$produc['size'],$produc['color'], $produc['type']];
            $result1 = implode(",", $result);
            $oldCart=Session::has('cart') ? Session::get('cart') : null;
            $cart=new Cart($oldCart);
            $cart->add($produc, $result1);

            $request->session()->put('cart', $cart);

            return redirect('/')->with('success2', $s);


    }

    public function getCart(){

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

        if(!Session::has('cart')){
            return view('shopping-cart', ['products'=>$products, 'categories'=>$categories, 'reviews'=>$reviews, 'notifications'=>$notifications, 'count'=>$count]);
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);

        return view('shopping-cart', ['products'=>$products, 'pro'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 'categories'=>$categories, 'reviews'=>$reviews,'notifications'=>$notifications, 'count'=>$count]);
    }

    public function removeone(Request $request){

        $id = request()->get('id1');
        $color = request()->get('color1');
        $size = request()->get('size1');
        $type = request()->get('type1');
        $remove = [$id, $size, $color, $type];
        $remove=implode(",",$remove);
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $cart->remove1($oldCart, $remove);
        $request->session()->put('cart', $cart);

        return redirect('shopping-cart');


    }

    public function removeall(Request $request){

        $id = request()->get('id1');
        $color = request()->get('color1');
        $size = request()->get('size1');
        $type = request()->get('type1');
        $remove = [$id, $size, $color, $type];
        $remove=implode(",",$remove);
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $cart->remove($oldCart, $remove);
        $request->session()->put('cart', $cart);

        return redirect('shopping-cart');
    }

    public function buy(Request $request){
        
        $this->validate($request, [
            'full_name'=>'required',
            'country'=> 'required',
            'city'=> 'required',
            'adress'=> 'required',
            'phone'=> 'numeric',
            ]);


        $oldCart=Session::get('cart');


        foreach($oldCart->items as $data){
            $id=$data['item']['id'];
            $prd=Products::where('id', $id)->get();
            foreach($prd as $p)
            $p->popularity+=1;
            $p->save();
        }



        $orders = new Orders;
        
        $orders->full_name = $request->input('full_name');
        $orders->country = $request->input('country');
        $orders->city = $request->get('city');
        $orders->adress = $request->input('adress');
        $orders->phone = $request->input('phone');
        $orders->order = [$oldCart->items, $oldCart->totalPrice];
        $orders->save();

        $keys=array();
          foreach(array_keys($oldCart->items) as $key){   
            $x=[$key, $oldCart->items[$key]['qty']];
            $key=implode(", Quantity:", $x);
            array_push($keys, $key);
}

            $oldCart->name=$keys;


$notifications = new Notifications;
        
$notifications->full_name = $request->input('full_name');
$notifications->country = $request->input('country');
$notifications->city = $request->get('city');
$notifications->adress = $request->input('adress');
$notifications->phone = $request->input('phone');
$notifications->order = [$oldCart->name];
$notifications->price = $oldCart->totalPrice;
$notifications->save();



        $oldCart=null;
        $request->session()->put('cart', $oldCart);


        return redirect('/')->with('successthanks', 'Your order is sent successfully! THANK YOU!');


    }   

    public function delnot($not){

        Notifications::where('id', $not)->delete();
        return redirect('/')->with('successdelnot', '');

    }

    public function delprod($id){
        $idd=(int)$id;
        $products=Products::get()->all();

        foreach($products as $product){
        if($product['id']===$idd){

        
        $file_path = public_path().'\storage/images_resized/'.$product['cover_image'];
        unlink($file_path);
        $file_path = public_path().'\storage/images_resized/'.$product['image2'];
        unlink($file_path);
        $file_path = public_path().'\storage/images_resized/'.$product['image3'];
        unlink($file_path);
        $file_path = public_path().'\storage/images_resized/'.$product['image4'];
        unlink($file_path);
        $file_path = public_path().'\storage/images_resized/'.$product['image5'];
        unlink($file_path);
        }}
        
        Products::where('id', $id)->delete();
        return redirect('/')->with('successdelprod', 'Product deleted!');

    }

    public function editproduct(Request $request){

        $this->validate($request, [
            'title2'=>'required|max:25',
            'price2'=> 'required|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'category2'=>'required',
            'cover_image'=>'image|max:1999|unique:products',
            'image2'=>'image|max:1999|unique:products',
            'image3'=>'image|max:1999|unique:products',
            'image4'=>'image|max:1999|unique:products',
            'image5'=>'image|max:1999|unique:products',
            'description2'=>'required|max:500',
        ]);

        $id=$request->input('id');
        $products=Products::where('id', $id)->first();

        foreach($products as $product){

        if($request->hasfile('cover_image2')){

        $filenameWithExt = $request->file('cover_image2')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('cover_image2')->getClientOriginalExtension();
        $thumbStore = $filename.'_'.time().'.'.$extension;
        $thumb = Image::make($request->file('cover_image2')->getRealPath());
        $thumb->resize(400, 500);
        $thumb->save('storage/images_resized/'.$thumbStore);
        $products->cover_image = $thumbStore;
    }

    if($request->hasfile('image2')){

    $filenameWithExt2 = $request->file('image22')->getClientOriginalName();
    $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
    $extension2 = $request->file('image22')->getClientOriginalExtension();
    $thumbStore2 = $filename2.'_'.time().'.'.$extension2;
    $thumb2 = Image::make($request->file('image22')->getRealPath());
    $thumb2->resize(400, 500);
    $thumb2->save('storage/images_resized/'.$thumbStore2);
    $products->image2 = $thumbStore2;
}

    if($request->hasfile('image32')){

        $filenameWithExt3 = $request->file('image32')->getClientOriginalName();
        $filename3 = pathinfo($filenameWithExt3, PATHINFO_FILENAME);
        $extension3 = $request->file('image32')->getClientOriginalExtension();
        $thumbStore3 = $filename3.'_'.time().'.'.$extension3;
        $thumb3 = Image::make($request->file('image32')->getRealPath());
        $thumb3->resize(400, 500);
        $thumb3->save('storage/images_resized/'.$thumbStore3);
        $products->image3 = $thumbStore3;
    }

    if($request->hasfile('image4')){

        $filenameWithExt4 = $request->file('image42')->getClientOriginalName();
        $filename4 = pathinfo($filenameWithExt3, PATHINFO_FILENAME);
        $extension4 = $request->file('image42')->getClientOriginalExtension();
        $thumbStore4 = $filename4.'_'.time().'.'.$extension4;
        $thumb4 = Image::make($request->file('image42')->getRealPath());
        $thumb4->resize(400, 500);
        $thumb4->save('storage/images_resized/'.$thumbStore4);
        $products->image4 = $thumbStore4;
    }

    if($request->hasfile('image52')){

        $filenameWithExt5 = $request->file('image52')->getClientOriginalName();
        $filename5 = pathinfo($filenameWithExt5, PATHINFO_FILENAME);
        $extension5 = $request->file('image52')->getClientOriginalExtension();
        $thumbStore5 = $filename5.'_'.time().'.'.$extension5;
        $thumb5 = Image::make($request->file('image52')->getRealPath());
        $thumb5->resize(400, 500);
        $thumb5->save('storage/images_resized/'.$thumbStore5);
        $products->image5 = $thumbStore5;
    }



        
        $products->title = $request->input('title2');
        $products->price = $request->input('price2');
        $products->category = $request->get('category2');
        $products->description = $request->input('description2');

        $products->save();}


        return redirect('/')->with('successedit', $id);

    }

}
