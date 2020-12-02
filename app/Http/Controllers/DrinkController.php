<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;
use App\Http\Requests\DrinkCreateRequest;
use App\Http\Requests\DrinkEditRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class DrinkController extends Controller
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
        return view('drink.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\DrinkCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DrinkCreateRequest $request)
    {
        $input = $request->all();
        
        if ($request->hasFile('image')) {
            $image    = $request->file('image');
            $fileName = "/drinks/" . md5(time()) . '.' . $image->getClientOriginalExtension();
            $img      = Image::make($image->getRealPath());
            $img->stream();
            Storage::disk('public')->put($fileName, $img);
            $input['image'] = '/storage' . $fileName;
        }

        $drink = Drink::create($input);

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
        $drink = Drink::findOrFail($id);
        return view('drink.edit', compact('drink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\DrinkEditRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DrinkEditRequest $request, $id)
    {
        $input = $request->all();
        $drink = Drink::find($id);

        if ($request->hasFile('image')) {
            $image    = $request->file('image');
            $fileName = "/drinks/" . md5(time()) . '.' . $image->getClientOriginalExtension();
            $img      = Image::make($image->getRealPath());
            $img->stream();
            Storage::disk('public')->put($fileName, $img);
            $input['image'] = '/storage' . $fileName;
        }

        if (!empty($drink))
            $drink->update($input);

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
        $drink = Drink::find($id);

        if (!empty($drink))
            Drink::destroy($id);

        return redirect()->to(route('dashboard')."#pizzas_and_drinks");
    }
}
