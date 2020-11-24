<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Pizza;
use App\Models\PizzaPrice;
use Illuminate\Http\Request;

class PizzaController extends Controller
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
        $sizes = Size::all();
        return view('pizza.create', compact('sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $pizza = Pizza::create($input);
        $input['pizza_id'] = $pizza->id;
        $pizza_price = PizzaPrice::create($input);
        return redirect()->to(route('dashboard')."#pizzas_and_drinks");
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
        $pizza = Pizza::findOrFail($id);
        $sizes = Size::all();
        
        return view('pizza.edit', compact('pizza', 'sizes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $pizza = Pizza::find($id);

        if (!empty($pizza))
            $pizza->update($input);

        return redirect()->to(route('dashboard')."#pizzas_and_drinks");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pizza = Pizza::find($id);

        if (!empty($pizza))
            Pizza::destroy($id);

        return redirect()->to(route('dashboard')."#pizzas_and_drinks");
    }
}
