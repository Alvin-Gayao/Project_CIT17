@extends('layouts.adminmaster')
@section('content')

	<div class="container-fluid">
		<h4>Add Item Sold</h4>
	  <div class="container">
      <div class="row justify-content-center">
	  	  <form action="/items_sold" method="POST">
	  		   @csrf
           <div class="form-group">
             <input type="text" name="name" class="form-control" placeholder="Enter Item Name">
           </div>
           <div class="form-group">
             <input type="number" name="productID" class="form-control" placeholder="Enter Product ID">
           </div>
           <div class="form-group">
             <button type="submit" class="btn btn-primary" name="save">Save</button>
           </div>
         </form>
       </div>     
	  </div>
	</div>

@endsection