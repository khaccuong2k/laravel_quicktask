<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body id="app-layout">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">@lang('lables.task.taskManage')</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @lang('lables.task.changeLanguage')
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('user.change-language', ['en']) }}"> @lang('lables.task.english') </a>
                <a class="dropdown-item" href="{{ route('user.change-language', ['vi']) }}"> @lang('lables.task.vietnamese') </a>
              </div>
            </li>
          </ul>
        </div>
    </nav>

    @yield('content')
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('bower_components/jquery/dist/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('bower_components/popper.js/src/popper.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  </body>
</html>
