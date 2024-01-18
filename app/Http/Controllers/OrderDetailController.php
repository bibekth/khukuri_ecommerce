<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $cart = Cart::where('user_id', Auth::user()->id)->where('status', 'active ')->select('product_id','user_id', 'quantity')->get();
    //     $order = Order::latest()->take(1)->first();
    //     dd($order->id);
    //     foreach ($cart as $item) {
    //         $total_amount =  $item->cartPrice->price * $item->quantity;
    //         // dd($item->price_id);
    //         $order_detail = new OrderDetail();
    //         $order_detail->price_id = $item->foodprice_id;
    //         $order_detail->quantity = $item->quantity;
    //         $order_detail->order_id = $order->id;
    //         $order_detail->total_amount = $total_amount;

    //         // $order_detail->user_id = $item->user_id;
    //         $order_detail->save();
    //     }
    //     return redirect('/disable-cart');

    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function show(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderDetail $orderDetail)
    {
        //
    }
}
