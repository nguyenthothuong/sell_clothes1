@extends('admin.layouts.master')

@section('breadcrumb')
    Bảng điều khiển
@endsection

@section('content')
<main class="app-layout-content">
    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <!-- Stats -->
       
        <!-- .row -->
        <!-- End stats -->
       
        <!-- .row -->
       
        <!-- .row -->
        <div class="container-fluid p-y-md">
        <div class="card">
            <div class="card-header">
                <h4>{{ $numberOfOrders }} Đơn hàng</h4>
            </div>
                <table style="border:1px solid #BAEDD3">
                    <th style="width: 300px;border-right: 1px solid #BAEDD3;">
                        <a href="">
                            <a href=""><p>Đang chờ xử lý</p>
                            <p class="h3 m-t-sm m-b-0">{{ $numberOfPendingOrders }}</p></a>
                        </a>
                    </th>
                    <th style="width: 300px;border-right: 1px solid #BAEDD3">
                        <a href="">
                            <p>Đã duyệt</p>
                            <p class="h3 m-t-sm m-b-0">{{ $numberOfApprovedOrders }}</p>
                        </a>
                    </th>
                    <th style="width: 300px;border-right: 1px solid #BAEDD3">
                        <a href="">
                            <p>Hoàn thành</p>
                            <p class="h3 m-t-sm m-b-0">{{ $numberOfCompleteOrders }}</p>
                        </a>
                    </th>
                    <th style="width: 300px;border-right: 1px solid #BAEDD3">
                        <a href="">
                            <p>Đã hủy</p>
                            <p class="h3 m-t-sm m-b-0">{{ $numberOfCancelledOrders }}</p>
                        </a>
                    </th>
                </table>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
        <!-- .row -->
    </div>
    <!-- .container-fluid -->
    <!-- End Page Content -->
</main>
@endsection

@section('javascript')

    <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
    <script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/jquery.scrollLock.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script src="{{ asset('admin/js/app-custom.js') }}"></script>

    <!-- Page Plugins -->
    <script src="{{ asset('admin/js/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/flot/jquery.flot.pie.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/flot/jquery.flot.stack.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/flot/jquery.flot.resize.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('admin/js/pages/index.js') }}"></script>
    <script>
        $(function () {
            // Init page helpers (Slick Slider plugin)
            App.initHelpers('slick');
        });
    </script>

@endsection