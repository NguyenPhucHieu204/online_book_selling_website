<?php

namespace App\Http\Controllers\client;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartSessionController extends Controller
{ 

    // view
    public function viewCart()
{

        // Nếu sản phẩm chưa có trong giỏ hàng, thêm sản phẩm mới
      
    $cart = session()->get('cart');
    $total=0; 
 
    return view('client.shoppingcart', compact('cart','total'));
}

// add cart session 
    public function addToCart($id)
{
    // Giả sử bạn có một model Product để lấy thông tin sản phẩm
    $product = Product::find($id);

    // Kiểm tra giỏ hàng đã có trong session chưa
    $cart = session()->get('cart', []);

    // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng
    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        // Nếu sản phẩm chưa có trong giỏ hàng, thêm sản phẩm mới
        $cart[$id] = [
            "id"=> $product->id,
            "name" => $product->name,
            "price" =>$product->price,
            "image" => $product->image,
            "quantity" => 1,
            "total"=>$product->price,
        ];
    }
    // Cập nhật giỏ hàng trong session
    session()->put('cart', $cart);

    return redirect(route('index'))->with('success', 'Product added to cart successfully!');
}



public function updateCart(Request $request, $id)
{
    $cart = session()->get('cart');

    if (isset($cart[$id])) {
        $quantity =  $request->input('quantity'); // Chuyển đổi thành số nguyên

        if ($quantity <= 0) {
            $this->removeFromCart($id); // Đảm bảo phương thức này tồn tại
        } else {
            $cart[$id]['quantity'] = $quantity;
            session()->put('cart', $cart);
        }
        $total=$quantity*$cart[$id]['price'];
        $cart[$id]['total']= $total;
        session()->put('cart', $cart);
    }

    return redirect()->back()->with('success', 'Cart updated successfully!');
}


public function removeFromCart($id)
{
    $cart = session()->get('cart');

    if(isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }

    return redirect()->back()->with('success', 'Product removed from cart successfully!');
}

public function viewcheckout()
{

        // Nếu sản phẩm chưa có trong giỏ hàng, thêm sản phẩm mới      
    $cart = session()->get('cart');
    $total=0; 
 
    return view('client.checkout', compact('cart','total'));
}


}
