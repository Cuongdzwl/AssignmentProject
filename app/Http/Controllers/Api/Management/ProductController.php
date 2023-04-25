<?php

namespace App\Http\Controllers\Api\Management;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    static $PRODUCT_IN_A_PAGE = 16;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(ProductController::$PRODUCT_IN_A_PAGE);
        return ProductResource::collection($products);
    }
    public function indexAutoLoadProducts()
    {
        $products = Product::latest()->paginate(ProductController::$PRODUCT_IN_A_PAGE);
        return view('admin.products.index', compact('products'));
    }

    public function indexAutoLoad(){
        $products = Product::paginate(ProductController::$PRODUCT_IN_A_PAGE);
        return view('product.index',compact('products'));
    }
    public function searchAutoLoad(Request $request)
    {
        if($request->keyword){
            $products = Product::where("name", 'LIKE', '%' . $request->keyword . '%')->latest()->paginate(ProductController::$PRODUCT_IN_A_PAGE);
            return view('search',compact('products'));
        }
        
        return redirect('/');
    }
    public function search($keyword)
    {
        $products = Product::where("name", 'LIKE', '%' . $keyword . '%')->latest()->paginate(ProductController::$PRODUCT_IN_A_PAGE);
        return response()->json(
            [
                'success' => true,
                'data' => $products
            ]
        );
    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Product $product, Request $request)
    {

        // Validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required',
            'quantity' => 'required|numeric|integer',
            'image' => 'required|image|mimes:jpg,png,gif,jpeg,svg|max:2048',
            'price' => 'required|decimal:0,5'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Product creating failed',
                'error' => $validator->messages()
            ]);
        }

        // Fetch the product data
        $product = $request->all();
        $product['price'] = round($product['price'], 5);

        // Edit the product image's path
        if ($image = $request->file('image')) {
            $destianationPath = '/images';
            $profileImage = date('Ymdis') . '.' . $image->getClientOriginalName();
            $image->move($destianationPath, $profileImage); // Move the image to the destination directory
            $product['image'] = $profileImage;

            Product::create($product);

            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Product created',
                'data' => $product
            ], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Produc  $product
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
     * @param  Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // Validation 
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255',
            'description' => '',
            'quantity' => 'numeric|integer',
            'image' => 'image|mimes:jpg,png,gif,jpeg,svg|max:2048',
            'price' => 'decimal:0,5'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Product updating failed',
                'error' => $validator->messages()
            ], 201);
        }
        $newProduct = $request->all();

        if (isset($newProduct['price'])) {
            $newProduct['price'] = round($newProduct['price'], 5);
        }

        $product = Product::find($product->id);

        if ($image = $request->file('image')) {
            $destianationPath = 'images/';
            $profileImage = date('Ymdis') . '.' . $image->getClientOriginalName();
            $image->move($destianationPath, $profileImage);
            $newProduct['image'] = $profileImage;
        } else {
            unset($newProduct['image']);
        }

        if ($product) {
            $product->update($newProduct);
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
                'message' => 'Product deleted',
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Product not found',
        ], 404);
    }

}
