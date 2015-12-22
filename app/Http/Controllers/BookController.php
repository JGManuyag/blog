<?php
namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Recipe;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $recipes=Recipe::all();
        return view('recipes.index',compact('recipes'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       return view('recipes.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    
    public function store()
    {
       $recipe=Request::all();
       Recipe::create($recipe);
       return redirect('recipes');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
       $recipe=Recipe::find($id);
       return view('recipes.show',compact('recipe'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
       $recipe=Recipe::find($id);
       return view('recipes.edit',compact('recipe'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
       $recipeUpdate=Request::all();
       $recipe=Recipe::find($id);
       $recipe->update($recipeUpdate);
       return redirect('recipes');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        Recipe::find($id)->delete();
        return redirect('recipes');
    }
}
