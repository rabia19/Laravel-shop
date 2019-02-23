<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
    <!--<a href="{{route('products')}} <a href="{{route('cart.index')}}"<a href="{{route('products')}}"><span class="alert badge">
                                {{Cart::count()}}}
                            </span>>"-->
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title','Shop')
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css
">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/app2.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

    </head>
    <body>
        <header style="background-image:url(images/aa.jpeg);">
            <div class="top-nav container">
                <div class="logo">SHOP</div>
                <ul>
                    <li><a href="{{route('products')}}">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="{{route('cart.index')}}">Cart</a></li>
                </ul>
            </div> <!-- end top-nav -->

            <div id="text-carousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="row">
        <div class="col-xs-offset-3 col-xs-6">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="carousel-content">
                        <div>
                        <h6>THE</h6>    
                <h1 style="color:white;">COLLLECTION</h1>
                    <p>A practical example of using CSS Grid for a typical website layout.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content">
                        <div>
                        <h6>THE</h6>    
                        <h1 style="color:white;">COLLLECTION</h1>
                    <p>A practical example of using CSS Grid for a typical website layout.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content">
                        <div>                          
                        <h6>THE</h6>    
                <h1 style="color:white;">COLLLECTION</h1>
                    <p>A practical example of using CSS Grid for a typical website layout.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Controls --> <a class="left carousel-control" href="#text-carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
 <a class="right carousel-control" href="#text-carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  <div class="hero text-center">
           <a href="{{url('/products')}}"><button class="btn btn-outline-light">Check out </button></a>
</div>
        


</div>
</header>
@yield('content')

      <footer>
            <div class="footer-content container">
                
                <ul>
                    <li>Follow:</li>
                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div> <!-- end footer-content -->
        </footer>

    <script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
    <script src="{{asset('dist/js/app.js')}}"></script>
    </body>
</html>
