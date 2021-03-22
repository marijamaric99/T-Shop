<!DOCTYPE html>
<html>
  <style>

    #navmain{
      background: url('site_images/sidebar.jpg'); background-size: 100%; 
      background-repeat: no-repeat;
    }

    #desccon{
      margin-top: 1vw; border-top: 0.2vw solid #DEDEDE;
    }

    #shopc{
      margin-bottom: 1vw; margin-top:3vw; background-color:rgba(54, 13, 30, 0.733);
      color: white;
    }

    #aside{
      overflow-y: auto;top: 0;bottom: 0;position: fixed; background: url('site_images/sidebar.jpg'); 
      background-size: fixed; background-repeat: no-repeat; font-size:1.3vw;
    }

    .btn.btn-bbb{
      background-color: rgba(8, 56, 16, 0.527);
      border-color:rgba(120, 177, 29, 0.233); 
      color:rgb(201, 182, 182);
      border-radius: 15px;
    }

    .btn.btn-bbb:hover{
      background-color: rgba(5, 43, 18, 0.699);
      border-color:rgba(206, 206, 61, 0.233);
      color:rgb(223, 164, 164);
    }

    .btn.btn-bbb:active{
      background-color: rgba(5, 43, 18, 0.699);
      border-color:rgba(206, 206, 61, 0.233);
      box-shadow: 0 5px #666;
      transform: translateY(4px);
      color:rgb(223, 164, 164);
    }

    .btn.btn-bbb2{
      background-color: rgba(78, 12, 28, 0.527);
      border-color:rgba(120, 177, 29, 0.233); 
      color:rgb(201, 182, 182);
      border-radius: 15px;
    }

    .btn.btn-bbb2:hover{
      background-color: rgba(31, 3, 3, 0.699);
      border-color:rgba(206, 206, 61, 0.233);
      color:rgb(223, 164, 164);
    }

    .btn.btn-bbb2:active{
      background-color: rgba(31, 3, 3, 0.699);
      border-color:rgba(206, 206, 61, 0.233);
      box-shadow: 0 5px #666;
      transform: translateY(4px);
      color:rgb(223, 164, 164);
    }

    .modal-backdrop {
      /* bug fix - no overlay */    
      display: none;    
    }
    
    .modal {
      background-color: rgba(0, 0, 0, 0.877); 
    }

    .modal-body {
      color:rgb(201, 182, 182);
      font-size:1.3vw
    }

    .modal-header {
      border-bottom: solid;
      color:rgb(201, 182, 182);
      font-weight: bolder;    
      height:5vw;
    }

    .modal-footer {
      color:rgb(201, 182, 182);
      height:5vw;
    }

    #mc{
      border-style: solid;
      border-width: 1vw;
      border-color:rgba(36, 33, 33, 0.753);
      background: url('site_images/sidebar.jpg'); 
      background-size: 100%; 
      background-repeat: no-repeat;
      width:88vw;
    }

    .nav-item{
      margin-left: 1vw;
      font-size: 1.3vw
    }

    #addproduct{
      margin-left: 40px;
      margin-bottom: 30px;
    }

    #sc{
      background: rgb(46, 44, 44);
      color: white;
      margin-left: 1vw;
    }

    #pc{
      max-width:100vw;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      overflow-x: hidden;
    }

    .alert-success{
      background-color: green; text-align:center;  margin-bottom: 0px;
    }

    #pc2{
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 0.1vw;
      overflow-x: hidden;

    }

    .carousel-indicators li{
      width: 130px !important;
    }
    .carousel-indicators{
      bottom: 0px !important;
    }

    #carousel-img{
      width:25vw; 
      height:28vw;
    }

    #cimg{
      width:4vw; 
      height:4vw;
    }
    #cbtng{
      float:right;
    }

    #cimage{
      width:100%; height:80%;
    }
    #ctext{
      color:white; font-size: 1.5vw; height:30%; width:100%;margin-top:0;margin-bottom:5%;
    }
    #cspan{
      float:right; font-size:1.2vw; display:inline-block; margin-top:0;margin-bottom:0;
    }

    #cardc{
      margin-top:2%; margin-left:10%; height:25vw; width:20vw; padding:0}

    #cardw{
      width: 100%; height:100%; border-width: 2px; border-color:rgb(6, 16, 46); display: inline-block;
    }

    #cardbody{
      background: url('site_images/card.jpg'); 
      background-size: 100%; 
      width: 100%;
      height: 20.3%;
      background-repeat: no-repeat;
      color:rgb(201, 182, 182);
      padding:2%;
      
    }

    #b1{
      float:left;
      border-right: 1px solid #DEDEDE;
    }

    #b2{
      float:left;
      border-right: 1px solid #DEDEDE;
    }
    
    #modalb{
      margin-top:0;
      font-size:1.5vw;
    }
    
    #choose{
      background-color: grey;
      color: black;
    }

    #sct{
      overflow-y: scroll;
      overflow-x: auto;
      height: 15rem;
    }

    #revbody{
    overflow-y: scroll;
    overflow-x: hidden;
    max-height: 350px;
    }

    #revdia{
      min-width:800px;
    }

    #diadia{
     min-width:90vw;
     font-size:1.5vw;
     height:45vw;
    }

    #revb{
      margin-bottom:-0.8rem;
    }

    #gr{
      margin-left:25rem; margin-top:-1.6rem
    }

    #lgi{
      background-color: rgba(255, 255, 255, 0.582); width:45rem
    }

    #ch{
      font-size: 30px; text-align:center
    }

    #rw{
      border: 2px solid #ccc;
      background-color: rgba(8, 3, 26, 0.774);
      border-radius: 5px;
      padding: 16px;
      margin: 16px 0
    }

    .container::after {
      content: "";
      clear: both;
      display: table;
    }

    .rating {
      float:left;
      border:none;
    }

    .rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0, 0, 0, 0);
}
.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
}
.rating:not(:checked) > label:before {
    content:'★ ';
}
.rating > input:checked ~ label {
    color: #f70;
}
.rating:not(:checked) > label:hover, .rating:not(:checked) > label:hover ~ label {
    color: gold;
}
.rating > input:checked + label:hover, .rating > input:checked + label:hover ~ label, .rating > input:checked ~ label:hover, .rating > input:checked ~ label:hover ~ label, .rating > label:hover ~ input:checked ~ label {
    color: #ea0;
}
.rating > label:active {
    position:relative;
}

  </style>
  <div id="grayout" style="display: none;"></div>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>T-Shop</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-relative">

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-black navbar-dark" id="navmain">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" data-toggle="modal" data-target="#contactModal" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('product.about')}}" class="nav-link">About</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <form class="form-inline ml-3" action="{{ action('HomeController@search') }}">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" name="search" type="text" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      @if(Auth::check())
      @if(auth()->user()->admin == true))
      <a class="nav-link" data-toggle="modal" data-target="#notificationModal" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">{{$count}}</span>
      </a>
      @endif

      <li class="nav-item">
        <a href="{{ url('/logout') }}" class="nav-link"><i class="fas fa-sign-out-alt"></i></i>Logout</a>
      </li>
      @else
      <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Prijava</a></li>
      <li class="nav-item"><a  class="nav-link" href="{{ url('/register') }}">Registracija</a></li>
      @endif
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Add Category Modal -->

