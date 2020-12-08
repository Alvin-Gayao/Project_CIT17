@extends('layouts.adminmaster')
@section('content')

  <div class="container-fluid">
	<a href="/suppliers/create" class="btn btn-info" style="position: relative; float: right;">Add Item Sold</a>
	<h3>Items Sold</h3>
	<div class="container">
	  <div class="row justify-content-center" >
	  	<table class="table">
	  	  <thead>
	  	  	<tr>
	  	  	  <th>Name</th>
	  	  	  <th>Contact</th>
	  	  	  <th>Action</th>
	  	  	</tr>
	  	  </thead>
	  	  <tbody>
	  	  	@foreach($itemsold as $itemsold)
	  	  	<tr>
	  	  	  <td>{{ $itemsold->name }}</td>
	  	  	  <td>{{ $itemsold->contact }}</td>
	  	  	  <td>
	  	  	  	<div class="row">
	  	  	  	  <a href="/ItemsSold/{{ $itemsold->id }}/edit" class="btn btn-info">Edit</a>
	  	  	  	  <form action="/ItemsSold/{{ $itemsold->id }}" method="POST">
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