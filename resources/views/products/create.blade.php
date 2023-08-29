<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark text-light">

        <div class="container-fluid">
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="products/create">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="products/about">About</a>
            </li>
          </ul>
        </div>
      
      </nav>

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
                <form action="/products/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{ old('name')}}" class="form-control">
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" rows="5">{{ old('description')}} </textarea>
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
</body>
</html>