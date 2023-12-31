<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Unit;
use App\Models\Ingredient;
use App\Models\Size;
use App\Models\Drink;
use App\Models\Pizza;
use App\Models\PizzaSize;
use App\Models\DrinkPrice;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
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
        $pizza_sizes  = PizzaSize::where('date', '=', NULL)->get();
        $drink_prices = DrinkPrice::where('date', '=', NULL)->get();

        return view('admin.dashboard', compact('users', 'units', 'ingredients', 'sizes', 'drinks', 'pizzas', 'roles', 'pizza_sizes', 'drink_prices'));
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
        $user = Auth::user();

        if ($user->hasRole('chef') || $user->hasRole('driver'))
            return redirect()->route('orders.index');
        if ($user->hasRole('cashier'))
            return redirect()->route('dashboard');

        return redirect()->route('orders.create');
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
