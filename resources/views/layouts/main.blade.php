<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        {{-- font awersome --}}
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
         {!! Html::style(elixir('css/app.css')) !!}
    </head>
    <body>
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">FRSM-Framgia</a>
                </div>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadidates<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>AAA</a></li>
                                <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>BBB</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Employee</a></li>
                        <li><a href="#">Inteviews Schedule</a></li>
                        <li><a href="#">Statistic</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input 
                                    type="text" 
                                    name="search" 
                                    class="form-control" 
                                    placeholder="Nhập từ khóa ..." 
                                    style="border-radius: 20px;"
                                    size="20" 
                                >
                            </div>
                        </form>
                        <li>
                            <a href="#"><i class="fa fa-cog" aria-hidden="true"></i> System setting</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trung Kien <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Profile</a></li>
                                <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <div id="wrapper">
            @yield('content')
        </div>
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="Hello World"></script>
         {!! Html::script(elixir('js/app.js')) !!}
    </body>
</html>
