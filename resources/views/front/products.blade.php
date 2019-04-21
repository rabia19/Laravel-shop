@extends('layouts.main')

@section('title','Products')
@section('content')

  <!-- products listing -->
         <!-- Latest SHirts -->
         <div class="products" style="margin-top:100px;">
         <div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>New Arrivals</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">women's</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">accessories</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">men's</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
         
         @forelse($products as $product)
					
         <div class="product-item women">
							<div class="product product_filter">
								<div class="product_image">
                                <img src="{{url('images',$product->image)}}"/>
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name">   <a href="{{route('product')}}">
                        <h3>
                           {{$product->name}}
                        </h3>
                    </a></h6>
									<div class="product_price"> <h5>
                        {{$product->price}} kzt   
                    </h5></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="{{route('cart.edit',$product->id)}}">add to cart</a></div>
						</div>

         
            <!-- <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href ="{{route('cart.edit',$product->id)}}"class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{url('images',$product->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('product')}}">
                        <h3>
                           {{$product->name}}
                        </h3>
                    </a>
                    <h5>
                        {{$product->price}}   
                    </h5>
                    <p>
                       {{$product->description}}      
                  </p>
                </div>
            </div> 
           
</div> -->
            @empty
                <h3>No Products</h3>
         @endforelse
    </div>
@endsection