<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Oder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OderController extends Controller
{
    public function order()
    {
        $total = 0;
        $totalall = 0;
        $cart = Cart::where('users_id', Auth::user()->id)->get()->load('product');
        return view('user.cart.order', ['cart' => $cart, 'total' => $total, 'totalall' => $totalall]);
    }
    public function oderCart(Request $request)
    {
        $order = new Oder();
        $order->fill($request->all());
        $order->save();
        return  back();
    }
    public function listOder()
    {
        $order = Oder::with('product')->paginate(2);
        return view('admin.cart.listcart', ['order' => $order]);
    }
    public function status1(Oder $order, $status)
    {
        // dd($order);
        if ($order->status == 1) {
            $order->update(['status' => 0]);
            return redirect()->back();
        } elseif ($order->status == 2) {
            $order->update(['status' => 1]);
            return redirect()->back();
        } else {
            $order->update(['status' => 2]);
            return redirect()->back();
        }
    }
}
