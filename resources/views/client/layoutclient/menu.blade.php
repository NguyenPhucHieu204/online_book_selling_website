<div id="preloader">
    <div class="loader"></div>
</div>

<!-- Bắt đầu Menu Offcanvas -->

<!-- Kết thúc Menu Offcanvas -->

<!-- Bắt đầu Phần Tiêu đề -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Đọc sách mọi lúc, mọi nơi – đơn giản, nhanh chóng và miễn phí.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links"></div>
                        <div class="header__top__hover">
                            @if (Auth::user() !== null)
                                <span>{{ Auth::user()->name }}</span>
                            @else
                                <span>Login</span>
                            @endif
                            <ul>
                                @if (Auth::user() !== null)
                                    <li>
                                        <x-dropdown-link :href="route('profile.edit')">
                                            <span style="color: black">Hồ sơ</span>
                                        </x-dropdown-link>
                                    </li>
                                    @if (Auth::user()->role == 'admin')
                                        <x-dropdown-link :href="route('admin.')">
                                            <span style="color: black">Quản trị viên</span>
                                        </x-dropdown-link>
                                    @endif
                                    <!-- Đăng xuất -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <li>
                                            <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                <span style="color: black">Đăng xuất</span>
                                            </x-dropdown-link>
                                        </li>
                                    </form>
                                @else
                                    <li>
                                        <x-dropdown-link :href="route('login')">
                                            <span style="color: black">login</span>
                                        </x-dropdown-link>
                                    </li>
                                    <li>
                                        <x-dropdown-link :href="route('register')">
                                            <span style="color: black">register</span>
                                        </x-dropdown-link>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="{{ url('/') }}"><img src="img/logo.png" alt="Logo"></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{ route('index') }}">Trang chủ</a></li>
                        <li class="{{ request()->routeIs('shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">Cửa hàng</a></li>
                        <li><a href="#">Giới thiệu</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('about') }}">Về chúng tôi</a></li>
                                <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                            </ul>
                        </li>
                        <li class="{{ request()->routeIs('order.history') ? 'active' : '' }}" ><a href="{{ route('order.history') }}">Lịch sử giao dịch</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option"> 
                    <a href="{{ route('cart.index') }}"><img src="img/icon/cart.png" alt="danh sách mượn"></a>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
