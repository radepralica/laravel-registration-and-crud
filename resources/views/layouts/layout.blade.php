<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="stylesheet" type="text/css" href="#">
</head>
<title>@yield('header-title')</title>
<body>

@yield('navbar')
<br>

<div class="container mt-3">

  <div style="background: #c7c2c2" class="mt-4 p-3  text-white rounded shadow-lg">
    <h1 style="text-align: center;">@yield('body-title')</h1>

  </div>
</div>

@yield('main-content')


</body>
</html>