<div class="modal fade" id="categoryModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div id="mc" class="modal-content">
      @if(\Session::has('success4'))
  <div id="success-alert" class="alert alert-success alert-block"><strong>{{\Session::get('success4')}}</strong></div>
      @endif
      <div class="modal-header">
          <li class="nav-item d-none d-sm-inline-block">CREATE NEW CATEGORY</li>
      </div>
      <form id="formaddcategory" action="{{ action('CategoriesController@addcategory') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="modal-body">
        <label for="formGroupExampleInput">Name:</label>
        <input type="text"  class="form-control name_c" id="name" name="name" placeholder="Category Name">
        @if ($errors->has('name')) <p><small class="help-block" style= " color:red;">{{ $errors->first('name') }}</small></p> @endif
      </div>
      <div class="modal-footer">
        <button type="submit" id="modalb" class="btn btn-bbb">Create category</button>
        <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">Close</button>
      </div> 
      </form>
      </div>
    </div>
  </div>

<!-- Shipping Modal -->

<div class="modal fade" id="checkoutModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div id="mc" class="modal-content">
      <div class="modal-header">
          <li class="nav-item d-none d-sm-inline-block">DELIVERY INFORMATION</li>
      </div>
      <form id="formaddtype" action="{{ action('ProductsController@buy') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="modal-body">
        <label for="formGroupExampleInput">Full name:</label>
        <input type="text"  class="form-control type_c" id="full_name" name="full_name" placeholder="Full name">
        @if ($errors->has('full_name')) <p><small class="help-block" style= " color:red;">{{ $errors->first('full_name') }}</small></p> @endif
        <label for="formGroupExampleInput">Country:</label>
        <input type="text"  class="form-control type_c" id="country" name="country" placeholder="Country">
        @if ($errors->has('country')) <p><small class="help-block" style= " color:red;">{{ $errors->first('country') }}</small></p> @endif
        <label for="formGroupExampleInput">City:</label>
        <input type="text"  class="form-control type_c" id="city" name="city" placeholder="City">
        @if ($errors->has('city')) <p><small class="help-block" style= " color:red;">{{ $errors->first('city') }}</small></p> @endif
        <label for="formGroupExampleInput">Adress:</label>
        <input type="text"  class="form-control type_c" id="adress" name="adress" placeholder="Adress">
        @if ($errors->has('adress')) <p><small class="help-block" style= " color:red;">{{ $errors->first('adress') }}</small></p> @endif
        <label for="formGroupExampleInput">Phone number:</label>
        <input type="text"  class="form-control type_c" id="phone" name="phone" placeholder="Phone number">
        @if ($errors->has('phone')) <p><small class="help-block" style= " color:red;">{{ $errors->first('phone') }}</small></p> @endif
      </div>
      <!-- Confirm Modal -->

