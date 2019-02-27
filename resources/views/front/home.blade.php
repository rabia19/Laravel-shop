@extends('layouts.main')

@section('content')


    
<div class="background"  style="background-image:url(images/slide.jpg);">
    <div class="row" style="height:400px;">
        <div class="col-xs-offset-3 col-xs-6">
            <div class="mainCard" style="margin:170px 200px 200px 200px; padding:20px; background-color:white; opacity:0.9; text-align:center;">
                <div class="content" style="color:#888; font-size:38px;">
                <h6>THE</h6>    
                    <h1 >COLLLECTION</h1>
                    <p>A homewear brand, designed in Paris and produced by hand</p>
                 </div>
            </div>
        </div>
    </div>
</div>
    
    
  <div class="hero text-center">
      <a href="{{url('/products')}}"><button class="btn btn-outline-light">Check out </button></a>
    </div>

        
        <div class="subheader text-center">
            <h2>
            
        </h2>
        </div>
       
        <!-- Latest SHirts -->
        
        <div class="blog-section">
            <div class="container">
                <h2 class="text-center" style="color:#888;" >CLOTHING</h2>

                <p class="section-description text-center">~Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id, soluta deleniti eaque neque perferendis.~</p>
                <div class="card-columns">
                <div class="card">
                <img class="card-img-top img-fluid" src="images/woman.jpeg" alt="">
                <div class="card-body">
                    <a class="card-title" href="{{route('products')}}">WOMAN</h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
                    <div class="card">
                <img class="card-img-top img-fluid" src="images/man4.png" alt="">
                <div class="card-body">
                    <a class="card-title" href="{{route('products')}}">MAN</h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="images/kid.jpeg" alt="">
                <div class="card-body">
                <a class="card-title" href="{{route('products')}}">KIDS</h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
                </div> <!-- end blog-posts -->
            </div> <!-- end container -->
        </div> <!-- end blog-section -->
   </div>
   
   <section id="home-heading" class="p-5">
    <div class="dark-overlay">
      <div class="row">
        <div class="col">
          <div class="container pt-5">
            
            <p class="d-none d-md-block">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est eaque magni sit dolores. Nisi, dolor nam modi perspiciatis
              consequatur soluta.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
      <!-- PHOTO GALLERY -->
  <section id="gallery" class="py-5">
    <div class="container">
      <h1 class="text-center">FAVOURITE PIC'S</h1>
      <p class="text-center">Check out our photos</p>
      <div class="row mb-4">
        <div class="col-md-4">
          <a href="#" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
            data-width="560">
            <img src="images/obj2.jpg" alt="" class="img-fluid">
          </a>
        </div>

        <div class="col-md-4">
          <a href="#" data-toggle="lightbox" data-gallery="img-gallery" data-height="561"
            data-width="561">
            <img src="images/obj2.jpg" alt="" class="img-fluid">
          </a>
        </div>

        <div class="col-md-4">
          <a href="#" data-toggle="lightbox" data-gallery="img-gallery" data-height="562"
            data-width="562">
            <img src="images/obj2.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-4">
          <a href="#" data-toggle="lightbox" data-gallery="img-gallery" data-height="563"
            data-width="563">
            <img src="images/obj2.jpg" alt="" class="img-fluid">
          </a>
        </div>

        <div class="col-md-4">
          <a href="#" data-toggle="lightbox" data-gallery="img-gallery" data-height="564"
            data-width="564">
            <img src="images/obj2.jpg" alt="" class="img-fluid">
          </a>
        </div>

        <div class="col-md-4">
          <a href="#" data-toggle="lightbox" data-gallery="img-gallery" data-height="565"
            data-width="565">
            <img src="images/obj2.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>
    </div>
  </section>



  </section>
        <!-- Footer -->

    <footer id="main-footer" class="text-center p-4">
    <div class="container">
      <div class="row">
        <div class="col">
          <p>Copyright &copy;
            <span id="year"></span> SHOP</p>
        </div>
      </div>
    </div>
  </footer>

        @endsection