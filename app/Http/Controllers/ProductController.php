<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('', [
            "products" => Product::with(['category', 'name', 'brand', 'type'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.serials.create', [
            'type' => Type::find(request('type_id'))
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
        $type = Type::find($request->input('type_id'));
        $brand = $type->brand;
        $name = $type->brand->name;
        $category = $type->brand->name->category;

        // dd($type->id."-".$brand->id."-".$name->id."-".$category->id);

        $validatedData = $request->validate([
            'serial_number' => 'required|max:255',
            'version' => 'required|max:255'
        ]);

        $validatedData['category_id'] = $category->id;
        $validatedData['name_id'] = $name->id;
        $validatedData['brand_id'] = $brand->id;
        $validatedData['type_id'] = $type->id;

        Product::create($validatedData);

        return redirect('products/types/'.$type->id)->with('success', 'New product detail has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $serial_numbers = Product::where('id', request('id'))->get();
        // dd($serial_numbers[0]);
        $product = $serial_numbers[0];
        // dd($product);
        return view('dashboard.products.serials.edit', [
            'serial' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // dd($request->id);
        $rules = [
            'id' => 'required|max:255',
            'category_id' => 'required|max:255',
            'name_id' => 'required|max:255',
            'brand_id' => 'required|max:255',
            'type_id' => 'required|max:255',
            'serial_number' => 'required|max:255',
            'version' => 'required|max:255'
        ];

        $validatedData = $request->validate($rules);

        Product::where('id', $request->id)
            ->update($validatedData);
        
        return redirect('/products/types/'.$request->type_id)->with('success', 'Product detail has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy(request('id'));

        return redirect('/products/types/'.request('type_id'))->with('success', 'Product Detail has been deleted');
    }
}
