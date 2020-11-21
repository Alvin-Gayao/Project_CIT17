
@extends('layouts.adminmaster')
@section('content')

  <div class="container-fluid">
	<a href="/suppliers/create" class="btn btn-info" style="position: relative; float: right;">Add Supplier</a>
	<h3>Suppliers</h3>
	<div class="container">
	  <div class="row justify-content-center" >
	  	@include('layouts.errors')
	  	<table class="table">
	  	  <thead>
	  	  	<tr>
	  	  	  <th>Name</th>
	  	  	  <th>Contact</th>
	  	  	  <th>Action</th>
	  	  	</tr>
	  	  </thead>
	  	  <tbody>
	  	  	@foreach($suppliers as $supplier)
	  	  	<tr>
	  	  	  <td>{{ $supplier->name }}</td>
	  	  	  <td>{{ $supplier->contact }}</td>
	  	  	  <td>
	  	  	  	<div class="row">
	  	  	  	  <a href="/suppliers/{{ $supplier->id }}/edit" class="btn btn-info">Edit</a>
	  	  	  	  <form action="/suppliers/{{ $supplier->id }}" method="POST">
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