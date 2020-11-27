
@extends('layouts.adminmaster')
@section('content')

  <div class="container-fluid">
	<a href="/sales/create" class="btn btn-info" style="position: relative; float: right;">Add Sales</a>
	<h3>Sales</h3>
	<div class="container">
	  <div class="row justify-content-center" >
	  	@include('layouts.errors')
	  	<table class="table">
	  	  <thead>
	  	  	<tr>
	  	  	  <th>Product Number</th>
	  	  	  <th>Quantity</th>
	  	  	  <th>Sold To</th>
	  	  	  <th>Date</th>
	  	  	  <th>Action</th>
	  	  	</tr>
	  	  </thead>
	  	  <tbody>
	  	  	@foreach($sales as $sales)
	  	  	<tr>
	  	  	  <td>{{ $sales->product->id }}</td>
	  	  	  <td>{{ $sales->lquantity }}</td>
	  	  	  <td>{{ $sales->buyer_name }}</td>
	  	  	  <td>{{ $sales->sold_at }}</td>
	  	  	  <td>
	  	  	  	<div class="row">
	  	  	  	  <a href="/sales/{{ $sales->id }}/edit" class="btn btn-info">Edit</a>
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