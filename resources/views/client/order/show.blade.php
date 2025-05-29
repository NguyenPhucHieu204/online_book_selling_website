@extends('client.layoutclient.master')

@section('content')
<div class="container my-5">
    <h1 class="mb-4">Chi Tiết Đơn Hàng</h1>

    <div class="card mb-4">
        <div class="card-header">
            <h3 class="mb-0">Thông Tin Đơn Hàng</h3>
        </div>
        <form action="{{ route('edit.orderdetail', $Orderhistory['order']->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="order_number"><strong>Mã Đơn Hàng:</strong></label>
                            <input type="text" id="order_number" name="order_number" class="form-control" value="{{ $Orderhistory['order']->order_number }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="total_amount"><strong>Tổng Tiền:</strong></label>
                            <input type="text" id="total_amount" name="total_amount" class="form-control" value="{{ $Orderhistory['order']->total_amount }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="name"><strong>Họ Tên:</strong></label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ $Orderhistory['order']->name }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phone"><strong>Số Điện Thoại:</strong></label>
                            <input type="text" id="phone" name="phone" class="form-control" value="{{ $Orderhistory['order']->phone }}">
                        </div>
                        <div class="mb-3">
                            <label for="email"><strong>Email:</strong></label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ $Orderhistory['order']->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="shipping_address"><strong>Địa Chỉ Giao Hàng:</strong></label>
                            <textarea id="shipping_address" name="shipping_address" class="form-control">{{ $Orderhistory['order']->shipping_address }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="payment_method"><strong>Phương Thức Thanh Toán:</strong></label>
                            <input type="text" id="payment_method" name="payment_method" class="form-control" value="{{ $Orderhistory['order']->payment_method }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="status"><strong>Trạng Thái:</strong></label>
                            <select id="status" name="status" class="form-select">
                                <option value="completed" {{ $Orderhistory['order']->status == 'completed' ? 'selected' : '' }}>Hoàn thành</option>
                                <option value="pending" {{ $Orderhistory['order']->status == 'pending' ? 'selected' : '' }}>Chờ xử lý</option>
                                <option value="canceled" {{ $Orderhistory['order']->status == 'canceled' ? 'selected' : '' }}>Đã hủy</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Cập Nhật</button>
            </div>
        </form>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">Danh Sách Sản Phẩm</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Tên Sản Phẩm</th>
                        <th scope="col">Số Lượng</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Tổng</th>
                        <th scope="col">Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Orderhistory['details'] as $detail)
                        <tr>
                            <form action="{{ route('edit.orderdetail', $detail['detail']->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <td>{{ $detail['product']->name }}</td>
                                <td>
                                    <input type="number" name="quantity" value="{{ $detail['detail']->quantity }}" class="form-control">
                                </td>
                                <td>${{ number_format($detail['detail']->price, 2) }}</td>
                                <td>${{ number_format($detail['detail']->quantity * $detail['detail']->price, 2) }}</td>
                                <td>
                                    <button type="submit" class="btn btn-warning">Cập Nhật</button>
                                </td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
