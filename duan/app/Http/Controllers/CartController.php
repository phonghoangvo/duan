<?php

namespace App\Http\Controllers;

use App\Models\Cuahang;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function giohang(){
        $giohang = Cart::instance('cart')->content();
        return view('cart',['giohang'=>$giohang]);
    }

    public function themgiohang(Request $request){
        $product = Cuahang::find($request->id);
        $price = $product->priceSale ? $product->priceSale : $product ->price;
        Cart::instance('cart')->add($product->id,$product->name,$request->quantity,$price)->associate('App\Models\Cuahang;');
        return redirect()->back()->with('message','Sản phẩm được thêm thành công!');
    }
}
