@extends('layouts.adminmaster')
@section('content')

  <div class="container-fluid">
    <h4>Add Products</h4>
    <div class="container">
      <div class="row justify-content-center">
        <form action="/products" method="POST">
           @csrf

          <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Enter Product Name" autocomplete="off" required>
          </div>

          <div class="form-group">
            <input type="text" name="description" class="form-control" placeholder="Enter Description" autocomplete="off" required>
          </div>
          
           <div class="form-group">
            <input type="number" name="price" class="form-control" placeholder="Enter Price" autocomplete="off" required>
          </div>

           <div class="form-group">
             <button type="submit" class="btn btn-primary" name="save">Save</button>
           </div>
         </form>
       </div>     
    </div>
  </div>

@endsection