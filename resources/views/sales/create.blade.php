@extends('layouts.adminmaster')
@section('content')

	<div class="container-fluid">
		<h4>Add Sales</h4>
	  <div class="container">
      <div class="row justify-content-center">
        
	  	  <form action="/sales" method="POST">
           @include('layouts.errors')
	  		   @csrf
           <div class="form-group">
             <input type="number" name="product_id" class="form-control" placeholder="Enter Product Number" autocomplete="off" required>
           </div>
           <div class="form-group">
             <input type="number" name="quantity" class="form-control" placeholder="Enter quantity" autocomplete="off" required>
           </div>
           <div class="form-group">
             <input type="text" name="buyer_name" class="form-control" placeholder="Sold to" autocomplete="off" required>
           </div>
           <div class="form-group">
             <input type="date" name="sold_at" class="form-control" required>
           </div>
           <div class="form-group">
             <button type="submit" class="btn btn-primary" name="save">Save</button>
           </div>
         </form>
       </div> 

	  </div>
	</div>

@endsection