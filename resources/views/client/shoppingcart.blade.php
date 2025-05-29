@extends('client.layoutclient.master')

@section('title', 'Giỏ hàng')

@section('content')

<!-- Phần đường dẫn -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Giỏ hàng</h4>
                    <div class="breadcrumb__links">
                        <a href="{{ url('/') }}">Trang Chủ</a>
                        <span>Giỏ hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Phần giỏ hàng -->
<section class="shopping-cart spad">
    <div class="container">
        @if (isset($cart))
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Tổng cộng</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart as $product)
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img width="90px" height="90px" src="{{ asset('storage/'. $product['image']) }}" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>{{ $product['name'] }}</h6>
                                        <h5>{{ $product['price'] }}</h5>
                                    </div>
                                </td>
                                <form id="updateCartForm" action="{{ route('update.cart', $product['id']) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2" id="quantityInput">
                                                <input type="number" value="{{ $product['quantity'] }}" name="quantity">
                                                <button type="submit" style="display:none;">Cập nhật</button>
                                            </div>
                                        </div>
                                    </td>
                                </form>
                                <td class="cart__price">{{ $product['total'] }}₫</td>
                                <td class="cart__close">
                                    <a href="{{ route('remove.cart', $product['id'] ) }}">
                                        <i class="fa fa-close"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                        <a href="{{ route('shop') }}">Tiếp tục mua sắm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Mã giảm giá</h6>
                    <form action="#">
                        <input type="text" placeholder="Nhập mã giảm giá">
                        <button type="submit">Áp dụng</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Tổng đơn hàng</h6>
                    <ul>
                        @php
                            $total = 0;
                            foreach($cart as $product) {
                                $total += $product['total'];
                            }
                        @endphp
                        <li>Tổng cộng <span>{{ $total }}₫</span></li>
                    </ul>
                    <a href="{{ route('checkout') }}" class="primary-btn">Thanh toán</a>
                </div>
            </div>
        </div>
        @else
        <h1>Giỏ hàng trống</h1>
        @endif
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('updateCartForm');
        const quantityInput = document.getElementById('quantityInput');
        
        function submitForm() {
            form.submit(); // Gửi form khi cần thiết
        }
    
        quantityInput.addEventListener('input', function () {
            submitForm(); // Gửi form khi giá trị của input thay đổi
        });
    
        quantityInput.addEventListener('blur', function () {
            submitForm(); // Gửi form khi input mất focus
        });
    });
</script>
@endsection
