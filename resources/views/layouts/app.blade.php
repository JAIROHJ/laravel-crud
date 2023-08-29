<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL CRUD</title>
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
      @yield('main')
</body>
</html>