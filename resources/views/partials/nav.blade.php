<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 5/22/16
 * Time: 3:33 PM
 */
$shopping_cart = is_array(session('cart')) ? session('cart') : array();
$total = 0;
?>
<!--=== Header v5 ===-->
<div class="header-v5 header-static">

    <!-- Topbar v3
    <div class="topbar-v3">
        <div class="search-open">
            <div class="container">
                <input type="text" class="form-control" placeholder="Search">
                <div class="search-close"><i class="icon-close"></i></div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="left-topbar">
                        <li>
                            <a>Mệnh giá (VND)</a>
                            <ul class="currency">
                                <li class="active">
                                    <a href="#">VND <i class="fa fa-check"></i></a>
                                </li>
                                <li><a href="#">USD</a></li>
                            </ul>
                        </li>
                        <li>
                            <a>Ngôn ngữ (VN)</a>
                            <ul class="language">
                                <li class="active">
                                    <a href="#">Viet nam (VN)<i class="fa fa-check"></i></a>
                                </li>
                                <li><a href="#">English (EN)</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="list-inline right-topbar pull-right">
                        <li><a href="shop-ui-add-to-cart.html">Wishlist (0)</a></li>
                        <li><i class="search fa fa-search search-button"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   <!--End Topbar v3 -->

    <!-- Navbar -->
    <div class="navbar navbar-default mega-menu" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                    <a class="navbar-brand" href="http://dodaxin.com/">
                        <img id="logo-header" src="assets/img/dodaxin_logo.png" class="logo" alt="Đồ Da Xịn">
                    </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="cartInfo" class="collapse navbar-collapse navbar-responsive-collapse">
                <!-- Shopping Cart -->
                <ul class="list-inline shop-badge badge-lists badge-icons pull-right cartInfo">
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        <span class="badge badge-sea rounded-x">{{ isset($shopping_cart) ? count($shopping_cart) : 0 }}</span>
                        <ul class="list-unstyled badge-open mCustomScrollbar" data-mcs-theme="minimal-dark">
                        @if(isset($shopping_cart) && count($shopping_cart) > 0 )
                            @foreach($shopping_cart as $cart_item)
                                @if(file_exists(public_path() .'/upload_file/avatar/'.$cart_item['img']))
                                    <li>
                                        <img src="{{asset('/upload_file/avatar/'.$cart_item['img']) }}" alt="">
                                        {{--<button type="button" class="close">×</button>--}}
                                        <div class="overflow-h">
                                            <span>{{  $cart_item['item_name'] or '' }}</span>
                                            <small>{{ $cart_item['quantity'] }} x {{ number_format($cart_item['price']) }}  </small>

                                            <?php $total += ($cart_item['quantity'] * $cart_item['price'])  ?>

                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        @endif


                            <li class="subtotal">
                                <div class="overflow-h margin-bottom-10">
                                    <span>Tổng tiền</span>
                                    <span class="pull-right subtotal-cost">{{ number_format($total) }}</span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="{{ asset('gio-hang') }}" class="btn-u btn-brd btn-brd-hover btn-u-sea-shop btn-block">Xem giỏ hàng</a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="{{ asset('gio-hang') }}" class="btn-u btn-u-sea-shop btn-block">Thanh toán</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- End Shopping Cart -->

                <!-- Nav Menu -->
                <ul class="nav navbar-nav">
                    <!-- Pages -->
                    <li class="{{ empty(Request::segment(1)) ? 'active' : '' }}">
                        <a href="{{ url('/') }}" >
                            Trang chủ
                        </a>

                    </li>
                    <!-- End Pages -->

                    <!-- ví da -->
                    <li class="dropdown {{ Request::is('vi-da-nam') || Request::is('vi-da-nu') ? 'active' : '' }} ">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                            Ví da
                        </a>
                        <ul class="dropdown-menu">
                            <li >
                                <a href="{{ asset('vi-da-nam') }}">Ví Nam</a>
                            </li>
                            <li >
                                <a href="{{ asset('vi-da-nu') }}">Ví Nữ</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End ví da -->

                    <!-- dây lưng -->
                    <li class="{{ Request::is('day-lung') ? 'active' : '' }}">
                        <a href="{{ asset('day-lung') }}" >
                            Dây Lưng
                        </a>
                    </li>
                    <!-- End dây lưng -->

                    <!-- Túi ipad -->
                    <li class="{{ Request::is('tui-da') ? 'active' : '' }}">
                        <a href="{{ asset('tui-da') }}" >
                            Túi Da
                        </a>
                    </li>
                    <!-- End túi Ipad -->

                    <!-- Tin tức -->
                    <li class="{{ Request::is('tin-tuc') ? 'active' : '' }}" >
                        <a href="{{ asset('tin-tuc') }}" >
                            Tin tức
                        </a>
                    </li>
                    <!-- End tin tức -->

                    <!-- Liên hệ -->
                    <li class="{{ Request::is('lien-he') ? 'active' : '' }}">
                        <a href="{{ url('lien-he') }}" >
                            Liên hệ
                        </a>

                    </li>
                    <!-- End Liên hệ -->
                </ul>
                <!-- End Nav Menu -->
            </div>
        </div>
    </div>
    <!-- End Navbar -->
</div>
<!--=== End Header v5 ===-->