<div class="modal fade" id="confirmModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.582);">
  <div class="modal-dialog modal-dialog-centered">
    <div id="mc" class="modal-content">
      <div class="modal-header">
        <li class="nav-item d-none d-sm-inline-block">CONFIRM</li>
    </div>
      <div class="modal-body"  style="text-align:center;">
        <li class="nav-item d-none d-sm-inline-block" style="font-size:30px"><strong>Are you sure?</strong></li>
      </div>
      <div class="modal-footer">
        <button type="submit" id="modalb" class="btn btn-bbb">Confirm</button>
        <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
  </div>
      <div class="modal-footer">
        <button type="button" id="modalb" data-toggle="modal" data-target="#confirmModal" class="btn btn-bbb">Buy</button>
        <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">Close</button>
      </div>
  </div>
  </div>
</div>

<!-- Contact Modal -->

<div class="modal fade" id="contactModal" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div id="mc" class="modal-content">
    <div class="modal-header">
      <li class="nav-item d-none d-sm-inline-block">CONTACT</li>
    </div>
    <div class="modal-body">
      <li class="nav-item d-none d-sm-inline-block"><strong>You can contact us at: contact@gmail.com</strong></li>
    </div>
    <div class="modal-footer">
      <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<!-- Thank you Modal -->

<div class="modal fade" id="thankyouModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div id="ty" class="modal-content" style="background-color: green">
      <div id="success-alert" class="alert alert-success alert-block" style=" text-align:center;  font-size:50px; margin-bottom: 0px;"><strong>Your order was sent successfully! <p>THANK YOU!</p></strong></div>
    </div>
  </div>
  </div>

<!-- About Modal -->

<div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div id="mc" class="modal-content">
      <div class="modal-header">
        <li class="nav-item d-none d-sm-inline-block">ABOUT US</li>
      </div>
      <div class="modal-body">
        <li class="nav-item d-none d-sm-inline-block"><strong>Here you can find information about us.</strong></li>
      </div>
      <div class="modal-footer">
        <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </div>

  <!-- Info Modal -->

<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div id="mc" class="modal-content">
      <div class="modal-header">
        <li class="nav-item d-none d-sm-inline-block">SHIPPING POLICY</li>
      </div>
      <div class="modal-body">
        <li class="nav-item d-none d-sm-inline-block"><li>Shipping information 1</li><li>Shipping information 2</li><li>Shipping information 3</li></li>
      </div>
      <div class="modal-footer">
        <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </div>


  <!-- Notifications Modal -->

