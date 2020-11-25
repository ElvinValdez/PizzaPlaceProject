<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\IngredientPizza;
use Illuminate\Http\Request;
use App\Http\Requests\PizzaIngredientCreateRequest;

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
        return view('pizza_ingredient.create', compact('pizza_id', 'ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PizzaIngredientCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PizzaIngredientCreateRequest $request, $pizza_id)
    {
        $input = $request->all();
        $input['pizza_id'] = $pizza_id;
        $pizza_ingredient = IngredientPizza::create($input);

        return redirect()->to(route('dashboard')."#pizzas_and_drinks");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $ingredient_id
     * @param  int  $pizza_id
     * @return \Illuminate\Http\Response
     */
    public function show($pizza_id, $ingredient_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $ingredient_id
     * @param  int  $pizza_id
     * @return \Illuminate\Http\Response
     */
    public function edit($pizza_id, $ingredient_id)
    {
        $pizza_ingredient = IngredientPizza::where(['pizza_id' => $pizza_id, 'ingredient_id' => $ingredient_id])->first();
        $pizzas = Pizza::all();
        $ingredients = Ingredient::all();
        
        return view('pizza.edit', compact('pizzas', 'ingredients', 'pizza_ingredient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PizzaIngredientCreateRequest  $request
     * @param  int  $ingredient_id
     * @param  int  $pizza_id
     * @return \Illuminate\Http\Response
     */
    public function update(PizzaIngredientCreateRequest $request, $pizza_id, $ingredient_id)
    {
        $input = $request->all();
        $pizza_ingredient = IngredientPizza::where(['pizza_id' => $pizza_id, 'ingredient_id' => $ingredient_id])->first();

        if (!empty($pizza_ingredient))
            $pizza_ingredient->update($input);

        return redirect()->to(route('dashboard')."#pizzas_and_drinks");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $ingredient_id
     * @param  int  $pizza_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pizza_id, $ingredient_id)
    {
        $pizza_ingredient = IngredientPizza::where(['pizza_id' => $pizza_id, 'ingredient_id' => $ingredient_id])->first();

        if (!empty($pizza_ingredient))
            IngredientPizza::destroy($pizza_ingredient->id);

        return redirect()->to(route('dashboard')."#pizzas_and_drinks");
    }
}
