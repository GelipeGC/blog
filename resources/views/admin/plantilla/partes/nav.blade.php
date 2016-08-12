  <!DOCTYPE html>
  <head>
    <title>Nava</title>
     <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css')}}">
  </head>
  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="../../images/logo.jpg" class="img-circle chica animada">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    @if(Auth::user())
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio<span class="sr-only">(current)</span></a></li>
        <li><a href="{{ route('admin.users.index')}}">Usuarios</a></li>
        <li><a href="{{ route('admin.categories.index')}}">Categorias</a></li>
        <li><a href="{{ route('admin.articles.index')}}">Articulos</a></li>
        <li><a href="{{ route('admin.images.index')}}">Imagenes</a></li>
        <li><a href="{{ route('admin.tags.index')}}">Tags</a></li>
        <li><a href="{{ route('admin.auth.login')}}">Login</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('front.index') }}" target="_blank">Pagina Principal</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('admin.auth.logout') }}" >Salir</a></li>
            
          </ul>
        </li>
      </ul>
     @endif
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>