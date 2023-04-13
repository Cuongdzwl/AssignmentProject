<?php

namespace App\Http\Controllers\Api\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(16);
        return ProductResource::collection($products); 
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
            'name' => 'required|string|max:255',
            'desc' => 'required'
        ]);
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->desc,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Product created',
            'data' => $product
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::find($product->id);
        return ProductResource::show($product);
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
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required'
        ]);
        $product = Product::find($id);
        if ($product) {
            $product->update([
                'name' => $request->name,
                'description' => $request->desc,
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Product updated',
                'data' => $product
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Product not found',
        ], 404);     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product) {
            $product->delete();    
            return response()->json([
                'success' => true,
                'message' => 'Post deleted',
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Post not found',
        ], 404); 
    }
}
