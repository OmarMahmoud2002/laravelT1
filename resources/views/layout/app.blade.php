<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel CRUD Application')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  integrity="sha512-pap8vZq5eG9H6yO0hMGSP0Smzz9FQUnzFE1E8FeBeav7+xMHdI0mXZ2O6ExR4w+BM7nST0N/12GDbUIMotzPzw=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/posts">Omar Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/posts">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="bg-body-tertiary text-center">
  <div class="container p-4 pb-0">
    <section class="mb-4">
      <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#" role="button">
        <i class="fa-brands fa-facebook"></i>
      </a>
      <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#" role="button">
        <i class="fa-brands fa-twitter"></i>
      </a>
      <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#" role="button">
        <i class="fa-brands fa-google"></i>
      </a>
      <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#" role="button">
        <i class="fa-brands fa-instagram"></i>
      </a>
      <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#" role="button">
        <i class="fa-brands fa-linkedin-in"></i>
      </a>
      <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#" role="button">
        <i class="fa-brands fa-github"></i>
      </a>
    </section>
  </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





