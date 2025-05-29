@extends('client.layoutclient.master')

@section('title', 'Giới thiệu')

@section('content')

<!-- Phần liên hệ -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__text">
                    <div class="section-title">
                        <span>Thông tin</span>
                        <h2>Liên hệ với chúng tôi</h2>
                        <p>Chúng tôi luôn sẵn sàng hỗ trợ bạn với dịch vụ tận tâm và chuyên nghiệp.</p>
                    </div>
                    <ul>
                        <li>
                            <h4>SchoolBooks</h4>
                            <p>Yên Nghĩa - Hà Đông - Hà Nội <br />0363221724</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <form action="#" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="Họ và tên" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Nội dung tin nhắn" required></textarea>
                                <button type="submit" class="site-btn">Gửi tin nhắn</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
