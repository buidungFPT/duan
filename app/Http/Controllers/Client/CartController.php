<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartDetail;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function addToCart(Request $req){
        $cart = Cart::where('user_id', Auth::id());
        if($cart->exists()){
            // Đã có giỏ hàng => cập nhật Cart detail
            $cart = $cart->first();
            $cartDetail = CartDetail::where('cart_id',  $cart->id)->where('products_id',$req->product_id );
            if($cartDetail->exists()){
                $cartDetail->update([
                    'quantity'  => intval($cartDetail->first()->quantity) + intval($req->quantity)
                ]);
            }else{
                CartDetail::create([
                    'cart_id' => $cart->id,
                    'products_id' => $req->products_id,
                    'quantity'  => $req->quantity
                ]);
            }
        }else{
            $newCart = Cart::create([
                'user_id' =>Auth::id()
            ]);
            CartDetail::create([
                'cart_id' =>$newCart->id,
                'products_id' => $req->product_id,
                'quantity' => $req->quantity
                
            ]);
        }
        return redirect()->route('client.user.viewCart');
    }
    public function viewCart(){

    }
}
