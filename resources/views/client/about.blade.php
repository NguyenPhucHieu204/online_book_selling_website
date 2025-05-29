@extends('client.layoutclient.master')

@section('title', 'Giới Thiệu Cửa Hàng Sách')

@section('content')

<!-- Phần điều hướng -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Giới Thiệu Cửa Hàng Sách</h4>
                    <div class="breadcrumb__links">
                        <a href="{{ url('/') }}">Trang Chủ</a>
                        <span>Giới Thiệu</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Giới thiệu -->
<section class="about spad">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="about__pic text-center">
                    <img src="{{ asset('img/about/store_intro.jpg') }}" class="img-fluid rounded shadow" alt="Cửa hàng sách trực tuyến">
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                <div class="about__item">
                    <h4>Chúng Tôi Là Ai?</h4>
                    <p>Chúng tôi là một cửa hàng sách trực tuyến chuyên cung cấp các đầu sách chất lượng thuộc nhiều lĩnh vực: học thuật, kỹ năng, văn học, thiếu nhi và hơn thế nữa. Với sứ mệnh lan toả tri thức, chúng tôi mong muốn mang sách đến tay mọi người một cách dễ dàng và nhanh chóng.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                <div class="about__item">
                    <h4>Điểm Khác Biệt</h4>
                    <p>Chúng tôi không chỉ bán sách, mà còn giúp bạn lựa chọn sách phù hợp thông qua các đề xuất cá nhân hóa, đánh giá người dùng, chương trình khuyến mãi định kỳ và dịch vụ chăm sóc khách hàng tận tâm.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                <div class="about__item">
                    <h4>Tại Sao Chọn Chúng Tôi?</h4>
                    <p>Giá cả hợp lý, giao hàng nhanh chóng, sản phẩm đa dạng, cập nhật liên tục cùng với hệ thống giỏ hàng – thanh toán – theo dõi đơn hàng tiện lợi, chúng tôi cam kết mang đến trải nghiệm mua sắm sách tuyệt vời nhất cho bạn.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cơ sở vật chất hoặc hệ thống -->
<section class="clients spad bg-light">
    <div class="container">
        <div class="section-title text-center">
            <h1><span>Hệ Thống & Dịch Vụ</span></h1>
            <h2>Trải Nghiệm Mua Sắm Trực Tuyến Hiện Đại</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <p class="text-center">Cửa hàng của chúng tôi được xây dựng trên nền tảng công nghệ hiện đại: từ tìm kiếm nhanh chóng, thanh toán bảo mật, cho đến quản lý đơn hàng thông minh. Mọi thứ đều hướng đến sự thuận tiện và hài lòng của bạn.</p>
            </div>
        </div>
        <div class="row">
            @for ($i = 1; $i <= 4; $i++)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="client__item text-center">
                        <img src="{{ asset('img/about/store_' . $i . '.jpg') }}" 
                             class="img-fluid rounded shadow"
                             style="width: 100%; height: 200px; object-fit: cover; aspect-ratio: 4/3;"
                             alt="Hệ thống bán sách {{ $i }}">
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

@endsection
