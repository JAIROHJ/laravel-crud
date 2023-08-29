@extends('layouts.app')
@section('main')

      {{-- flash message  --}}
      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
      </div>
          
      @endif


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <h3 class="text-muted">Product Edit {{$product->name}}</h3>
                <form action="/products/{{$product->id}}/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{ old('name',$product->name)}}" class="form-control">
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" rows="5">{{ old('description',$product->description)}}</textarea>
                        @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" value="{{ old('image')}}" class="form-control">
                        @if ($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                    <button class="btn btn-success mt-3" type="submit">Submit</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    @endsection