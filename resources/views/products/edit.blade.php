@extends('layouts.adminmaster')
@section('content')

	<div class="container-fluid">
		<h4>Add Productsr</h4>
	  <div class="container">
      <div class="row justify-content-center">
	  	  <form action="/products/{{ $product->id }}" method="POST">
          @method('PUT')
	  		  @csrf
          <div class="form-group">
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" autocomplete="off" required>
          </div>
          <div class="form-group">
            <input type="text" name="description" class="form-control" value="{{ $products->description }}" autocomplete="off" required>
          </div>
          <div class="form-group">
            <input type="number" name="price" class="form-control" value="{{ $products->price }}" autocomplete="off" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Save</button>
          </div>
        </form>
      </div>     
	  </div>
	</div>

@endsection