<div class="modal fade" id="notificationModal" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" id="revdia">
    <div id="mc" class="modal-content">
      <div class="modal-header">
        <li class="nav-item d-none d-sm-inline-block">NEW ORDERS</li>
      </div>
      <div class="modal-body" stlye="overflow-y: auto; ">
        @foreach($notifications as $notification)
        <div class="container" id="rw">
          <a href="{{ route('product.Delnot', ['not'=>$notification['id']]) }}" style="margin-left: 43rem; margin-top:-1rem; margin-bottom:0rem">
            <span class="badge badge-danger">
           X
            </span>
          </a>
          <p style=" margin-left:13px; margin-top:-2rem; font-size:24px">Total price: {{$notification['price']}}€</p>
          <p style="white-space: pre-line; word-wrap: break-word;">{{$notification['full_name']}}, {{$notification['country']}}, {{$notification['city']}}, {{$notification['adress']}}, {{$notification['phone']}}</p>
          @foreach($notification['order']['0'] as $data)
          <p style="white-space: pre-line; word-wrap: break-word;">{{$data}}</p>
          @endforeach
        </div>
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button"id="modalb" class="btn btn-bbb2" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  </div>
  

<!-- Add Product Modal -->

<div class="modal fade" id="myModal" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" id="diadia">
<div id="mc" class="modal-content">
@if(\Session::has('success'))
<div id="success-alert" class="alert alert-success alert-block" style="background-color: green; text-align:center;  margin-bottom: 0px;"><strong>{{\Session::get('success')}}</strong></div>
@endif
<div class="modal-header">
  <li class="nav-item d-none d-sm-inline-block">ADD NEW PRODUCT</li>
</div>

<form id="formaddproduct" action="{{ action('ProductsController@addproduct') }}" method="POST" enctype="multipart/form-data">

<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="modal-body">
  <div class="wrapper" id="pc">
<div id="b1" class="container">
    <div id="inp" class="form-group">
      <label for="formGroupExampleInput">Title:</label>
      <input type="text"  class="form-control title_c" id="title" name="title" placeholder="Title">
      @if ($errors->has('title')) <p><small class="help-block" style= " color:red;">{{ $errors->first('title') }}</small></p> @endif
    </div>
    <div id="inp" class="form-group">
      <label for="formGroupExampleInput2">Price:</label>
      <input type="text"  class="form-control price_c" id="price" name="price" placeholder="Price">
      @if ($errors->has('price')) <p><small class="help-block" style= " color:red;">{{ $errors->first('price') }}</small></p> @endif
    </div>
    <div id ="roll" class="form-group">
      <label id="category" for="formGroupExampleInput3">Choose category:</label>
      <select name="category" id="sc" >
        <option id="choose" value="">Choose category</option>
        @foreach($categories as $cat)
        <option value="{{$cat['name']}}">{{$cat['name']}}</option>
        @endforeach
      </select>
      @if ($errors->has('category')) <p><small class="help-block" style= " color:red;">{{ $errors->first('category') }}</small></p> @endif
    </div>
</div>
<div  id="b2" class="container">
  <div id="inp" class="form-group">
    <label id="ci" for="formGroupExampleInput3">Choose cover image:</label>
    <p><input type="file"  name="cover_image" class="cover_image" id="cover_image" ></p>
     @if ($errors->has('cover_image')) <p><small class="help-block" style= " color:red;">{{ $errors->first('cover_image') }}</small></p> @endif
  </div>
  <div id="inp" class="form-group">
    <label id="ci" for="formGroupExampleInput3">Choose carousel 2nd slide image:</label>
    <p><input type="file" name="image2" class="image2" id="image2" ></p>
     @if ($errors->has('image2')) <p><small class="help-block" style= " color:red;">{{ $errors->first('image2') }}</small></p> @endif
  </div>
  <div id="inp" class="form-group">
    <label id="ci" for="formGroupExampleInput3">Choose carousel 3rd slide image:</label>
    <p><input type="file"  name="image3" class="image3" id="image3" ></p>
     @if ($errors->has('image3')) <p><small class="help-block" style= " color:red;">{{ $errors->first('image3') }}</small></p> @endif
  </div>
  <div id="inp" class="form-group">
    <label id="ci" for="formGroupExampleInput3">Choose carousel 4th slide image:</label>
    <p><input type="file"  name="image4" class="image4" id="image4" ></p>
     @if ($errors->has('image4')) <p><small class="help-block" style= " color:red;">{{ $errors->first('image4') }}</small></p> @endif
  </div>
  <div id="inp" class="form-group">
    <label id="ci" for="formGroupExampleInput3">Choose carousel 5th slide image:</label>
    <p><input type="file"  name="image5" class="image5" id="image5" ></p>
     @if ($errors->has('image5')) <p><small class="help-block" style= " color:red;">{{ $errors->first('image5') }}</small></p> @endif
  </div>
