
@extends('layouts.main')

@section('content')

    @include('partials.banner')

    <!--=== Product Content ===-->
    <div class="container content-md">

        <!--=== Illustration v1 === -->
        <div class="row margin-bottom-60">
            <div class="col-md-6 md-margin-bottom-30">
                <div class="overflow-h">
                    <div class="illustration-v1 illustration-img1">
                        <div class="illustration-bg">
                            <div class="illustration-ads ad-details-v1">
                                <h3>Khuyến mãi lớn <strong>SALE</strong> 30% - 60% <strong>off</strong></h3>
                                <a class="btn-u btn-brd btn-brd-hover btn-u-light" href="#">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="overflow-h">
                    <a class="illustration-v1 illustration-img2" href="#">
                        <span class="illustration-bg">
                            <span class="illustration-ads ad-details-v2">
                                <span class="item-time">100% da thật</span>
                                <span class="item-name">Da Cá Sấu</span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!--=== End Illustration v1 ===-->


        <div class="heading heading-v1 margin-bottom-20">
            <h1>Welcome to "Đồ Da Xịn"</h1>
            <p style="text-align: left"><a href="http://dodaxin.com/" title="Đồ da xịn">Đồ da xịn</a> thương hiệu đồ da
                uy tín, chất lượng. Đảm bảo 100% da thật (da bò), mẫu mã đẹp, chất lượng tốt. Chúng tôi cam kết mang đến
                cho các khách hàng những sản phẩm chất lượng với giá cả hợp lí.</p>
            <p style="text-align: left">Liên tục cập nhật những mẫu mã mới nhất, bắt kịp xu hướng đồ da trên thị trường,
                thiết kế sang trọng, mẫu mã hợp thời trang chắc chắn sẽ đem đến cho bạn những trải nghiệm ưng ý khi lựa
                chọn sản phẩm của <a href="http://dodaxin.com/" title="dodaxin.com">dodaxin.com</a></p>
            <p style="text-align: left">Hiện tại <a href="http://dodaxin.com/" title="Đồ da xịn">Đồ da xịn</a> chuyên
                cung cấp: túi ipad nam, ví da nam, ví da nữ, dây lưng nam... với chất liệu da cao cấp, mà giá cả hợp lí
                ai cũng có thể mua và sử dụng sản phẩm của <a href="http://dodaxin.com/"
                                                              title="dodaxin.com">dodaxin.com</a></p>
        </div>




        <!--=== Illustration v3 ===-->
        <div class="row margin-bottom-50">
            <div class="col-md-4 md-margin-bottom-30">
                <div class="overflow-h">
                    <a class="illustration-v3 illustration-img1" href="{{ asset('vi-da-nam') }}">
                        <span class="illustration-bg">
                            <span class="illustration-ads">
                                <span class="illustration-v3-category">
                                    <span class="product-category">Ví da</span>
                                    <span class="product-amount">56 sản phẩm</span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 md-margin-bottom-30">
                <div class="overflow-h">
                    <a class="illustration-v3 illustration-img2" href="{{ asset('day-lung') }}">
                        <span class="illustration-bg">
                            <span class="illustration-ads">
                                <span class="illustration-v3-category">
                                    <span class="product-category">Dây lưng</span>
                                    <span class="product-amount">56 sản phẩm</span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="overflow-h">
                    <a class="illustration-v3 illustration-img3" href="{{ asset('tui-da') }}">
                        <span class="illustration-bg">
                            <span class="illustration-ads">
                                <span class="illustration-v3-category">
                                    <span class="product-category">Túi sách</span>
                                    <span class="product-amount">56 sản phẩm</span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!--=== End Illustration v3 ===-->

        @if(isset($new_items) && count($new_items) > 0 )
        <div class="heading heading-v1 margin-bottom-40">
            <h2>Sản phẩm mới</h2>
        </div>

        <!--=== Illustration v2 ===-->
        <div class="illustration-v2 margin-bottom-60">
            <div class="customNavigation margin-bottom-25">
                <a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
                <a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
            </div>

            <ul class="list-inline owl-slider">
                @foreach($new_items as $n_item_obj)
                    @if(file_exists(public_path() .'/upload_file/avatar/'.$n_item_obj->image_file_name))
                    <li class="item">
                        <div class="product-img">
                            <a href="{{ asset($n_item_obj->name_url) }}"><img class="full-width img-responsive" src="{{ asset('upload_file/avatar/'.$n_item_obj->image_file_name) }}" alt=""></a>
                            <a class="product-review" href="{{ asset($n_item_obj->name_url) }}" title="{{ $n_item_obj->name or '' }}">Chi tiết</a>
                            <a class="add-to-cart" href="{{ asset($n_item_obj->name_url) }}"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="product-description product-description-brd">
                            <div class="overflow-h margin-bottom-5">
                                <div class="pull-left">
                                    <h4 class="title-price"><a href="{{ asset($n_item_obj->name_url) }}">{{ $n_item_obj->code or '' }}</a></h4>
                                    <span class="gender text-uppercase">{{ $n_item_obj->name or '' }}</span>
                                    {{--<span class="gender">{{ $n_item_obj->code or '' }}</span>--}}
                                </div>
                                <div class="product-price">
                                    <span class="title-price">{{ !empty($n_item_obj->unit_price) && $n_item_obj->unit_price > 0 ? number_format($n_item_obj->unit_price) : '' }}</span>
                                </div>
                            </div>
                            <ul class="list-inline product-ratings">
                                <li><i class="rating-selected fa fa-star"></i></li>
                                <li><i class="rating-selected fa fa-star"></i></li>
                                <li><i class="rating-selected fa fa-star"></i></li>
                                <li><i class="rating fa fa-star"></i></li>
                                <li><i class="rating fa fa-star"></i></li>
                            </ul>
                        </div>
                    </li>
                    @endif
                @endforeach

            </ul>
        </div>
        @endif
        <!--=== End Illustration v2 ===-->
    </div>
    <!--=== End Product Content ===-->



    <!--=== Collection Banner ===-->
    <div class="collection-banner margin-bottom-60">
        <div class="container">
            <div class="col-md-7 md-margin-bottom-50">
                <h2>Đồ Da Xịn 100%</h2>
                <p>Hàng việt nam chất lượng cao, chuyên xuất khẩu, Da thật 100%</p><br>
                <a href="{{ asset('vi-da-nam') }}" class="btn-u btn-brd btn-brd-hover btn-u-light">Xem chi tiết</a>
            </div>
            <div class="col-md-5">
                <div class="overflow-h">
                    <span class="percent-numb">30</span>
                    <div class="percent-off">
                        <span class="discount-percent">%</span>
                        <span class="discount-off">off</span>
                    </div>
                    <div class="new-offers shop-bg-green rounded-x">
                        <p>new</p>
                        <span>Products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=== End Collection Banner ===-->

    <div class="container">
        <!--=== Product Service ===-->
        <div class="row margin-bottom-60">
            <div class="col-md-4 product-service md-margin-bottom-30">
                <div class="product-service-heading">
                    <i class="fa fa-truck"></i>
                </div>
                <div class="product-service-in">
                    <h3>Miễn Phí Vận Chuyển</h3>
                    <p>Đối với những đơn hàng có giá trị >= 500,000 nghìn, sẽ được miễn phí vẫn chuyển</p>
                    <a href="#">+Read More</a>
                </div>
            </div>
            <div class="col-md-4 product-service md-margin-bottom-30">
                <div class="product-service-heading">
                    <i class="icon-earphones-alt"></i>
                </div>
                <div class="product-service-in">
                    <h3>Chăm Sóc Khách Hàng</h3>
                    <p>Đội ngũ chăm sóc khách hàng nhiệt tình và chu đáo, cam kết làm hài lòng khách hàng</p>
                    <a href="#">+Read More</a>
                </div>
            </div>
            <div class="col-md-4 product-service">
                <div class="product-service-heading">
                    <i class="icon-refresh"></i>
                </div>
                <div class="product-service-in">
                    <h3>Bảo Hành Miễn Phí</h3>
                    <p>"Còn Xài Còn Bảo Hành" đó là phương châm của chúng tôi</p>
                    <a href="#">+Read More</a>
                </div>
            </div>
        </div><!--/end row-->
        <!--=== End Product Service ===-->

        <!--=== Illustration v4 ===-->
        <div class="row illustration-v4 margin-bottom-40">
            <div class="col-md-4">
                <div class="heading heading-v1 margin-bottom-20">
                    <h2>Ví Da</h2>
                </div>

                @if(isset($vida_items) && count($vida_items) > 0)
                    @foreach($vida_items as $item_obj)
                        @if(file_exists(public_path() .'/upload_file/avatar/'.$item_obj->image_file_name))
                        <div class="thumb-product">
                            <a href="{{ $item_obj->name_url or '' }}"> <img class="thumb-product-img" src="{{ asset('upload_file/avatar/'.$item_obj->image_file_name) }}" alt="{{ $item_obj->name or '' }}"></a>
                            <div class="thumb-product-in">
                                <h4><a href="{{ $item_obj->name_url or '' }}">{{ $item_obj->code or '' }}</a></h4>
                                <span class="thumb-product-type">{{ $item_obj->name or '' }}</span>
                            </div>
                            <ul class="list-inline overflow-h">
                                @if(isset($item_obj->old_price) && $item_obj->old_price > 0)
                                <li class="thumb-product-price line-through">{{ !empty($item_obj->old_price) && $item_obj->old_price > 0 ? number_format($item_obj->old_price) : '' }}</li>
                                @endif
                                <li class="thumb-product-price">{{ !empty($item_obj->unit_price) && $item_obj->unit_price > 0 ? number_format($item_obj->unit_price) : '' }}</li>
                                <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        @endif
                    @endforeach
                @endif

            </div>
            <div class="col-md-4">
                <div class="heading heading-v1 margin-bottom-20">
                    <h2>Dây Lưng</h2>
                </div>
                @if(isset($daylung_items) && count($daylung_items) > 0)
                    @foreach($daylung_items as $item_obj)
                        @if(file_exists(public_path() .'/upload_file/avatar/'.$item_obj->image_file_name))
                            <div class="thumb-product">
                                <a href="{{ $item_obj->name_url or '' }}"><img class="thumb-product-img" src="{{ asset('upload_file/avatar/'.$item_obj->image_file_name) }}" alt="{{ $item_obj->name or '' }}"></a>
                                <div class="thumb-product-in">
                                    <h4><a href="{{ $item_obj->name_url or '' }}">{{ $item_obj->code or '' }}</a></h4>
                                    <span class="thumb-product-type">{{ $item_obj->name or '' }}</span>
                                </div>
                                <ul class="list-inline overflow-h">
                                    @if(isset($item_obj->old_price) && $item_obj->old_price > 0)
                                        <li class="thumb-product-price line-through">{{ !empty($item_obj->old_price) && $item_obj->old_price > 0 ? number_format($item_obj->old_price) : '' }}</li>
                                    @endif
                                    <li class="thumb-product-price">{{ !empty($item_obj->unit_price) && $item_obj->unit_price > 0 ? number_format($item_obj->unit_price) : '' }}</li>
                                    <li class="thumb-product-purchase"><a href="{{ $item_obj->name_url or '' }}"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                        @endif
                    @endforeach
                @endif

            </div>
            <div class="col-md-4 padding">
                <div class="heading heading-v1 margin-bottom-20">
                    <h2>Túi Da</h2>
                </div>
                @if(isset($tuida_items) && count($tuida_items) > 0)
                    @foreach($tuida_items as $item_obj)
                        @if(file_exists(public_path() .'/upload_file/avatar/'.$item_obj->image_file_name))
                            <div class="thumb-product">
                                <a href="{{ $item_obj->name_url or '' }}"> <img class="thumb-product-img" src="{{ asset('upload_file/avatar/'.$item_obj->image_file_name) }}" alt="{{ $item_obj->name or '' }}"></a>
                                <div class="thumb-product-in">
                                    <h4><a href="{{ $item_obj->name_url or '' }}">{{ $item_obj->code or '' }}</a></h4>
                                    <span class="thumb-product-type">{{ $item_obj->name or '' }}</span>
                                </div>
                                <ul class="list-inline overflow-h">
                                    @if(isset($item_obj->old_price) && $item_obj->old_price > 0)
                                        <li class="thumb-product-price line-through">{{ !empty($item_obj->old_price) && $item_obj->old_price > 0 ? number_format($item_obj->old_price) : '' }}</li>
                                    @endif
                                    <li class="thumb-product-price">{{ !empty($item_obj->unit_price) && $item_obj->unit_price > 0 ? number_format($item_obj->unit_price) : '' }}</li>
                                    <li class="thumb-product-purchase"><a href="{{ $item_obj->name_url or '' }}"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div><!--/end row-->
        <!--=== End Illustration v4 ===-->
    </div><!--/end cotnainer-->





@endsection


