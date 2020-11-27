@extends('layouts.adminmaster')
@section('content')

	<div class="container-fluid">
		<h4>Edit Sales</h4>
	  <div class="container">
      <div class="row justify-content-center">
	  	  <form action="/sales/{{ $sales->id }}" method="POST">
          @include('layouts.errors')
          @method('PUT')
	  		  @csrf
          <div class="form-group">
            <input type="number" name="product_id" class="form-control" value="{{ $sales->product->id }}" autocomplete="off" >
          </div>
          <div class="form-group">
            <input type="number" name="quantity" class="form-control" value="{{ $sales->quantity }}" autocomplete="off" >
          </div>
          <div class="form-group">
            <input type="text" name="buyer_name" class="form-control" value="{{ $sales->buyer_name }}" autocomplete="off" >
          </div>
          <div class="form-group">
            <input type="date" name="sold_at" class="form-control" value="{{ $sales->sold_at }}" autocomplete="off" >
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Save</button>
          </div>
        </form>
      </div>     
	  </div>
	</div>

@endsection