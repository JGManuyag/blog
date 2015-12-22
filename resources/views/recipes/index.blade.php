@extends('layout/template')

@section('content')

<h1>Recipe Book</h1>

    <a href="{{url('/recipes/create')}}" class="btn btn-success">New Product</a>

<hr>

    <table class="table table-striped table-bordered table-hover">

    <thead>

    <tr class="bg-info">
        <th>ID</th>
        <th>Product</th>
        <th>Description</th>
        <th>Thumbs</th>
        <th colspan="3">Actions</th>
    </tr>

    </thead>
    <tbody>

    @foreach ($recipes as $recipe)

        <tr>
            <td>{{ $recipe->id }}</td>
            <td>{{ $recipe->meal }}</td>
            <td>{{ $recipe->description }}</td>

            <td align="center"><img src="{{asset('img/'.$recipe->image.'.jpg')}}" height="55" width="70"></td>
             
            <td align="center"><a href="{{url('recipes',$recipe->id)}}" class="btn btn-primary">Read</a></td>
             
            <td align="center"><a href="{{route('recipes.edit',$recipe->id)}}" class="btn btn-warning">Update</a></td>
             
            <td align="center">
            {!! Form::open(['method' => 'DELETE', 'route'=>['recipes.destroy', $recipe->id]]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
           </td>
        </tr>

    @endforeach

    </tbody>

</table>

@endsection