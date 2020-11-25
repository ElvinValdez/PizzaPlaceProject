<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Unit;
use App\Models\Ingredient;
use App\Models\Size;
use App\Models\Drink;
use App\Models\Pizza;
use App\Models\Role;
use App\Models\PizzaPrice;
use App\Models\DrinkPrice;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users        = User::all();
        $units        = Unit::all();
        $ingredients  = Ingredient::all();
        $sizes        = Size::all();
        $drinks       = Drink::all();
        $pizzas       = Pizza::all();
        $roles        = Role::all();
        $pizza_prices = PizzaPrice::where('date', '=', NULL)->get();
        $drink_prices = DrinkPrice::where('date', '=', NULL)->get();

        return view('admin.dashboard', compact('users', 'units', 'ingredients', 'sizes', 'drinks', 'pizzas', 'roles', 'pizza_prices', 'drink_prices'));
    }

    /**
     * Shows admin dashboard
     * 
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Shows order creation
     * 
     * @return \Illuminate\Http\Response
     */
    public function main()
    {
        return view('order.create');
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
        //
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
        //
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
