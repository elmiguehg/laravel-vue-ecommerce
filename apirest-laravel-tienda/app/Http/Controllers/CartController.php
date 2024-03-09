<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;
use Stripe;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add_cart(Request $request, $id)
    {
        $user = Auth::user();
        $userid = $user->id;
        $product = product::find($id);
        $product_exist_id = cart::where('product_id', '=', $id)
            ->where('user_id', '=', $userid)
            ->get('id')->first();
        if ($product_exist_id) {

            $cart = cart::find($product_exist_id)->first();
            $quantity = $cart->quantity;
            $cart->quantity = $quantity + $request->quantity;
            $cart->price = $product->price * $quantity;

            $cart->save();
            return response()->json([
                'status' => true,
                'message' => 'Producto agregado satisfactoriamente'
            ], 200);
        } else {

            $cart = new cart;
            $cart->name = $user->full_name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;
            $cart->product_name = $product->name;
            $cart->price = $product->price * $request->quantity;
            $cart->image = $product->image;
            $cart->Product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->save();

            return response()->json([
                'status' => true,
                'message' => 'Producto agregado satisfactoriamente'
            ], 200);
        }
    }
    public function show_cart()
    {
        $id = Auth::user()->id;
        $cart = cart::where('user_id', '=', $id)->get();
        return response()->json($cart);
    }
    public function remove_cart($id)
    {
        $cart = cart::find($id);
        $cart->delete();
        return response()->json([
            'status' => true,
            'message' => 'Producto eliminada'
        ], 200);
    }
    public function stripePost(Request $request, $totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            "amount" => $totalprice * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Thanks for paument"
        ]);

        $user = Auth::user();
        $userid = $user->id;
        $data = cart::where('user_id', '=', $userid)->get();
        foreach ($data as $data) {
            $order = new order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->product_title = $data->product_title;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->Product_id;

            $order->payment_status = 'Paid';
            $order->delivery_status = 'processing';
            $order->save();

            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();
        }

        Session::flash('success', 'Payment successful!');
        return back();
    }
}
