<html>
<head>
    
    <!--Look at those lines -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="/css/stylesheet.css" type="text/css" rel="stylesheet"/>
    <link href="/css/app.css" type="text/css" rel="stylesheet"/>
    <link href="/css/bootstrap.css" type="text/css" rel="stylesheet"/>
    <link href="/css/fontawesome.min.css" type="text/css" rel="stylesheet"/>
    <title>Kairos - @yield('title')</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Kairos</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
    @yield('conteudo')
    </body>
</html>
