<?php

namespace App\Http\Controllers;

use App\Models\Name;
use App\Models\Category;
use Illuminate\Http\Request;

class NameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.products.kinds.index', [
            'products' => Name::with(['category'])->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.kinds.create', [
            'categories' => Category::all()
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
            'category_id' => 'required|max:255',
            'name' => 'required|max:255',
        ]);

        Name::create($validatedData);

        return redirect('products/kinds')->with('success', 'New product name has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function show(Name $name)
    {
        return $name;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function edit(Name $kind)
    {
        return view('dashboard.products.kinds.edit', [
           'name' => $kind,
           'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Name $kind)
    {
        $rules = [
            'category_id' => 'required|max:255',
            'name' => 'required|max:255'
        ];

        $validatedData = $request->validate($rules);

        Name::where('id', $kind->id)
            ->update($validatedData);
        
        return redirect('/products/kinds')->with('success', 'Product name has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Name  $name
     * @return \Illuminate\Http\Response
     */
    public function destroy(Name $kind)
    {
        Name::destroy($kind->id);

        return redirect('/products/kinds')->with('success', 'Product name has been deleted');
    }
}
