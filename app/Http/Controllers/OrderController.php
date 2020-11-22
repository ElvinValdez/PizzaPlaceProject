<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\Drink;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderPizzaPrice;
use App\Models\DrinkPriceOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = ['a','b'];
        dd(array_merge($a, ['c']), array_merge($a, ['d']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pizzas = Pizza::orderBy('name', 'desc')->get();
        $drinks = Drink::all();

        return view('order.create', compact('pizzas','drinks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except(['pizza_quantity', 'drink_quantity']);
        $seller = User::join('orders', 'orders.seller_user_id', 'users.id')
                    ->groupBy('orders.seller_user_id')
                    ->select([DB::raw("COUNT(*) as times"), DB::raw('users.id')])
                    ->orderBy('id', 'asc')
                    ->first();
        
        $input['customer_user_id'] = Auth::id();
        $input['seller_user_id']   = $seller->id;

        $order = Order::create($input);
        $input['order_id'] = $order->id;

        $order_pizza_price = OrderPizzaPrice::create(array_merge($input, $request->only('pizza_quantity')));
        $order_drink_price = DrinkPriceOrder::create(array_merge($input, $request->only('drink_quantity')));

        return redirect()->route('orders.create');
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
