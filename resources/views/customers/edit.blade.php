@extends('layouts.adminmaster')
@section('content')

	<div class="container-fluid">
		<h4>Edit Customer</h4>
	  <div class="container">
      <div class="row justify-content-center">
	  	  <form action="/customers/{{ $customer->id }}" method="POST">
          @include('layouts.errors')
          @method('PUT')
	  		  @csrf
          <div class="form-group">
            <input type="text" name="first_name" class="form-control" value="{{ $customer->first_name }}" autocomplete="off" >
          </div>
          <div class="form-group">
            <input type="text" name="last_name" class="form-control" value="{{ $customer->last_name }}" autocomplete="off" >
          </div>
          <div class="form-group">
            <input type="text" name="contact_number" class="form-control" value="{{ $customer->contact_number }}" autocomplete="off" >
          </div>
          <div class="form-group">
            <input type="text" name="address" class="form-control" value="{{ $customer->address }}" autocomplete="off" >
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Save</button>
          </div>
        </form>
      </div>     
	  </div>
	</div>

@endsection