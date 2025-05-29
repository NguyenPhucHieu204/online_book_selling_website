<?php

namespace App\Http\Controllers\client;

use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $address=$request-> address."/".$request->district."/".$request->commune."/".$request->province;
        $order = Order::create([
            'user_id' => Auth::id(),
            'order_number' => uniqid('ORDER_'),
            'total_amount' => $request->total_amount,
            'name' => $request->first_name." ".$request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'shipping_address' =>$address,
            'payment_method' => $request->payment_method,
            'status' => 'pending',
        ]);

        foreach ( session()->get('cart')as $product) {
            Order_detail::create([
                'order_id' => $order->id,
                'product_id' => $product['id'],
                'quantity' => $product['quantity'],
                'price' => $product['price'],
            ]);
        }

     
        return redirect()->route('index')->with('success', 'Order placed successfully!');
    }

    
public function index() {

    $userId = Auth::id();

   
    $Order = Order::where('user_id', $userId)->get();
    $Order_detail = Order_detail::all(); // Lấy tất cả các chi tiết đơn hàng

    $Orderhistory = []; // Khởi tạo mảng rỗng để lưu lịch sử đơn hàng

    foreach ($Order as $order) {
        // Lấy các chi tiết đơn hàng liên quan đến đơn hàng hiện tại
        $Order_details = $Order_detail->where('order_id', $order->id);

        // Khởi tạo mảng rỗng để lưu chi tiết của đơn hàng
        $orderDetailsArray = [];

        foreach ($Order_details as $detail) {
            // Lấy sản phẩm tương ứng với chi tiết đơn hàng
            $product = Product::find($detail->product_id);

            // Thêm chi tiết đơn hàng và sản phẩm vào mảng
            $orderDetailsArray[] = [
                'detail' => $detail,
                'product' => $product
            ];
        }

        // Lưu đơn hàng và chi tiết vào mảng Orderhistory
        $Orderhistory[] = [
            'order' => $order,
            'details' => $orderDetailsArray
        ];
    }
    echo "<script>console.log(" . json_encode($Orderhistory) . ");</script>";
    // Trả về Orderhistory hoặc view với dữ liệu
    return view('client.order.index', ['Orderhistory' => $Orderhistory]);
}


public function show($id)
{
    $userId = Auth::id();

    // Fetch the specific order for the logged-in user
    $order = Order::where('user_id', $userId)
        ->where('id', $id)
        ->first();
        
    $Orderhistory = [];
    
   
        // Fetch the order details related to the current order
        $Order_details = Order_detail::where('order_id', $order->id)->get();
    
        // Initialize an array to store the details of the current order
        $orderDetailsArray = [];
    
        foreach ($Order_details as $detail) {
            // Fetch the corresponding product for the order detail
            $product = Product::find($detail->product_id);
    
            // Add the order detail and product to the array
            $orderDetailsArray[] = [
                'detail' => $detail,
                'product' => $product
            ];
        }
    
        // Save the order and its details into the Orderhistory array
        $Orderhistory[] = [
            'order' => $order,
            'details' => $orderDetailsArray
        ];
        echo "<script>console.log(" . json_encode($Orderhistory) . ");</script>";
    
    // Return the view with the order history data
    return view('client.order.show', ['Orderhistory' => $Orderhistory[0]]);
}

// Method to update the order
public function update(Request $request, $id)
{
    $order = Order::findOrFail($id);
    $orderdetail=Order_detail::findOrFail($order['id']);

    $order->update([
        'user_id' => Auth::id(),
        'order_number' => $order->order_number,
        'total_amount' => $request->total_amount,
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'shipping_address' => $request->shipping_address,
        'payment_method' => $request->payment_method,
        'status' => $request->status,
    ]);

    // Cập nhật từng sản phẩm trong đơn hàng nếu cần thiết
   

    return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
}
public function update_detail(Request $request, $id)
{
  
    $orderdetail=Order_detail::findOrFail($id);

    $orderdetail->update([
        'user_id' => Auth::id(),
       
    ]);

    // Cập nhật từng sản phẩm trong đơn hàng nếu cần thiết
   
    return redirect()->back()->with('success', 'Order updated successfully.');
}

}