@extends('layouts.admin')


@section('content')

<div id="pc" class="content-wrapper" style="background: url('site_images/background.jpg'); background-size: 100%;">
@foreach($products as $data)

<!-- Edit Product Modal -->

<div class="modal fade" id="edit{{$data['id']}}" tabindex="-1" data-backdrop="false" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" id="diadia">
    @if(\Session::has('successedit'))
    <div id="success-alert{{$data['id']}}" class="alert alert-success alert-block" style="background-color: green; text-align:center;  margin-bottom: 0px;"><strong>Changes saved!</strong></div>
    @endif
  <div id="mc" class="modal-content">
  <div class="modal-header">
    <li class="nav-item d-none d-sm-inline-block">EDIT PRODUCT: {{$data['title']}}</li>
  </div>
  
  <form id="formeditproduct" action="{{ action('ProductsController@editproduct') }}" method="POST" enctype="multipart/form-data">
  
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="id" value="{{$data['id']}}">
  <div class="modal-body">
    <div class="wrapper" id="pc">
  <div id="b1" class="container">
      <div id="inp" class="form-group">
        <label for="formGroupExampleInput">Title:</label>
        <input type="text"  class="form-control title_c" id="title" value="{{$data['title']}}" name="title2" placeholder="Title">
        @if ($errors->has('title2')) <p><small class="help-block" style= " color:red;">{{ $errors->first('title2') }}</small></p> @endif
      </div>
      <div id="inp" class="form-group">
        <label for="formGroupExampleInput2">Price:</label>
        <input type="text"  class="form-control price_c" id="price" value="{{$data['price']}}" name="price2" placeholder="Price">
        @if ($errors->has('price2')) <p><small class="help-block" style= " color:red;">{{ $errors->first('price2') }}</small></p> @endif
      </div>
      <div id ="roll" class="form-group">
        <label id="category" for="formGroupExampleInput3">Choose category:</label>
        <select name="category2" id="sc" >
          <option id="choose" value="{{$data['category']}}">{{$data['category']}}</option>
          @foreach($categories as $cat)
          <option value="{{$cat['name']}}">{{$cat['name']}}</option>
          @endforeach
        </select>
        @if ($errors->has('category2')) <p><small class="help-block" style= " color:red;">{{ $errors->first('category2') }}</small></p> @endif
      </div>
  </div>
  <div  id="b2" class="container">
    <div id="inp" class="form-group">
      <label id="ci" for="formGroupExampleInput3">Choose cover image:</label>
      <p><input type="file"  name="cover_image2" class="cover_image" id="cover_image" ></p>
       @if ($errors->has('cover_image2')) <p><small class="help-block" style= " color:red;">{{ $errors->first('cover_image2') }}</small></p> @endif
    </div>
    <div id="inp" class="form-group">
      <label id="ci" for="formGroupExampleInput3">Choose carousel 2nd slide image:</label>
      <p><input type="file" name="image22" class="image2" id="image2" ></p>
       @if ($errors->has('image22')) <p><small class="help-block" style= " color:red;">{{ $errors->first('image22') }}</small></p> @endif
    </div>
    <div id="inp" class="form-group">
      <label id="ci" for="formGroupExampleInput3">Choose carousel 3rd slide image:</label>
      <p><input type="file"  name="image32" class="image3" id="image3" ></p>
       @if ($errors->has('image32')) <p><small class="help-block" style= " color:red;">{{ $errors->first('image32') }}</small></p> @endif
    </div>
  <div id="inp" class="form-group">
    <label id="ci" for="formGroupExampleInput3">Choose carousel 4th slide image:</label>
    <p><input type="file"  name="image42" class="image4" id="image4" ></p>
     @if ($errors->has('image42')) <p><small class="help-block" style= " color:red;">{{ $errors->first('image42') }}</small></p> @endif
  </div>
<div id="inp" class="form-group">
  <label id="ci" for="formGroupExampleInput3">Choose carousel 5th slide image:</label>
  <p><input type="file"  name="image52" class="image51" id="image5" ></p>
   @if ($errors->has('image52')) <p><small class="help-block" style= " color:red;">{{ $errors->first('image52') }}</small></p> @endif
</div>
</div>
  <div  id="b3" class="container">
    <div id="inp" class="form-group">
      <label for="formGroupExampleInput">Description:</label>
      <textarea style="height:200px;" type="text" class="form-control description_c" id="description" name="description2" placeholder="Description">{{$data['description']}}</textarea>
      @if ($errors->has('description2')) <p><small class="help-block" style= " color:red;">{{ $errors->first('description2') }}</small></p> @endif
    </div>
  </div>
  </div>
  </div>
  <div class="modal-footer">
    <button type="submit" id="modalb1" class="btn btn-bbb">Save</button>
    <button type="button" id="modalb" class="btn btn-bbb2" data-dismiss="modal">Close</button>
  </div>
  </form>
  </div>
  </div>
  </div>

<!-- Product Card -->
  
<div class="container-fluid" id="cardc">
  @if(Auth::check())
      @if(auth()->user()->admin == true))
    <div class="btn-group" id="cbtng">
    <a id="cah "href="#edit{{$data['id']}}" data-toggle="modal">
        <span class="badge badge-warning">
            <i class="fas fa-paint-brush"></i>
        </span>
      </a>
    <a id="cah2" href="{{ route('product.Delprod', ['id'=>$data['id']]) }}">
        <span class="badge badge-danger">
            <i class="far fa-trash-alt"></i>
        </span>
      </a>
    </div>
    @endif
    @endif
<div class="card" id="cardw">
    <a href="#modal{{$data['id']}}" data-toggle="modal">
    <img class="card-img-top" id="cimage" src="storage/images_resized/{{$data['cover_image']}}">
    <div id="cardbody" class="card-body">
        <p class="card-text" id="ctext"><strong>{{$data['title']}}</strong></p>
        <span id="cspan" class="badge badge-success">{{$data['price']}} €</span>
    </div>
</a>
</div>
</div>

@endforeach
</div>

@endsection
