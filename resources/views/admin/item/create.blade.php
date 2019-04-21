@extends('admin.layout.admin')

@section('content')
    <h3>Add Item</h3>


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'item.store', 'method' => 'POST', 'files' => true]) !!}
           
            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('price', 'Price') }}
                {{ Form::text('price', null, array('class' => 'form-control')) }}
            </div>
           

            <div class="form-group">
                {{ Form::label('size', 'Model') }}
                {{ Form::select('size', [ 'small' => 'XS', 'medium' => 'M','large'=>'L'], null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('category_id', 'Categories') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
            </div>
        

            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
            {!! Form::close() !!}

        </div>
    </div>

    @endsection