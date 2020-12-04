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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user   = Auth::user();
        $search = $request->get('search');
        
        $orders = (isset($search)) 
                ? Order::join('users as u1', 'u1.id', '=', 'orders.customer_user_id')
                    ->join('users as u2', 'u2.id', '=', 'orders.seller_user_id')
                    ->when($user->hasRole('customer'), function($query) use ($user) {
                        return $query->where('orders.customer_user_id', $user->id);
                    })
                    /*->when($user->hasRole('chef'), function($query) use ($user) {
                        return $query->where('orders.order_status_id', 1);
                    })*/
                    /*->when($user->hasRole('driver'), function($query) use ($user) {
                        return $query->where('orders.order_status_id', 3);
                    })*/
                    ->where('u1.username', 'like', "%$search%")
                    ->orWhere('u2.username', 'like', "%$search%")
                    ->orWhere('orders.address', 'like', "%$search%")
                    ->orWhere('orders.time', 'like', "%$search%")
                    ->get()
                : Order::when($user->hasRole('customer'), function($query) use ($user) {
                            return $query->where('orders.customer_user_id', $user->id);
                        })
                        /*->when($user->hasRole('chef'), function($query) use ($user) {
                            return $query->whereIn('orders.order_status_id', [1,2]);
                        })*/
                        /*->when($user->hasRole('driver'), function($query) use ($user) {
                            return $query->where('orders.order_status_id', 3);
                        })*/
                        ->get();

        $order_pizzas = OrderPizzaPrice::all();
        $order_drinks = DrinkPriceOrder::all();

        if ($user->hasRole('chef'))
            return view("order.chef", compact('orders', 'order_pizzas', 'order_drinks'));
        if ($user->hasRole('customer'))
            return view("order.customer", compact('orders', 'order_pizzas', 'order_drinks'));
        if ($user->hasRole('driver'))
            return view("order.driver", compact('orders', 'order_pizzas', 'order_drinks'));

        return view("order.index", compact('orders', 'order_pizzas', 'order_drinks'));
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
        $seller = User::role('cashier')
                       ->select([DB::raw("COUNT('orders.seller_user_id') as times"), DB::raw('users.id')])            
                       ->leftJoin('orders', 'orders.seller_user_id', 'users.id')
                       ->groupBy('users.id')
                       ->orderBy('times', 'asc')
                       ->first();
        
        $input['customer_user_id'] = Auth::id();
        $input['seller_user_id']   = $seller->id;
        $order = Order::create($input);
        $input['order_id'] = $order->id;

        $order_pizza_price = ($request->get('pizza_price_id') > '0') 
                           ? OrderPizzaPrice::create(array_merge($input, $request->only('pizza_quantity'))) 
                           : '';
        $order_drink_price = ($request->get('drink_price_id') > '0')
                           ? DrinkPriceOrder::create(array_merge($input, $request->only('drink_quantity')))
                           : '';

        Session::flash('success', 'Your order has been placed');
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
        $order = Order::findOrFail($id);

        if ($order->order_status_id == 1) {
            $order->order_status_id = 2;
            $order->chef_user_id = Auth::id();
            $order->save();
            Session::flash('success', 'You have taken the order #'.$order->id);
        }

        $order_pizza = OrderPizzaPrice::where('order_id', $id)->first();
        $order_drink = DrinkPriceOrder::where('order_id', $id)->first();
        
        $pizza = ($order_pizza) ? $order_pizza->pizza_price->pizza : null;
        $drink = ($order_drink) ? $order_drink->drink_price->drink : null;

        return view('order.show', compact('order', 'order_pizza', 'order_drink', 'pizza', 'drink'));
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
        $order = Order::find($id);

        if (!empty($order)) {
            $order->order_status_id = 3;
            $order->save();
        }
         
        Session::flash('success', 'The order has been marked as deliverable');
        return redirect()->route('orders.index');
    }

    /**
     * 
     * 
     */
    public function deliver($id)
    {
        $order = Order::findOrFail($id);

        if ($order->order_status_id == 3) {
            $order->order_status_id = 4;
            $order->driver_user_id = Auth::id();
            $order->save();
            Session::flash('success', 'You have taken the order #'.$order->id);
        }

        $order_pizza = OrderPizzaPrice::where('order_id', $id)->first();
        $order_drink = DrinkPriceOrder::where('order_id', $id)->first();
        
        $pizza = ($order_pizza) ? $order_pizza->pizza_price->pizza : null;
        $drink = ($order_drink) ? $order_drink->drink_price->drink : null;

        $driver = true;

        return view('order.show', compact('order', 'order_pizza', 'order_drink', 'pizza', 'drink', 'driver'));
    }

    /**
     * 
     * 
     */
    public function delivered($id)
    {
        $order = Order::find($id);

        if (!empty($order)) {
            $order->order_status_id = 5;
            $order->save();
        }
            
        Session::flash('success', 'The order has been delivered successfully');
        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $user  = Auth::user();

        if (!empty($order)) {
            if ($user->hasRole('customer')) {
                if ($order->customer_user_id == Auth::id()) {
                    $order->order_status_id = 7;
                    Session::flash('success', 'The order has been cancelled');
                }
            } else if ($user->hasRole('chef') || $user->hasRole('cashier')) {
                $order->order_status_id = 6;
                Session::flash('success', 'The order has been refused');
            }
            $order->save();
        }
        
        return redirect()->route('orders.index');
    }
}
