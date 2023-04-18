<?php

namespace App\Http\Controllers\Api\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\OrderProduct;

class OrderProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderProduct = OrderProduct::all();
        return response()->json([
            'success' => true,
            'date' => $orderProduct
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
            'product_ID' => 'required|exists:products,id',
            'order_ID' => 'required|exists:orders,id',
            'quantity' => 'numeric|integer'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Creating order product failed.',
                'error' => $validator->messages()
            ]);
        }
        $orderProduct = OrderProduct::create($request->all());
        return response([
            'success' => true,
            'date' => $orderProduct
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(OrderProduct $orderProduct)
    {
        return response([
            'success' => true,
            'date' => $orderProduct
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderProduct $orderProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderProduct $orderProduct)
    {
        //
    }
}
