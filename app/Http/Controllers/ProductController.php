<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

public function index()
{
    $products = Product::all(); // Ambil semua produk
    return view('products.index', compact('products'));
}

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
    ]);

    // Simpan file gambar ke dalam storage/public/products
    $imagePath = $request->file('image')->store('products', 'public');

    // Simpan produk ke database
    Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'description' => $request->description,
        'image' => $imagePath,
    ]);

    
    

    return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
}
public function create()
{
    return view('products.create');
}

//fungsi show detail product
public function show($id)
{
    $product = Product::findOrFail($id);
    return view('products.show', compact('product'));
}

//fungsi edit 
public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('products.edit', compact('product'));
}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);
    $product->name = $request->name;
    $product->price = $request->price;
    $product->description = $request->description;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public');
        $product->image = $imagePath;
    }

    $product->save();

    return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui!');
}
//fungsi edit end
//fungsi update
public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
}

//fungsi update end



}