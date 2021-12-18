<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>BROAD MASSES BASE | HOME</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/icon.png')}}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="{{ asset('css/admin.css')}}" rel="stylesheet">
</head>

<body>
  @include('partials.adminheader')
  @include('partials.sidebar')
    @yield('content')
  @include('partials.adminfooter')
  <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>