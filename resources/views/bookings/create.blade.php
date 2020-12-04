@extends('layouts.adminmaster')
@section('content')

	<div class="container-fluid">
		<h4>Add Bookings</h4>
	  <div class="container">
      <div class="row justify-content-center">
	  	  <form action="/bookings" method="POST">
           @include('layouts.errors')
	  		   @csrf
           <div class="form-group">
             <select type="number" name="event_id" class="form-control">
              @foreach($events as $event)
               <option value="{{ $event->id }}">{{ $event->type }}</option>
               @endforeach
             </select>
           </div>
           <div class="form-group">
             <select type="number" name="customer_id" class="form-control">
              @foreach($customers as $customer)
               <option value="{{ $customer->id }}">{{ $customer->first_name }} {{ $customer->last_name }}</option>
                @endforeach
             </select>
           </div>
           <div class="form-group">
             <input type="text" name="location" class="form-control" placeholder="Enter Location" autocomplete="off" required>
           </div>
           <div class="form-group">
             <input type="date" name="date" class="form-control" placeholder="Enter Date">
           </div>
           <div class="form-group">
             <button type="submit" class="btn btn-primary" name="save">Save</button>
           </div>
         </form>
       </div>     
	  </div>
	</div>

@endsection