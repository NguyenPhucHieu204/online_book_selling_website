@extends('client.layoutclient.master')

@section('title', 'Thanh toán')

@section('content')

<!-- Phần Breadcrumb -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Thanh toán</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.html">Trang chủ</a>
                        <a href="./shop.html">Cửa hàng</a>
                        <span>Thanh toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Phần Thanh toán -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <form action="{{ route('checkout.create') }}" method="POST">
                @csrf 
                @method('PUT')
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <h6 class="checkout__title">Thông tin thanh toán</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Họ<span>*</span></p>
                                    <input type="text" name="first_name" id="first_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Tên<span>*</span></p>
                                    <input type="text" name="last_name" id="last_name" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Địa chỉ<span>*</span></p>
                            <input type="text" name="address" id="address" placeholder="Số nhà, tên đường..." class="form-control" required>
                        </div>
                        <div class="checkout__input">
                            <p>Xã/Phường<span>*</span></p>
                            <input type="text" name="commune" id="commune" class="form-control" required>
                        </div>
                        <div class="checkout__input">
                            <p>Quận/Huyện<span>*</span></p>
                            <input type="text" name="district" id="district" class="form-control" required>
                        </div>
                        <div class="checkout__input">
                            <p>Tỉnh/Thành phố<span>*</span></p>
                            <input type="text" name="province" id="province" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Số điện thoại<span>*</span></p>
                                    <input type="text" name="phone" id="phone" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Ghi chú đơn hàng</p>
                            <input type="text" name="order_notes" id="order_notes" placeholder="Ghi chú về đơn hàng, ví dụ: Giao hàng ngoài giờ hành chính." class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4 class="order__title">Đơn hàng của bạn</h4>
                            <div class="checkout__order__products">Sản phẩm <span>Tổng</span></div>
                            <ul class="checkout__total__products">
                                @foreach($cart as $product)
                                    <li>{{ $product['id'] }}. {{ $product['name'] }} <span>${{ $product['total'] }}</span></li>
                                @endforeach
                            </ul>
                            <ul class="checkout__total__all">
                                @php
                                    $total = 0;
                                @endphp
                                @foreach($cart as $product)
                                    @php
                                        $total += $product['total'];
                                    @endphp
                                @endforeach
                                <li>Tổng tiền <span>${{ $total }}</span></li>
                                <input type="hidden" name="total_amount" value="{{$total}}">
                            </ul>
                            <div class="checkout__input__checkbox">
                                <label for="payment_method_check">
                                    Thanh toán khi nhận hàng
                                    <input type="checkbox" name="payment_method" id="payment_method_check" value="check_payment">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="payment_method_paypal">
                                    Thanh toán qua Paypal
                                    <input type="checkbox" name="payment_method" id="payment_method_paypal" value="paypal">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <button type="submit" class="site-btn">ĐẶT HÀNG</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
