
@extends('layouts.adminmaster')
@section('content')

  <div class="container-fluid">
	<a href="/customers/create" class="btn btn-info" style="position: relative; float: right;">Add Customer</a>
	<h3>Customers</h3>
	<div class="container">
	  <div class="row justify-content-center" >
	  	@include('layouts.errors')
	  	<table class="table">
	  	  <thead>
	  	  	<tr>
	  	  	  <th>First Name</th>
	  	  	  <th>Last Name</th>
	  	  	  <th>Contact Number</th>
	  	  	  <th>Address</th>
	  	  	  <th>Action</th>
	  	  	</tr>
	  	  </thead>
	  	  <tbody>
	  	  	@foreach($customers as $customer)
	  	  	<tr>
	  	  	  <td>{{ $customer->first_name }}</td>
	  	  	  <td>{{ $customer->last_name }}</td>
	  	  	  <td>{{ $customer->contact_number }}</td>
	  	  	  <td>{{ $customer->address }}</td>
	  	  	  <td>
	  	  	  	<div class="row">
	  	  	  	  <a href="/customers/{{ $customer->id }}/edit" class="btn btn-info">Edit</a>
	  	  	  	  <form action="/customers/{{ $customer->id }}" method="POST">
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