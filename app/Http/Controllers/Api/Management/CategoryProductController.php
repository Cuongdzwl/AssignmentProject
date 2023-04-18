<?php

namespace App\Http\Controllers\Api\Management;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryProducts = CategoryProduct::all();
        return response()->json([
            'success' => true,
            'data' => $categoryProducts,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cat_ID' => 'required|exists:categories,id',
            'product_ID' => 'required|exists:products,id',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'The selected cat ID or product ID is invalid.',
                'error' => $validator->messages()
            ]);
        }
        $categoryProduct = CategoryProduct::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $categoryProduct,
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryProduct $categoryProduct)
    {

        return response()->json([
            'data' => $categoryProduct,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryProduct $categoryProduct)
    {
        $validator = Validator::make($request->all(), [
            'cat_ID' => 'exists:categories,id',
            'product_ID' => 'exists:products,id',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'The selected cat ID or product ID is invalid.',
                'error' => $validator->messages()
            ]);
        }
        $categoryProduct = CategoryProduct::find($categoryProduct->id);
        $categoryProduct->update($request->all());
        return response()->json([
            'success' => true,
            'data' => $categoryProduct,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryProduct $categoryProduct)
    {
        if ($categoryProduct->delete()) {
            return response()->json([
                'success' => true,
                'message' => 'Category Product deleted',
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'Category not found',
        ], 404);
    }
}
