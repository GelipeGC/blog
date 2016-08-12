<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Laravel Blog</title>
       
        <link rel="stylesheet" type="text/css" href="{{ asset('plugin/front/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('plugin/front/css/clean-blog.min.css') }}">
        <!-- Custom Fonts -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

      
    </head>
    <body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Developers Ideas</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="post.html">Sample Post</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.auth.login') }}">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../../images/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Developers Blog</h1>
                        <hr class="small">
                        <span class="subheading"> Una empresa de desarrollo de Softwere a tu medida</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h2>ULTIMOS POST</h2>
            @foreach($articles as $article)
                <div class="post-preview">
                    <a href="#" class="thumbnail">
                    @foreach($article->images as $image)
                    <img class="img-responsive img-article" src="{{ asset('images/articles/' .$image->name) }}">
                    @endforeach

                        <h2 class="post-title">
                            {{ $article->title}}
                        </h2>
                        <h3 class="post-subtitle">
                            Value elegance, simplicity, and readability? You’ll fit right in. Laravel is designed for people just like you. If you need help getting started, check out Laracasts and our great documentation.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Felipe GC</a> on Febraury 08, 2016 <span>{{ $article->category->name}}</span></p>                         
                    <p align="right">{{ $article->created_at->diffForHumans() }}</p>

                </div>
            @endforeach
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        {!! $articles->render()!!}
                    </li>
                </ul>
            </div>
        </div>

    </div>
<aside>
    <div class="block">
          @foreach($categories as $category)
          <span class="badge">{{ $category->articles->count() }}</span><br>
          {{ $category->name}}<br>
          @endforeach
    </div>
</aside>
<aside>
    <div class="hola">
          @foreach($tags as $tag)
          <span class="badge">{{ $tag->name }}</span>
    
          @endforeach
    </div>
</aside>
    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Developers Ideas 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('plugin/front/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('plugin/front/js/bootstrap.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('plugin/front/js/clean-blog.min.js') }}"></script>

    </body>
</html>
