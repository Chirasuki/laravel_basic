<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();
        
        if ($request->search)
        {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' .$request->search.'%')
                  ->orWhere('description', 'like', '%' .$request->search.'%');
            });
        }

        $products = $query->latest()
                          ->paginate(5)
                          ->withQueryString();

        $total = $products->total();
        
        return view('products.index', compact('products','total'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:products,name|max:255',
            'price' => 'required|integer|min:1|max:100000',
            'description' => 'nullable|string'
        ]);

        Product::create($validated);

        return redirect()->route('products.index')
                         ->with('success','เพิ่มสินค้าสำเร็จ');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',Rule::unique('products')->ignore($product->id),
            'price' => 'required|integer|min:1',
            'description' => 'nullable|string'
        ]);

        $product->update($validated);

        return redirect()->route('products.index')
                         ->with('success','แก้ไขสินค้าสำเร็จ');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success','ลบสำเร็จ');
    }
}
// unique:products,name ใช้กรองชื่อซ้ำ

