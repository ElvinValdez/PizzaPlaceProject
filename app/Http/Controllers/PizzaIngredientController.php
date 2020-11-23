<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\PizzaIngredient;
use Illuminate\Http\Request;

class PizzaIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pizza_id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($pizza_id)
    {
        $ingredients = Ingredient::all();
        return view('pizza_ingredient.create', compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $pizza_id)
    {
        $input = $request->all();
        $pizza_ingredient = PizzaIngredient::create($input);

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $pizza_ingredient_id
     * @param  int  $pizza_id
     * @return \Illuminate\Http\Response
     */
    public function show($pizza_id, $pizza_ingredient_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $pizza_ingredient_id
     * @param  int  $pizza_id
     * @return \Illuminate\Http\Response
     */
    public function edit($pizza_id, $pizza_ingredient_id)
    {
        $pizza_ingredient = PizzaIngredient::findOrFail($pizza_ingredient_id);
        $pizzas = Pizza::all();
        $ingredients = Ingredient::all();
        
        return view('pizza.edit', compact('pizzas', 'ingredients', 'pizza_ingredient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $pizza_ingredient_id
     * @param  int  $pizza_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pizza_id, $pizza_ingredient_id)
    {
        $input = $request->all();
        $pizza_ingredient = PizzaIngredient::find($pizza_ingredient_id);

        if (!empty($pizza_ingredient))
            $pizza_ingredient->update($input);

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $pizza_ingredient_id
     * @param  int  $pizza_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pizza_id, $pizza_ingredient_id)
    {
        $pizza_ingredient = PizzaIngredient::find($pizza_ingredient_id);

        if (!empty($pizza_ingredient))
            PizzaIngredient::destroy($pizza_ingredient_id);

        return redirect()->route('dashboard');
    }
}
