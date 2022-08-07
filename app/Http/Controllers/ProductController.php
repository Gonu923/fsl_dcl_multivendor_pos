<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Vendor;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = new Product();
        $products_count = Product::all()->count();
        $products_active = Product::where('status', 1)->count();
        $total_products = Product::all()->sum('quantity');
        if ($request->search) {
            $products = $products->where('name', 'LIKE', "%{$request->search}%");
        }
        $products = $products->latest()->paginate(10);
        $vendors = Vendor::all();
        $categories = Category::all();
        if (request()->wantsJson()) {
            return ProductResource::collection($products);
        }
        return view('products.index', compact('categories', 'vendors', 'products_count', 'products_active', 'total_products'))->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $vendors = Vendor::all();
        return view('products.create', compact('categories', 'vendors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {

        // for ($i=3; $i < 1500 ; $i++) {
        //     $arry[] = [
        //         'name' => 'Demo Product'.$i,
        //         'description' => 'great product'. $i,
        //         'image' => 'demo.png',
        //         'barcode' => "1DCL".$i,
        //         'price' => 500+$i,
        //         'quantity' => 1000,
        //         'vendor_discount' => 5,
        //         'dcl_discount' => 5,
        //         'status' => true,
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s')
        //     ];
        // }
        // Product::insert($arry);

        $image_path = '';

        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('products', 'public');
        }

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'barcode' => $request->barcode,
            'image' => $image_path,
            'category_id' => $request->category_id,
            'vendor_id' => $request->vendor_id,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'dcl_discount' => $request->dcl_discount,
            'vendor_discount' => $request->vendor_discount,
            'vat' => $request->vat,
            'status' => $request->status,
        ]);

        if (!$product) {

            return redirect()->back()->with('error', 'Sorry, there a problem while creating product.');
        }
        return redirect()->route('products.index')->with('success', 'Success, you product have been created.');
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
        $categories = Category::all();
        $vendors = Vendor::all();
        return view('products.edit', compact('categories', 'vendors'))->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->vendor_id = $request->vendor_id;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->dcl_discount = $request->dcl_discount;
        $product->vendor_discount = $request->vendor_discount;
        $product->vat = $request->vat;
        $product->status = $request->status;

        if ($request->hasFile('image')) {
            // Delete old image
            if ($product->image) {
                Storage::delete($product->image);
            }
            // Store image
            $image_path = $request->file('image')->store('products', 'public');
            // Save to Database
            $product->image = $image_path;
        }

        if (!$product->save()) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while updating product.');
        }
        return redirect()->route('products.index')->with('success', 'Success, your product have been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }
        $product->delete();

        return response()->json([
            'success' => true
        ]);
    }
}
