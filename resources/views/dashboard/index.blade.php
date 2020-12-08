
@extends('layouts.adminmaster')

@section('style')
<style>
    #calendar-container{
      padding: 0;
      width: 100%;
      height: 100%;
      text-align: center;
      border: 0;
      border-radius: 10px;
      font-size: 25px;
      font-family: sans-serif;
      color: #000;
      background-image:  linear-gradient(white,#3d3d3d); 
    }
    #calendar-container>div{
      padding: 0;
      margin-bottom: 5px;
      margin-left: 25%;
    }
    #calendar-month-year{
      margin-left: -30%;
    }
    #calendar-dates>table>tr>td{
      padding: 5px;
      margin-left: 30px;
    }
  </style>
@endsection

@section('content')
	<!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Activity Log</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
        <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks (mm/dd/yyyy)</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Deliveries</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Deliveries</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        

<!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-7 col-lg-8">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="../projectsms/calendar/calendar.php" style="text-decoration: none"><h6 class="m-0 font-weight-bold text-primary">Calendar</h6></a>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">To Do Lists:</div>
                      <a class="dropdown-item" href="#">Due Dates</a>
                      <a class="dropdown-item" href="#">Events</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Meetings</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <div id="calendar-container">
                      <div id="calendar-header">
                        <span id="calendar-month-year"></span>
                      </div>
                      <div id="calendar-dates">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Reminder Chart -->
            <div class="col-xl-5 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Reminders</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Recent</a>
                      <a class="dropdown-item" href="#">Next Month</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Prev Month</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection

@section('calendar')
	<script>
      window.onload = function(){
        var d = new Date();
        var month_name = ['January','February','March','April','May','June','July','August','September','October','November','December'];
        var month = d.getMonth();
        var year = d.getFullYear();
        var first_date = month_name[month] + " " +1+ " " + year;
        var tmp = new Date(first_date).toDateString();
        var first_day = tmp.substring(0, 3);
        var day_name = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
        var day_no = day_name.indexOf(first_day);
        var days = new Date(year, month+1, 0).getDate();
        var calendar = get_calendar(day_no, days);
        document.getElementById("calendar-month-year").innerHTML = month_name[month]+" "+year;
        document.getElementById("calendar-dates").appendChild(calendar);
      }
      function get_calendar(day_no, days){
        var table = document.createElement('table');
        var tr = document.createElement('tr');

        for(var c=0; c<=6; c++){
          var td = document.createElement('td');
          td.innerHTML = "SMTWTFS"[c];
          tr.appendChild(td);
        }
        table.appendChild(tr);

        tr = document.createElement('tr');
        var c;
        for(c=0;c<=6;c++){
          if(c == day_no){
            break;
          }
          var td = document.createElement('td');
          td.innerHTML = "";
          tr.appendChild(td);
        }
        var count = 1;
        for(; c<=6;c++){
          var td = document.createElement('td');
          td.innerHTML = count;
          count++;
          tr.appendChild(td);
        }
        table.appendChild(tr);

        for(var r=3; r<=6; r++){
          tr = document.createElement('tr');
          for(var c=0; c<=6; c++){
            if(count > days){
              table.appendChild(tr);
              return table;
            }
            var td =  document.createElement('td');
            td.innerHTML = count;
            count++;
            tr.appendChild(td);
          }
          table.appendChild(tr);
        }
      }

  </script>
@endsection