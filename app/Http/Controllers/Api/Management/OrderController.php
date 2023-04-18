<?php

namespace App\Http\Controllers\Api\Management;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        return response()->json([
            'success' =>true,
            'data' => $order,
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
        $validator = Validator::make($request->all(),[
            'user_ID' => 'required|exists:users,id',
            'total' => 'required|decimal:0,5',
            'status' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return response()->json([
            'success' => false,
            'message' => 'Ordering create failed.',
            'error' => $validator->messages()
        ], 201);
    }
    $order = Order::create($request->all());
    return response()->json([
        'success' => true,
        'data' => $order,
    ],200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($order)
    {
        return response()->json([
            'data' => $order,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $validator = Validator::make($request->all(),[
            'user_ID' => 'exists:users,id',
            'total' => 'decimal:0,5',
            'status' => 'string|max:255'
        ]);
        if ($validator->fails()) {
            return response()->json([
            'success' => false,
            'message' => 'Ordering update failed.',
            'error' => $validator->messages()
        ], 201);
    }
        $order = Order::find($order->id);
        $order->update($request->all());
        return response()->json([
            'success' => true,
            'data' => $order,
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        if($order->delete()){
            return response()->json([
                'success' => true,
                'message' => 'Order deleted',
            ],200);
        }

        return response()->json([
            'success' => false,
            'message' => 'Order not found',
        ], 404);
    }
}
