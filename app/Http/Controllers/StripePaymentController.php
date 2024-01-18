<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

    public function stripe()
    {
        $data['user'] = Auth::user();
        $data['stripe'] = Order::where('status', 'pending')->with('orderDetail', 'user')->latest('created_at')->first();

        if ($data['stripe']) {
            return view('stripe', $data);
        } else {
            abort(403);
        }
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        // dd( $request->receiver);
        try {
            DB::beginTransaction();
            $order = new Order();
            $order->user_id = $request->ordered_by;
            $order->address = $request->address;
            $order->contact = $request->contact;
            $order->total_amount = $request->total_amount;
            $order->receiver_name = $request->receiver;
            $order->status = 'paid';
            $order->save();

            $carts = Cart::where('user_id', Auth::user()->id)->with('product')->where('status', 'active ')->select('product_id', 'user_id', 'quantity')->get();
            $orders = Order::latest()->take(1)->first();
            foreach ($carts as $item) {
                $total_amount =  $item->product->price * $item->quantity;
                $order_detail = new OrderDetail();
                $order_detail->product_id = $item->product_id;
                $order_detail->quantity = $item->quantity;
                $order_detail->order_id = $orders->id;
                $order_detail->total_amount = $total_amount;
                $order_detail->save();
            }

            $carter = Cart::where('user_id', Auth::user()->id)->where('status', 'active ')->get();
            foreach ($carter as $items) {
                $carted = Cart::find($items->id);
                $carted->product_id = $items->product_id;
                $carted->user_id = $items->user_id;
                $carted->quantity = $items->quantity;
                $carted->status = "inactive";
                $carted->save();
            }

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            Stripe\Charge::create([
                "amount" => $request->total_amount * 100,
                "currency" => "aud",
                "source" => $request->stripeToken,
                "description" => "Test payment from Monkey"
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Session::flash('error', 'Operation failed');
            return redirect(route('cart.index'));
        }
        Session::flash('success', 'Payment successful!');
        return redirect(route('home'));
    }
}
