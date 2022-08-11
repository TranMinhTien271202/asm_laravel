<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\DetailCart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function Cart(){
        $total = 0;
        $totalall = 0;
        $cart = Cart::where('users_id', Auth::user()->id)->get()->load('product');
        return view('user.cart.cart', ['cart' => $cart, 'total' => $total,'totalall' => $totalall]);
    }
    public function addCart(Request $request , $id){
        $total = 0;
        $cart = Cart::where('product_id',$id)->where('users_id', Auth::user()->id)->first();
        $product = Product::select('*')->where('id', $id)->first();
        if ($cart && $cart->product_id==$id) {
            $cart->quantily = $cart->quantily + $request->quantily;
            $cart->total = $cart->quantity*$product['price'];
            $cart->save();
            return redirect()->back();
            // return redirect()->route('Cart');
        }
        $data['product_id'] = $id;
        $data['quantily'] = $request->quantily;
        $data['price'] = $product['price'];
        $data['users_id'] = Auth::user()->id;
        $data['total'] = 1 * $product['price'];
        Cart::create($data);
        return redirect()->back();
    }
    public function delete_cart(Request $request)
    {
        Cart::destroy($request->id);
        return back();
    }
    public function check(Request $request)
    {
        $total = 0;
        $totalall = 0;
        if (count(Cart::all()) == null) {
            return back()->with('error', 'giỏ hàng của bạn chưa có sản phẩm nào');
        }
        $cart = Cart::where('id_user', Auth::user()->id)->get();
        return view('clinet.order', [
            'cart' => $cart,
            'total' => $total,
            'totalall' => $totalall
        ]);
    }
    public function detail(Request $request)
    {
        // dd($request->all());
        $cart = Cart::where('id_user', Auth::user()->id)->get();
        $order = new DetailCart();
        $order->fill([
            'id_user' => Auth::user()->id,
            'cart_id' => $cart->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'desc' => $request->desc,

        ])->save();
        
        foreach ($cart as $item) {
            Cart::destroy($item->id);
        }
        return redirect()->route('view_detai');
    }
    public function viewdetai()
    {
        $cart = Cart::where('users_id', Auth::user()->id)->get();
        $donhang = DetailCart::Orderby('created_at', 'DESC')->where('users_id', Auth::user()->id)->get();
        return view('clinet.detai-order', [
            'cart' => $cart,
            'donhang' => $donhang,
        ]);
    }
    
}
