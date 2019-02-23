@extends('admin.layout.admin')

@section('content')
    
    <h3>Products</h3>
 
    <ul>
        @forelse($items as $item)
        <li>
            <h4>Name of an item: {{$item->name}}</h4>
        
        </li>
            @empty

            <h3>No Items</h3>


        @endforelse
    </ul>

 @endsection