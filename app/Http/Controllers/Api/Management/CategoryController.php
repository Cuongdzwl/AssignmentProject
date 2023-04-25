<?php

namespace App\Http\Controllers\Api\Management;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Collection;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('category_name','desc')->paginate(16);
        return CategoryResource::collection($categories);
    }

    public function indexAutoLoadCategories(){
        $categories = Category::latest()->paginate(16);
        return view('admin.categories.index',compact('categories'));
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
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|string|max:255',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Category creating failed',
                'error' => $validator->messages()
            ], 201);
        }
        // Fetch the category data
        $category = $request->all();

        Category::create($category);

        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Category created',
            'data' => $category
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'category_name' => 'string|max:255',
            'description' => '',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Category creating failed',
                'error' => $validator->messages()
            ], 201);
        }
        $category = Category::find($category->id);

        if ($category) {
            $category->update($request->all());
            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Category created',
                'data' => $category
            ], 201);
        }
        return response()->json([
            'success' => true,
            'message' => 'Category not found'
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category) {
            $category->delete();
            return response()->json([
                'success' => true,
                'message' => 'Category deleted',
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Category not found',
        ], 404);
    }
}
