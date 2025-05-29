<!-- Thanh bên -->
<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <!-- Tiêu đề logo -->
    <div class="logo-header" data-background-color="dark">
      <a href="index.html" class="logo">
        <img src="{{ asset('img/logo_admin.png') }}" alt="Thương hiệu thanh điều hướng" class="navbar-publisher" height="50" />
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- Kết thúc Tiêu đề logo -->
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-item active">
          <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
            <i class="fas fa-home"></i>
            <p>Thương hiệu</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="dashboard">
            <ul class="nav nav-collapse">
              <li><a href="{{ route('admin.publisher.index') }}"><span class="sub-item">Danh sách</span></a></li>
              <li><a href="{{ route('admin.publisher.create') }}"><span class="sub-item">Thêm mới</span></a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item active">
          <a data-bs-toggle="collapse" href="#category" class="collapsed" aria-expanded="false">
            <i class="fas fa-home"></i>
            <p>Danh mục</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="category">
            <ul class="nav nav-collapse">
              <li><a href="{{ route('admin.category.index') }}"><span class="sub-item">Danh sách</span></a></li>
              <li><a href="{{ route('admin.category.create') }}"><span class="sub-item">Thêm mới</span></a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item active">
          <a data-bs-toggle="collapse" href="#order" class="collapsed" aria-expanded="false">
            <i class="fas fa-home"></i>
            <p>Đơn hàng</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="order">
            <ul class="nav nav-collapse">
              <li><a href="{{ route('admin.orders.index') }}"><span class="sub-item">Danh sách</span></a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item active">
          <a data-bs-toggle="collapse" href="#product" class="collapsed" aria-expanded="false">
            <i class="fas fa-home"></i>
            <p>Sản phẩm</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="product">
            <ul class="nav nav-collapse">
              <li><a href="{{ route('admin.product.index') }}"><span class="sub-item">Danh sách</span></a></li>
              <li><a href="{{ route('admin.product.create') }}"><span class="sub-item">Thêm mới</span></a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item active">
          <a data-bs-toggle="collapse" href="#user" class="collapsed" aria-expanded="false">
            <i class="fas fa-home"></i>
            <p>Người dùng</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="user">
            <ul class="nav nav-collapse">
              <li><a href="{{ route('admin.users.index') }}"><span class="sub-item">Danh sách</span></a></li>
              <li><a href="{{ route('admin.users.create') }}"><span class="sub-item">Thêm mới</span></a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- Kết thúc Thanh bên -->
