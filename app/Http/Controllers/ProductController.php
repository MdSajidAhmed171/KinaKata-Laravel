<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\Cart;
use App\models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index(){
        
        $data = Product::all();
        return view('product',['product'=>$data]);
    }
    function detail($id){
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req){
        $data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search',['product'=>$data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');

        }
        else{
            return redirect('/login');
        }
    }
    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::WHERE('user_id', $userId)->count();
    }
    function cartList(){
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')->join('products','cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->select('products.*', 'cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('/cartlist');
    }
    function OrderNow(){
        $userId = Session::get('user')['id'];
        $total = $products = DB::table('cart')->join('products','cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');
        
        return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req){
        $userId = Session::get('user')['id'];
        $allCart= Cart::where('user_id', $userId)->get();
        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        $req->input();
        return redirect('/');
    }
    function myOrders(){
        $userId = Session::get('user')['id'];
        $orders = $products = DB::table('orders')->join('products','orders.product_id', '=', 'products.id')
        ->where('orders.user_id', $userId)
        ->get();

        return view('myorders',['orders'=>$orders]);
    }
    function directOrder(Request $req){
        if($req->session()->has('user')){
            $userid=$req->session()->get('user')['id'];
            $pid =$req->product_id;
            
            $total = DB::table('products')->select('price')->where('id', '=', $pid)->value('price');
            return view('directorder',['total'=>$total, 'pid'=>$pid]);
            

        }
        else{
            return redirect('/login');
        }

    }
    
    function directOrderPlace(Request $req){
        $userId = Session::get('user')['id'];
        $pid =$req->product_id;
        $productId = $pid;
            $order = new Order;
            $order->product_id=$productId;
            $order->user_id=$userId;
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
        $req->input();
        return redirect('/');
    }

}
