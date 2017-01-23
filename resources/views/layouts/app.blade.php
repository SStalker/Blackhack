<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'Blog')</title>

  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet">
  <link href="/css/main.css" rel="stylesheet">

  <!-- Scripts -->
  <script src="/js/jquery-3.1.1.min.js"></script>
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
  <script>
      $('textarea').ckeditor();
      // $('.textarea').ckeditor(); // if class is prefered.
  </script>

  <script>
      window.Laravel = <?php echo json_encode([
          'csrfToken' => csrf_token(),
      ]); ?>
  </script>
</head>
<body>
  @include('layouts.nav')
	<div id="content" class="container">
		@yield('content')
  </div>

  <!-- Scripts -->
  <script src="/js/app.js"></script>
</body>
</html>
