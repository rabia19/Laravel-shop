@extends('layouts.main')
 
@section('content')
    <div class="row" style="margin-top:150px;">
        <h3>Cart Items</h3>


        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>qty</th>
                <th>size</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)
                <tr>
                    <td>{{$cartItem->name}}</td>
                    <td>{{$cartItem->price}}</td>
                    
                    <td width="70px">
                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                        <input name="qty" type="text" value="{{$cartItem->qty}}">
                       
                    </td>
                    
                    
                    <td>
                       {!! Form::select('size', ['xsmall'=>'XS','small'=>'S','medium'=>'M','large'=>'L','xlarge'=>'XL'] , $cartItem->options->has('size')?$cartItem->options->size:'' ) !!}
                       </td>
    

                    <td>
                       <input style="float: left"  type="submit" class="button success " value="Ok">
                        {!! Form::close() !!}

                        <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                           {{csrf_field()}}
                           {{method_field('DELETE')}}
                           <input class="button small alert" type="submit" value="Delete"  style="margin-left:10px;">
                         </form>
                   
                     </td>
                     
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td>
                    Total: {{Cart::total()}} kzt
                </td>
                <td>Items: {{Cart::count()}}

                </td>
                <td></td>
                <td></td>

            </tr>
            </tbody>
        </table>

        <a href="{{url('/checkout')}}" class="button " style="border:none;">Checkout</a>
    </div>



@endsection