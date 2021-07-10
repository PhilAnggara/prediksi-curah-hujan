<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/images/favicon.ico') }}">
  <title>
    @yield('title')
  </title>

  <!-- Style -->
  <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/vendors/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css">
  <link rel="stylesheet" href="{{ url('frontend/css/app.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/css/main.css') }}">
  <!-- End of style -->
</head>
<body>

  @yield('content')
  
  <!-- Script -->
  <script src="{{ url('frontend/js/feather-icons/feather.min.js') }}"></script>
  <script src="{{ url('frontend/js/app.js') }}"></script>
  <script src="{{ url('frontend/js/main.js') }}"></script>
  <!-- End of script -->
</body>
</html>