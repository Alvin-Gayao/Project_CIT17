@extends('layouts.adminmaster')
@section('content')

  <div class="container-fluid">
	<a href="/items_sold/create" class="btn btn-info" style="position: relative; float: right;">Add Item Sold</a>
	<h3>Items Sold</h3>
	<div class="container">
	  <div class="row justify-content-center" >
	  	<table class="table">
	  	  <thead>
	  	  	<tr>
	  	  	  <th>Item Name</th>
	  	  	  <th>Product ID</th>
	  	  	  <th>Action</th>
	  	  	</tr>
	  	  </thead>
	  	  <tbody>
	  	  	@foreach($items_sold as $item_sold)
	  	  	<tr>
	  	  	  <td>{{ $item_sold->name }}</td>
	  	  	  <td>{{ $item_sold->productID }}</td>
	  	  	  <td>
	  	  	  	<div class="row">
	  	  	  	  <a href="/items_sold/{{ $items_sold->id }}/edit" class="btn btn-info">Edit</a>
	  	  	  	  <form action="/items_sold/{{ $items_sold->id }}" method="POST">
	  	  	  	  	@csrf
	  	  	  	  	@method('DELETE')
				    <button class="btn btn-danger" type="submit">Delete</button>
				  </form>
				</div>
	  	  	  </td>		
	  	  	</tr>
	  	  	@endforeach
	  	  </tbody>
	  	</table>
	  </div>
	</div>
  </div>
@endsection