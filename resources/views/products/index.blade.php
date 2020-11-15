
@extends('layouts.adminmaster')
@section('content')

  <div class="container-fluid">
    <a href="/products/create" class="btn btn-info" style="position: relative; float: right;">Add Product</a>
    <h3>Products</h3>
    <div class="container">
      <div class="row justify-content-center" >
        <table class="table">
          <thead>
            <tr>
              <th>Product</th>
              <th>Product Description</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr>
              <td>{{ $product->name }}</td>
              <td>{{ $product->description }}</td>
              <td>{{ $product->price}}</td>
              <td>
                <div class="row">
                  <a href="/products/{{ $product->id }}/edit" class="btn btn-info">Edit</a>
                  <form action="/products/{{ $product->id }}" method="POST">
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