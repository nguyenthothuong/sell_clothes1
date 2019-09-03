<aside class="app-layout-drawer">
    <!-- Drawer scroll area -->
    <div class="app-layout-drawer-scroll">
        <!-- Drawer logo -->
        <div id="logo" class="drawer-header">
            <a href="{{ route('admin.dashboard') }}"><img class="img-responsive" src="{{ asset('admin/img/logo/logo.png') }}" title="AppUI" alt="AppUI" /></a>
        </div>

        <!-- Drawer navigation -->
        <nav class="drawer-main">
            <ul class="nav nav-drawer">

                <li class="nav-item nav-drawer-header">Quản trị viên</li>

                <li class="nav-item active">
                    <a href="{{ route('admin.dashboard') }}"><i class="ion-ios-speedometer-outline"></i> Bảng điều khiển</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.user.index') }}"><i class="ion-ios-people-outline"></i> Tài khoản</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}"><i class="ion-ios-list-outline"></i> Danh mục</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.products.index') }}"><i class="ion-ios-book-outline"></i> Sản phẩm</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.orders.index') }}"><i class="ion-ios-paper-outline"></i> Đơn hàng</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.comments.index') }}"><i class="ion-ios-chatboxes-outline"></i> Bình luận</a>
                </li>

                @yield('function')

            </ul>
        </nav>
        <!-- End drawer navigation -->

    </div>
    <!-- End drawer scroll area -->
</aside>
