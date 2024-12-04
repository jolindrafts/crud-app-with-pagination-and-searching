<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // public function index(){
    //     $products = Product::all();
    //     return view('products.index', ['products' => $products]); //products mengacu ke folder resources/view/products
        
    // }
    public function index(Request $request)
{
    $search = $request->input('search');

    // Query dengan pencarian dan pagination
    $products = Product::when($search, function ($query, $search) {
        return $query->where('name', 'like', "%$search%")
                     ->orWhere('description', 'like', "%$search%");
    })->simplePaginate(10); // Sesuaikan jumlah data per halaman

    return view('products.index', compact('products'));
}

    

    public function create(){
        return view('products.create');
    }
//regex:/^\d+(\.\d{1,2})?$/
    public function store(Request $request){
        $data = $request->validate([ //do validation
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        //send new data to database through model
        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(Product $product){
        return View('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([ //do validation
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Successfully');

    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product Deleted Successfully');
    }

 


    
}
