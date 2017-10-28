<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/shop-homepage.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">BootsForU</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li> <a href="{{ route ('login') }}"> LOGIN</a></li>
        <li> <a href="{{ route ('register') }}"> REGISTER</a></li>
        <li><a href=""><span class="glyphicon glyphicon-shopping-cart"></span> CART</a></li>
        
      </ul>
    </div>
  </div>
</nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            {{--<div class="col-md-3">--}}
                {{--<p class="lead">BootsForU</p>--}}
                {{--<div class="list-group">--}}
                    {{--<a href="#" class="list-group-item">Nike</a>--}}
                    {{--<a href="#" class="list-group-item">Adidas</a>--}}
                    {{--<a href="#" class="list-group-item">Puma</a>--}}
                {{--</div>--}}
            {{--</div>--}}

            
               

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/boots_nemeziz.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$250</h4>
                                <h4><a href="#">Adidas Nemeziz FG</a>
                                </h4>
                                <p>Unstoppable agility and Immeasurable grip, Adidas Nemeziz Ocean Storm Pack.</p>
                            </div>
                            <div class="input-group-btn">
                                {{--<a href="{{ route ('cart') }}" class="btn btn-danger">Quick buy</a>--}}

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/boots_cr7.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$260</h4>
                                <h4><a href="#">Nike Mercurial CR7</a>
                                </h4>
                                <p>Like the best player in the world you'll need the best boots, so here they are.</p>
                            </div>
                            <div class="input-group-btn">
                                {{--<a href="{{ route ('cart') }}" class="btn btn-danger">Quick buy</a>--}}

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/boots_hypervenom.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$187.99</h4>
                                <h4><a href="#">Nike Hypervenom Phantom 3</a>
                                </h4>
                                <p>Explosive attack, unstoppable power. The new hypervenom lock in let loose pack</p>
                            </div>
                            <div class="input-group-btn">
                                {{--<a href="{{ route ('cart') }}" class="btn btn-danger">Quick buy</a>--}}

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/boots_magista.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$120</h4>
                                <h4><a href="#">Nike Magista Obra 2</a>
                                </h4>
                                <p>Unrivalled play making capabilities. Nike Magista Obra 2</p>
                            </div>
                            <div class="input-group-btn">
                                {{--<a href="{{ route ('cart') }}" class="btn btn-danger">Quick buy</a>--}}

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/boots_x.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$216.99</h4>
                                <h4><a href="#">Adidas X</a>
                                </h4>
                                <p>Killer instincts in front of goal.</p>
                            </div>
                            <div class="input-group-btn">
                                {{--<a href="{{ route ('cart') }}" class="btn btn-danger">Quick buy</a>--}}

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images/boots_ace.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$215</h4>
                                <h4><a href="#">Adidas ACE</a>
                                </h4>
                                <p>Stylish play making flare. Like Paul Pogba a pair of these can be yours now!</p>
                            </div>
                            <div class="input-group-btn">
                                {{--<a href="{{ route ('cart') }}" class="btn btn-danger">Quick buy</a>--}}

                            </div>
                        </div>
                    </div>

                    

                    

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    Contact Information
                        <br>
                        Tel: 0791019910
                        <br>
                        Email:support@bootsforu.com

                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{ asset('/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

</body>

</html>
