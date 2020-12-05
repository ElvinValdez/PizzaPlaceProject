<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Pizza;
use App\Models\PizzaSize;
use Illuminate\Http\Request;
use App\Http\Requests\PizzaCreateRequest;
use App\Http\Requests\PizzaEditRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

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
     * @param  \App\Http\Rquests\PizzaCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PizzaCreateRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $image    = $request->file('image');
            $fileName = "/pizzas/" . md5(time()) . '.' . $image->getClientOriginalExtension();
            $img      = Image::make($image->getRealPath());
            $img->stream();
            Storage::disk('public')->put($fileName, $img);
            $input['image'] = '/storage' . $fileName;
        }

        $pizza = Pizza::create($input);
        $input['pizza_id'] = $pizza->id;

        foreach($input['size_ids'] as $size_id) {
            $input['size_id'] = $size_id;
            PizzaSize::create($input);
        }

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
     * @param  \App\Http\Requests\PizzaEditRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PizzaEditRequest $request, $id)
    {
        $input = $request->all();
        $pizza = Pizza::find($id);

        if ($request->hasFile('image')) {
            $image    = $request->file('image');
            $fileName = "/pizzas/" . md5(time()) . '.' . $image->getClientOriginalExtension();
            $img      = Image::make($image->getRealPath());
            $img->stream();
            Storage::disk('public')->put($fileName, $img);
            $input['image'] = '/storage' . $fileName;
        }

        $input['pizza_id'] = $pizza->id;

        if (!empty($pizza)) {
            foreach($pizza->sizes as $size) {
                if (!in_array($size->id, $input['size_ids'])) {
                    $pizzaSize = PizzaSize::where(['pizza_id' => $pizza->id, 'size_id' => $size->id, 'date' => NULL])->first();
                    $pizzaSize->date = now();
                    $pizzaSize->save();
                }
            }

            foreach($input['size_ids'] as $size_id) {
                $input['size_id'] = $size_id;
                $pizzaSize = PizzaSize::where(['pizza_id' => $pizza->id, 'size_id' => $size_id, 'date' => NULL])->get();
                if (count($pizzaSize) == 0)
                    PizzaSize::create($input);
            }

            $pizza->update($input);
        }

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
