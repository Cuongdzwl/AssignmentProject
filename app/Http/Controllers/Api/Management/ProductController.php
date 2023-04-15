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
        $products = Product::latest()->paginate(5);
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
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'count' => 'required|integer',
            'image' => 'required|image|mimes:jpg,png,gif,jpeg,svg|max:2048',
            'price' => 'required|unsigned|double'
        ]);
        // Fetch the product data
        $product = $request->all();

        // Edit the product image's path
        if ($image = $request->file('image')) {
            $destianationPath = 'images/';
            $profileImage = date('Ymdis') . '.' . $image->getClientOriginalName();
            $image->move($destianationPath, $profileImage);// Move the image to the destination directory
            $product['image'] = $profileImage;

            Product::created($product);
        }
        
        // Return success response
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
        return new ProductResource($product);
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
        // Validation 
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'count' => 'required|integer',
            'image' => 'required|image|mimes:jpg,png,gif,jpeg,svg|max:2048',
            'price' => 'required|unsigned|double'
        ]);

        $product = Product::find($id);

        if ($product) {
            $product->update([
                'name' => 'required|string|max:255',
                'description' => 'required',
                'count' => 'required|integer',
                'image' => 'required|image|mimes:jpg,png,gif,jpeg,svg|max:2048',
                'price' => 'required|unsigned|double'
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
