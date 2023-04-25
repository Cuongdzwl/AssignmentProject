<?php

namespace App\Http\Controllers\Api\Management;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = CategoryProductController::getProducts($id)->get();
        return response()->json(
            ['data' => $data]
        );
    }
    public function indexAutoLoad($id)
    {
        $products = CategoryProductController::getProducts($id)->paginate(16);
        return view('categories', compact('products'));
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

    public static function getProducts($category_id)
    {
        return DB::table('category_product')
            ->where('cat_ID', '=', $category_id)
            ->leftJoin('categories', 'category_product.cat_ID', '=', 'categories.id')
            ->leftJoin('products', 'category_product.product_ID', '=', 'products.id')
            ->select('category_product.cat_ID', 'categories.category_name', 'category_product.product_ID', 'products.name', 'products.image', 'products.price');
    }
    public function category()
    {
    }
}
