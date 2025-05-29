@extends('client.layoutclient.master')

@section('title', 'Trang chủ')

@section('content')

    <!-- Bắt đầu Phần Banner1 -->
    <!-- Link Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <style>
    /* Background hình ảnh cho toàn bộ Swiper */
    .mySwiper {
        background-image: url('img/banner/background.jpg'); /* đường dẫn ảnh nền */
        background-size: cover;       /* ảnh phủ toàn bộ */
        background-position: center;  /* căn giữa ảnh */
        background-repeat: no-repeat; /* không lặp lại */
        border-radius: 12px;
    }

    /* Đảm bảo ảnh slide full và không bị ảnh hưởng background */
    .swiper-slide img {
        display: block;
        width: 100%;
        height: auto;
        border-radius: 8px;
    }
    </style>

    <!-- Swiper -->
    <div class="swiper mySwiper rounded-4 shadow">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
        <img src="{{ asset('img/banner/valentinebanner1.png') }}" class="w-100" />
        </div>
        <div class="swiper-slide">
        <img src="{{ asset('img/banner/valentinebanner2.png') }}" class="w-100" />
        </div>
    </div>
    <!-- Arrows -->
    <div class="swiper-button-next swiper-button-next_15 swiper-button-white" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-8413f3a437c26ce0"></div>
    <div class="swiper-button-prev swiper-button-prev_15 swiper-button-white" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-8413f3a437c26ce0"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Init Swiper -->
    <script>
    const swiper = new Swiper(".mySwiper", {
        loop: true,
        speed: 500, // tốc độ chuyển slide mượt
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        autoplay: {
        delay: 3000, // tự động chuyển sau 3 giây
        disableOnInteraction: false, // vẫn chạy tự động khi bấm nút
        },
    });
    </script>
    <!-- Kết thúc Phần Banner1 -->

    <!-- Bắt đầu Phần Banner2 -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="{{ asset('img/banner/banner1.jpg') }}" alt="Sách mới">
                        </div>
                        <div class="banner__item__text">
                            <h2>Sách mới</h2>
                            <a href="#">Khám phá ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="{{ asset('img/banner/banner2.jpg') }}" alt="Không gian đọc sách">
                        </div>
                        <div class="banner__item__text">
                            <h2>Không gian đọc sách</h2>
                            <a href="#">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="{{ asset('img/banner/banner3.jpg') }}" alt="Tài liệu">
                        </div>
                        <div class="banner__item__text">
                            <h2>Tài liệu</h2>
                            <a href="#">Xem ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kết thúc Phần Banner2 -->


    <!-- Bắt đầu Phần Sản phẩm -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter=".top-decu">Top đề cử</li>
                        <li data-filter=".new-arrivals">Sách mới</li>
                        <li data-filter=".hot">Hot</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <!-- Top đề cử -->

                <!-- Sách mới -->
                @foreach($new_products as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/' . $product->image) }}">
                                <span class="label">Mới</span>
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('img/icon/heart.png') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('img/icon/compare.png') }}" alt=""> <span>So sánh</span></a></li>
                                    <li><a href="#"><img src="{{ asset('img/icon/search.png') }}" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>{{ $product->name }}</h6>
                                <a href="{{ route('add.cart', $product->id) }}" class="add-cart">+ Thêm vào giỏ hàng</a>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <p>Giá : {{ number_format($product->price, 0, ',', '.') }} VNĐ</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Hot -->
                @foreach($hot_products as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6 mix hot">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/' . $product->image) }}">
                                <span class="label">Hot</span>
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('img/icon/heart.png') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('img/icon/compare.png') }}" alt=""> <span>So sánh</span></a></li>
                                    <li><a href="#"><img src="{{ asset('img/icon/search.png') }}" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>{{ $product->name }}</h6>
                                <a href="{{ route('add.cart', $product->id) }}" class="add-cart">+ Thêm vào giỏ hàng</a>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <p>Giá : {{ number_format($product->price, 0, ',', '.') }} VNĐ</p>               
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Kết thúc Phần Sản phẩm -->


    <!-- Bắt đầu Phần Giới thiệu cửa hàng -->
    <section class="store-info spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="store__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset('img/store/store1.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset('img/store/store2.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset('img/store/store3.jpg') }}"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Về cửa hàng</h2>
                        <p>Chúng tôi chuyên cung cấp các đầu sách chất lượng từ văn học, kinh tế, kỹ năng sống. Giao hàng toàn quốc và hỗ trợ đổi trả trong 7 ngày.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kết thúc Phần Giới thiệu cửa hàng -->

    <!-- Bắt đầu Phần Tin tức  -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Cập nhật mới</span>
                        <h2>Tin tức mới</h2>
                    </div>
                </div>
            </div>
            <!-- Nội dung blog hoặc tin tức khuyến mãi ở đây -->
        </div>
    </section>
    <!-- Kết thúc Phần Tin tức  -->


@endsection
