@extends('layouts.adminmaster')
@section('content')

	<div class="container-fluid">
		<h4>Add Productsr</h4>
	  <div class="container">
      <div class="row justify-content-center">
	  	  <form action="/products/{{ $products->id }}" method="POST">
          @method('PUT')
	  		  @csrf
          <div class="form-group">
            <input type="text" name="itemName" class="form-control" value="{{ $products->itemName }}" placeholder="Enter Item Name">
          </div>
          <div class="form-group">
            <input type="text" name="itemDescription" class="form-control" value="{{ $products->itemDescription }}" placeholder="Enter Item Description">
                      <div class="form-group">
            <input type="number" name="price" class="form-control" value="{{ $products->price }}" placeholder="Enter Price">
          </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Save</button>
          </div>
        </form>
      </div>     
	  </div>
	</div>

@endsection