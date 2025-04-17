<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
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
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
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
