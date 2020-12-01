
@extends('layouts.adminmaster')
@section('content')

  <div class="container-fluid">
    <a href="/products/create" class="btn btn-info" style="position: relative; float: right;">Add Products</a>
    <h3>Products</h3>
    <div class="container">
      <div class="row justify-content-center" >
        <table class="table">
          <thead>
            <tr>
              <th>Product</th>
              <th>Product Description</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $products)
            <tr>
              <td>{{ $products->itemName }}</td>
              <td>{{ $products->itemDescription }}</td>
              <td>{{ $products->price}}</td>
              <td>
                <div class="row">
                  <a href="/products/{{ $products->id }}/edit" class="btn btn-info">Edit</a>
                  <form action="/products/{{ $products->id }}" method="POST">
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