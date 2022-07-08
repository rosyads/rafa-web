<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Name;
use App\Models\Product;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Type::with(['brand'])->get());
        return view('dashboard.products.types.index', [
            'types' => Type::with(['brand'])->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.types.create', [
            'categories' => Category::all(),
            'names' => Name::all(),
            'brands' => Brand::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'brand_id' => 'required|max:255',
            'type' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        Type::create($validatedData);

        return redirect('products/types')->with('success', 'New product type has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        $serial_numbers = Product::where('type_id', $type->id)->get();
        // dd($serial_numbers);
        return view('dashboard.products.types.show', [
            'type' =>  $type,
            'serial_numbers' => $serial_numbers
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        return view('dashboard.products.types.edit', [
            'type' => $type,
            'brands' => Brand::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $rules = [
            'brand_id' => 'required|max:255',
            'type' => 'required|max:255'
        ];

        $validatedData = $request->validate($rules);

        Type::where('id', $type->id)
            ->update($validatedData);
        
        return redirect('/products/types')->with('success', 'Type has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        Type::destroy($type->id);

        return redirect('/products/types')->with('success', 'Type has been deleted');
    }
}
