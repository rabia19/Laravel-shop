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
                    <li><a class ="nav-link" href="{{route('products')}}">Shop</a></li>
                    <li><a class ="nav-link" href="#">About</a></li>
                    <li><a class ="nav-link" href="#">Clothing</a></li>
                    <li><a class ="nav-link" href="#">Bag</a></li>
                    <li><a class ="nav-link" href="#">Services</a></li>
                    <li><a class ="nav-link" href="{{route('cart.index')}}"><i class="fas fa-shopping-cart"></i><span class="alert badge">{{Cart::count()}}
                            </span></a>
                    </li>
                </ul>
        </div>
</header>
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
