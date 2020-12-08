
@extends('layouts.adminmaster')
@section('content')

  <div class="container-fluid">
	<a href="/bookings/create" class="btn btn-info" style="position: relative; float: right;">Add Booking</a>
	<h3>Bookings</h3>
	<div class="container">
	  <div id="calendar"></div>
	</div>
  </div>
@endsection
@section('content1')
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events : [
                @foreach($bookings as $booking)
                {
                    title : '{{ $booking->type }}'
                    start : '{{ $booking->date }}'
                },
                @endforeach
            ]
        })
    });
</script>
@endsection