@extends('layout/template')
@section('content')

    <h1>Recipes</h1>

    <form class="form-horizontal">

        <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Sample</label>
            <div class="col-sm-10">
                <img src="{{asset('img/'.$recipe->image.'.jpg')}}" height="300" width="400" class="img-rounded">
            </div>
        </div>

        <div class="form-group">
            <label for="meal" class="col-sm-2 control-label">Product</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="meal" placeholder="{{$recipe->meal}}" readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="description" rows="2" style="resize:none" readonly>{{$recipe->description}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="ingredients" class="col-sm-2 control-label">Ingredients</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="ingredients" rows="3" style="resize:none" readonly>{{$recipe->ingredients}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="instructions" class="col-sm-2 control-label">Instructions</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="instructions" rows="4" style="resize:none" readonly>{{$recipe->instructions}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('recipes')}}" class="btn btn-primary">Back</a>
            </div>
        </div>

    </form>

@stop