<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $key = 0;
        $products = Product::paginate(
            9
        );
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required | string ',
            'cost_price' => 'required|integer|min:10|max:10000',
            'selling_price' => 'required | min: 0 | max: 100',
            'quantity' => 'required|min:1|max:100'
        ]);

        $product = Product::create([
            'product_name' => $request->input('product_name'),
            'cost_price' => $request->input('cost_price'),
            'selling_price' => $request->input('selling_price'),
            'quantity' => $request->input('quantity'),
        ]);

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        //$products = Product::find($id);
        //dd($products);
        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id)->first();
        // dd($car);

        return view('products.edit')->with('product', $product);
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
        $request->validated();

        $car = Product::where('id', $id)->update([
            'product_name' => $request->input('product_name'),
            'cost_price' => $request->input('cost_price'),
            'selling_price' => $request->input('selling_price'),
            'quantity' => $request->input('quantity'),

        ]);

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products');
    }
}
