<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use App\Http\Requests\IngredientCreateRequest;
use App\Http\Requests\IngredientEditRequest;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::all();
        return view('ingredient.create', compact('units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\IngredientCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IngredientCreateRequest $request)
    {
        $input = $request->all();
        $ingredient = Ingredient::create($input);

        return redirect()->to(route('dashboard')."#units_ingredients_sizes");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingredient = Ingredient::find($id);
        $units      = Unit::all();

        return view('ingredient.edit', compact('ingredient', 'units'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\IngredientEditRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IngredientEditRequest $request, $id)
    {
        $input = $request->all();
        $ingredient = Ingredient::find($id);

        if (!empty($ingredient))
            $ingredient->update($input);

        return redirect()->to(route('dashboard')."#units_ingredients_sizes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingredient = Ingredient::find($id);

        if (!empty($ingredient))
            Ingredient::destroy($id);

        return redirect()->to(route('dashboard')."#units_ingredients_sizes");
    }
}
