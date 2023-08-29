@extends('layouts.app')
@section('main')
  

    <div class="container">
        <div class="text-right">
            <a href="products/create" class="btn btn-primary mt-2">New Product</a>
        </div>
        <table class="table table-hover mt-3">
            <thead>
              <tr>
                <th>Sno.</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $products as $product )
                    
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td><a href="products/{{$product->id}}/show" class="text-dark">{{$product->name}}</a></td>
                    <td><img src="products/{{$product->image}}" class="rounded-circle" width="40" height="40" alt=""></td>
                    <td>
                      <a href="products/{{$product->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                      
                      <form class="d-inline" action="products/{{$product->id}}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                      <button class="btn btn-danger btn-sm">Delete</button></form>
                    </td>
                </tr>
                <tr>
                  @endforeach
              </tbody>
            </table>
            {{$products->links()}}
    </div>
    @endsection