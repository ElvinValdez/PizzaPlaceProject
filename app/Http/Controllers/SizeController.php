<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use App\Http\Requests\SizeCreateRequest;
use App\Http\Requests\SizeEditRequest;

class SizeController extends Controller
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
        return view('size.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\SizeCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SizeCreateRequest $request)
    {
        $input = $request->all();
        $size = Size::create($input);
        return redirect()->to(route('dashboard')."#units_ingredients_sizes");
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
        $size = Size::findOrFail($id);
        return view('size.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\SizeEditRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SizeEditRequest $request, $id)
    {
        $input = $request->all();
        $size  = Size::find($id);

        if (!empty($size))
            $size->update($input);

        return redirect()->to(route('dashboard')."#units_ingredients_sizes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $size = Size::find($id);

        if (!empty($size))
            Size::destroy($id);

        return redirect()->to(route('dashboard')."#units_ingredients_sizes");
    }
}
