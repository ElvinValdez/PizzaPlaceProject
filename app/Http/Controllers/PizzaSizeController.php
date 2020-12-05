<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\PizzaSize;
use Illuminate\Http\Request;
use App\Http\Requests\PizzaSizeEditRequest;

class PizzaSizeController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $price  = PizzaSize::find($id);
        $pizza  = $price->pizza;

        return view('price.edit', compact('price', 'pizza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\PizzaSizeEditRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PizzaSizeEditRequest $request, $id)
    {
        $price = $request->get('price');

        $old_price = PizzaSize::find($id);
        $old_price->update(['date' => now()]);
        $new_price = $old_price->replicate();
        $new_price->date = NULL;
        $new_price->price = $price;
        $new_price->push();

        return redirect()->to(route('dashboard')."#units_ingredients_sizes_prices");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