</div>
<div  id="b3" class="container">
  <div id="inp" class="form-group">
    <label for="formGroupExampleInput">Description:</label>
    <textarea style="height:200px;" type="text" class="form-control description_c" id="description" name="description" placeholder="Description"></textarea>
    @if ($errors->has('description')) <p><small class="help-block" style= " color:red;">{{ $errors->first('description') }}</small></p> @endif
  </div>
</div>
</div>
</div>
<div class="modal-footer">
  <button type="submit" id="modalb" class="btn btn-bbb">Add product</button>
  <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">Close</button>
</div>
</form>
</div>
</div>
</div>

<!-- View Product Modal -->

@foreach($products as $data)

<div class="modal fade" id="modal{{$data['id']}}" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" id="diadia">
      <div id="mc" class="modal-content">
        @if(\Session::has('success2'))
        @if(\Session::get('success2')==$data['id'])
        <div id="success-alert{{$data['id']}}" class="alert alert-success alert-block" style="background-color: green; text-align:center;  margin-bottom: 0px;"><strong>{{$data['title']}} added to cart!</strong></div>
        @endif
        @endif
        <div class="modal-header">
          <li class="nav-item d-none d-sm-inline-block">{{$data['title']}}<li>
        </div>
  
      <form id="formaddtocart" action="{{route('product.addToCart', ['id'=>$data->id, request()->get('color'), request()->get('size'), request()->get('type')])}}" enctype="multipart/form-data">
  
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="modal-body">
          <div class="wrapper" id="pc2">
            <div id="b1" class="container">
          <div id="carousel-thumb{{$data['id']}}" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel" style="margin-bottom:20px">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img id="carousel-img" class="d-block w-100" src="storage/images_resized/{{$data['cover_image']}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img id="carousel-img" class="d-block w-100" src="storage/images_resized/{{$data['image2']}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img id="carousel-img" class="d-block w-100" src="storage/images_resized/{{$data['image3']}}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img id="carousel-img" class="d-block w-100" src="storage/images_resized/{{$data['image4']}}" alt="Fourth slide">
              </div>
              <div class="carousel-item">
                <img id="carousel-img" class="d-block w-100" src="storage/images_resized/{{$data['image5']}}" alt="Fifth slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev" onclick="$('#carousel-thumb{{$data['id']}}').carousel('prev')">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next" onclick="$('#carousel-thumb{{$data['id']}}').carousel('next')">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <ol class="carousel-indicators">
              <li data-target="#carousel-thumb" onclick="$('#carousel-thumb{{$data['id']}}').carousel(0)" data-slide-to="0" class="active"> <img id="cimg" class="d-block w-100" src="storage/images_resized/{{$data['cover_image']}}"
              class="img-fluid"></li>
              <li data-target="#carousel-thumb" onclick="$('#carousel-thumb{{$data['id']}}').carousel(1)" data-slide-to="1"><img id="cimg" class="d-block w-100" src="storage/images_resized/{{$data['image2']}}"
              class="img-fluid"></li>
              <li data-target="#carousel-thumb" onclick="$('#carousel-thumb{{$data['id']}}').carousel(2)" data-slide-to="2"><img id="cimg" class="d-block w-100" src="storage/images_resized/{{$data['image3']}}"
              class="img-fluid"></li>
              <li data-target="#carousel-thumb" onclick="$('#carousel-thumb{{$data['id']}}').carousel(3)" data-slide-to="3"><img id="cimg" class="d-block w-100" src="storage/images_resized/{{$data['image4']}}"
                class="img-fluid"></li>
                <li data-target="#carousel-thumb" onclick="$('#carousel-thumb{{$data['id']}}').carousel(4)" data-slide-to="4"><img id="cimg" class="d-block w-100" src="storage/images_resized/{{$data['image5']}}"
                  class="img-fluid"></li>
            </ol>
          </div>
          </div>
          <div id="b3" class="container">
            <div id ="roll" class="form-group">
              <label id="color" for="formGroupExampleInput3">Choose color:</label>
              <select name="color" id="sc" >
                <option id="choose" value="">Choose color</option>
                <option style="color:black"  value="black">Black</option>
                <option style="color:white" value="white">White</option>
                <option style="color:grey" value="grey">Grey</option>
                <option style="color:red" value="red">Red</option>
                <option style="color:yellow" value="yellow">Yellow</option>
                <option style="color:green" value="green">Green</option>
                <option style="color:purple" value="purple">Purple</option>
                <option style="color:pink" value="pink">Pink</option>
                <option style="color:blue" value="blue">Blue</option>               
              </select>
              @if ($errors->has('color')) <p><small class="help-block" style= " color:red;">{{ $errors->first('color') }}</small></p> @endif
            </div>
            <div id ="roll" class="form-group">
              <label id="size" for="formGroupExampleInput3">Choose size:</label>
              <select name="size" id="sc" >
                <option id="choose" value="">Choose size</option>
                <option  value="XS">XS</option>
                <option  value="S">S</option>
                <option  value="M">M</option>
                <option  value="L">L</option>
                <option  value="XL">XL</option>
                <option  value="XXL">XXl</option>
                <option  value="3XL">3XL</option>
              </select>
              @if ($errors->has('size')) <p><small class="help-block" style= " color:red;">{{ $errors->first('size') }}</small></p> @endif
            </div>
            <div id ="roll" class="form-group">
              <label id="type" for="formGroupExampleInput3">Choose type:</label>
              <select name="type" id="sc" >
                <option id="choose" value="">Choose type</option>
                <option  value="T-shirt">T-Shirt</option>
                <option  value="Hoodie">Hoodie</option>
              </select>
              @if ($errors->has('type')) <p><small class="help-block" style= " color:red;">{{ $errors->first('type') }}</small></p> @endif
            </div>
            <div type="text" class="continer" id="desccon">
                <p style="white-space: pre-line; word-wrap: break-word;">{{$data['description']}}</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" id="modalb" class="btn btn-bbb"><i class="fas fa-cart-plus"></i> Add to cart</button>
          <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endforeach

  <!-- Main Sidebar Container -->
  <aside id="aside" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link" style="font-size: 2vw">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">T-Shop</span>
    </a>   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        @if ($errors->has('title2')) <p><small class="help-block" style= " color:red;">{{ $errors->first('title2') }}</small></p> @endif
@if ($errors->has('price2')) <p><small class="help-block" style= " color:red;">{{ $errors->first('price2') }}</small></p> @endif
@if ($errors->has('category2')) <p><small class="help-block" style= " color:red;">{{ $errors->first('category2') }}</small></p> @endif
@if ($errors->has('cover_image2')) <p><small class="help-block" style= " color:red;">{{ $errors->first('cover_image2') }}</small></p> @endif
@if ($errors->has('image22')) <p><small class="help-block" style= " color:red;">{{ $errors->first('image22') }}</small></p> @endif
@if ($errors->has('image32')) <p><small class="help-block" style= " color:red;">{{ $errors->first('image32') }}</small></p> @endif
@if ($errors->has('image42')) <p><small class="help-block" style= " color:red;">{{ $errors->first('image42') }}</small></p> @endif
@if ($errors->has('image52')) <p><small class="help-block" style= " color:red;">{{ $errors->first('image52') }}</small></p> @endif
@if ($errors->has('description2')) <p><small class="help-block" style= " color:red;">{{ $errors->first('description2') }}</small></p> @endif
      @if(\Session::has('successdelprod'))
        <div id="success-alert" class="alert alert-success alert-block" style="background-color: green; text-align:center;  margin-bottom: 0px;"><strong>{{\Session::get('successdelprod')}}</strong></div>
      @endif
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @if(Auth::check())
            @if(auth()->user()->admin == true))
            <li class="nav-item d-none d-sm-inline-block">
              <button id="addproduct" type="button" class="btn btn-bbb" data-toggle="modal" data-target="#myModal" >
                <i class="fas fa-plus"></i> Add Protuct</button>
                <li class="nav-item">
                  <a href="#" data-toggle="modal" data-target="#categoryModal" class="nav-link">
                    <i class="fas fa-plus nav-icon"></i>
                    <p style="color:rgb(74, 172, 61)">Add category</p>
                  </a>
                </li>
                @endif
                @endif
                <li class="nav-item">
                  <a href="{{route('product.shoppingCart')}}" id="shopc" class="nav-link">
                    <i class="fas fa-shopping-cart nav-icon"></i>
                    <p> My Shopping Cart <span class="badge badge-info">{{Session::has('cart') ? Session::get('cart')->totalQty: ''}}</span> </p>
                  </a>
                </li>
                <a class="nav-item" style="margin-bottom: 1vw; color:white; border-bottom:1px white solid" href="#infoModal" data-toggle="modal"><i class="fas fa-info-circle"></i> Shipping policy</a>
                <div class="container" id="filterc" style="border:white solid 0.2vw; background-color:rgba(255, 255, 255, 0.671);">
                  <div class="container-header" style="border-bottom:white 1px solid;">
                    <strong>FILTER</strong>
                  </div>
                  <form id="formfilter" action="{{action('HomeController@filter')}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="container-body">
                  <p><select name="category" id="sc" style="margin-top:1vw"></p>
                    <option id="choose" value="1">Choose category:</option>
                    @foreach($categories as $cat)
                    <option value="{{$cat['name']}}">{{$cat['name']}}</option>
                    @endforeach
                  </select>
                  <p><select name="sort" id="sc" ></p>
                    <option id="choose" value="">Sort by:</option>
                    <option value="date">Date</option> 
                    <option value="price">Price</option> 
                    <option value="popularity">Popularity</option> 
                  </select>
                  <div class="container-footer" style="border-top:white 0.2vw solid">
                    <button type="submit" id="modalb" class="btn btn-success" style="float:right; height: 2.5vw; padding:0.2vw; text-align:center">Filter</button>
                  </div>
                </form>
              </div>
      
       </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  <!-- Content Wrapper. Contains page content -->
    @yield('content')
