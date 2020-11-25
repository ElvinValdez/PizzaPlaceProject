<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Requests\UnitCreateRequest;
use App\Http\Requests\UnitEditRequest;

class UnitController extends Controller
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
        return view('unit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UnitCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnitCreateRequest $request)
    {
        $input = $request->all();
        $unit = Unit::create($input);

        return redirect()->to(route('dashboard')."#units_ingredients_sizes_prices");
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
        $unit = Unit::findOrFail($id);
        return view('unit.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UnitEditRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UnitEditRequest $request, $id)
    {
        $input = $request->all();
        $unit = Unit::find($id);

        if (!empty($unit))
            $unit->update($input);

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
        $unit = Unit::find($id);

        if (!empty($unit))
            Unit::destroy($id);

        return redirect()->to(route('dashboard')."#units_ingredients_sizes_prices");
    }
}
