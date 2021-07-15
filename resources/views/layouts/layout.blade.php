<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- styles -->
    <style>
      .active{
        color: red;
        font-weight: bold;
      }
    </style>
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
</head>

<body>
    <!-- header -->
    <!-- nav -->
    @include('layouts.partials.header')

    @yield('content')

    <!-- footer -->
    @include('layouts.partials.footer')
</body>

</html>
