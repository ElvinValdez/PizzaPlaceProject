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
        $pizza_prices = PizzaPrice::all();
        $drink_prices = DrinkPrice::all();

        return view('admin.dashboard', compact('users', 'units', 'ingredients', 'sizes', 'drinks', 'pizzas', 'roles', 'pizza_prices', 'drink_prices'));
    }

    /**
     * Checks role and redirects
     * 
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        // do role check
        return view('admin.dashboard');
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
