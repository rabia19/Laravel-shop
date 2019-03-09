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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    </head>
    <body>
        <header >
        <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light ">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">SHOP</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <li><a class ="nav-link"href="" data-toggle="modal" data-target="#exampleModal">Login</a></li>
                    <li><a class ="nav-link" href="{{route('products')}}">Shop</a></li>
               
                    
                    <li><a class ="nav-link" href="#">About</a></li>
                
                    <li><a class ="nav-link" href="#">Services</a></li>
                    <li><a class ="nav-link" href="{{route('cart.index')}}"><i class="fas fa-shopping-cart"></i><span class="alert badge">{{Cart::count()}}
                            </span></a>
                    </li>
                </ul>
        </div>
</header>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
    <div class='col-lg-12'>
      <form class="form-vertical" role="form" method="post" action="">
        <div class="form-group">
          <input type="text" name="email" class="form-control" placeholder="Enter email" value="">
        </div>
        <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Enter password">

        </div>
        <input type="hidden" name="_token" value="{{Session::token()}}">
      </form>
    </div>
  </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-primary" id="lgnBtn" data-toggle="modal" data-target="#exampleModal">Login</button>
        <button type="button" class="btn btn-primary" id = "regBtn" data-toggle="modal" data-target="#exampleModalReg">Register</button>
      </div>
    </div>
  </div>
</div>

<!--Reg modal-->

<div class="modal fade" id="exampleModalReg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
    <div class='col-lg-12'>
      <form class="form-vertical" role="form" method="post" action="">
         <div class="form-group">
          <input type="text" name="text" class="form-control" placeholder="Enter username" value="">
        </div>
        <div class="form-group">
          <input type="text" name="email" class="form-control" placeholder="Enter email" value="">
        </div>
        <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Enter password">

        </div>
        <input type="hidden" name="_token" value="{{Session::token()}}">
      </form>
    </div>
  </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="lgnBtn">Login</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalReg" id="regBtn">Register</button>
      </div>
    </div>
  </div>
</div>
@yield('content')

      
<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>

<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_GryUHqXe48kgNc75J2BovmeN');
</script>
<script src="{{asset('dist/js/app.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="{{asset('dist/js/vendor/foundation.js')}}"></script>
<script>var stripe = Stripe('pk_test_2bhe8tP5qDQVhMtHRlBE1P5z');
var elements = stripe.elements();</script>
    </body>
</html>
