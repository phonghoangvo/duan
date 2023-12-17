<?php

namespace App\Http\Controllers;
use App\Models\Cuahang;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(){
        return view('cart');
    }
    public function cartcheck(){
        return view('cart_check');
    }
    public function addToCart($id){
        $product = Cuahang::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])){
            $cart[$id]['quanlity']++;
        }else{
            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "img" => $product->img,
                "quantity" => 1,
                "price" => $product->price,
            ];
        }

        session()->put("cart", $cart);
        return redirect()->back()->with("add-to-cart","Bạn đã thêm sản phẩm vào giỏ hàng");

    }
    public function updateCart(Request $request){
        dd($request->all());
        if($request->id && $request->quantity){
            $cart = session()->get('cart', []);
    
            if(isset($cart[$request->id])){
                $cart[$request->id]["quantity"] = $request->quantity;
                session()->put('cart', $cart);
                session()->flash('success', 'Giỏ hàng đã được cập nhật');
            }
        }
    }    
    
    public function remove(Request $request){
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash("success", "Bạn đã xóa sản phẩm khỏi giỏ hàng");
        }
    }
    
}