<!-- ./wrapper -->



<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
</body>

@if (count($errors) > 0)
@if ($errors->has('name'))
    <script>
        $( document ).ready(function() {
            $('#categoryModal').modal('show');
        });
    </script>
    @elseif ($errors->has('size') || $errors->has('color') || $errors->has('type'))
    <script>
        $( document ).ready(function() {
            $('#modal{{$data['id']}}').modal('show');
        });
    </script>
    @elseif($errors->has('full_name') || $errors->has('country') || $errors->has('city') || $errors->has('adress') || $errors->has('phone'))
    <script>
        $( document ).ready(function() {
            $('#checkoutModal').modal('show');
        });
    </script>
    @elseif($errors->has('title') || $errors->has('category') || $errors->has('price') || $errors->has('cover_image') || $errors->has('image2') || $errors->has('image3') || $errors->has('image4') || $errors->has('image5') || $errors->has('description'))
    <script>
        $( document ).ready(function() {
            $('#myModal').modal('show');
        });
    </script>
@endif
@endif

@if(\Session::has('success'))
<script>
  $( document ).ready(function() {
      $('#myModal').modal('show');
      $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
      $("#success-alert").slideUp(500);
});
  });
</script>
@endif
@if(\Session::has('success2'))
<script>
  $( document ).ready(function() {
    $('#modal{{\Session::get('success2')}}').modal('show');
    $('#success-alert{{\Session::get('success2')}}').fadeTo(2000, 500).slideUp(500, function(){
    $('#success-alert{{\Session::get('success2')}}').slideUp(500);
});
  });
</script>

@elseif(\Session::has('success4'))
<script>
  $( document ).ready(function() {
      $('#categoryModal').modal('show');
      $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
      $("#success-alert").slideUp(500);
});
  });
</script>

@elseif(\Session::has('successthanks'))
<script>
  $( document ).ready(function() {
      $('#thankyouModal').modal('show');
  });
</script>

@elseif(\Session::has('successdelnot'))
<script>
  $( document ).ready(function() {
      $('#notificationModal').modal('show');
  });
</script>

@elseif(\Session::has('successdelprod'))
<script>
  $( document ).ready(function() {
      $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
      $("#success-alert").slideUp(500);
});
  });
</script>
@elseif(\Session::has('successedit'))
<script>
  $( document ).ready(function() {
    $('#edit{{\Session::get('successedit')}}').modal('show');
    $('#success-alert{{\Session::get('successedit')}}').fadeTo(2000, 500).slideUp(500, function(){
    $('#success-alert{{\Session::get('successedit')}}').slideUp(500);
});
  });
</script>
@endif

</html>
