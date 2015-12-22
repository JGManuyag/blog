@extends('layout.template')
@section('content')

    <h1>Update Recipe</h1>

    {!! Form::model($recipe,['method' => 'PATCH','route'=>['recipes.update',$recipe->id]]) !!}

    <div class="form-group">
        {!! Form::label('Product', 'Product:') !!}
        {!! Form::text('meal',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Description', 'Description:') !!}
        {!! Form::textarea('description',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Ingredients', 'Ingredients:') !!}
        {!! Form::textarea('ingredients',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Instructions', 'Instructions:') !!}
        {!! Form::textarea('instructions',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::text('image',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@stop