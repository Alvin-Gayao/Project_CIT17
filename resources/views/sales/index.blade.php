
@extends('layouts.adminmaster')
@section('content')

  <div class="container-fluid">
  	<a href="/sales/create" class="btn btn-info" style="position: relative; float: right;">Add Sales</a>
	<h3>Sales</h3>
	<div class="container">
	  <div class="row justify-content-center" >
	  	<div class="col-xl-3 col-lg-3">
          <!---<h5>Products</h5><span class="small"> (Click product to sell)</span>
          <ol>
            @foreach($products as $product)
            <li>
              <a href="/sales/{{$product->id}}/create">{{ $product->name }}</a>
            </li>
            @endforeach
          </ol> -->
        </div>
        <div class="col-xl-9 col-lg-9">
	  	@include('layouts.errors')
	  	<table class="table">
	  	  <thead>
	  	  	<tr>
	  	  	  <th>Product Name</th>
	  	  	  <th>Quantity</th>
	  	  	  <th>Sold To</th>
	  	  	  <th>Date</th>
	  	  	  <th>Price/Item</th>
	  	  	  <th>Action</th>
	  	  	</tr>
	  	  </thead>
	  	  <tbody>
	  	  	@foreach($sales as $sales)
	  	  	<tr>
	  	  	  <td>{{ $sales->product->name }}</td>
	  	  	  <td>{{ $sales->quantity }}</td>
	  	  	  <td>{{ $sales->buyer_name }}</td>
	  	  	  <td>{{ $sales->sold_at }}</td>
	  	  	  <td>{{ $sales->product->price }}</td>
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
  </div>
@endsection