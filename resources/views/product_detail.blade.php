<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 7/31/16
 * Time: 2:23 AM
 */
?>

@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/plugins/master-slider/quick-start/masterslider/style/masterslider.css.php') }}">
    <link rel='stylesheet' href="{{ asset('assets/plugins/master-slider/quick-start/masterslider/skins/default/style.css.php') }}">

@endsection

@section('content')
    <!--=== Shop Product ===-->
    <div class="shop-product">
        <!-- Breadcrumbs v5 -->
        <div class="container">
            <ul class="breadcrumb-v5">
                <li><a href="{{ asset('/') }}" title="Trang chủ"><i class="fa fa-home"></i></a></li>
                <li><a href="{{ asset($item_obj->category->name_url) }}">{{ $item_obj->category->name or '' }}</a></li>
                <li class="active">{{ $item_obj->name or '' }}</li>
            </ul>
        </div>
        <!-- End Breadcrumbs v5 -->

        <div class="container">
            <div class="row">
                <div class="col-md-6 md-margin-bottom-50">
                    <div class="ms-showcase2-template">
                        <!-- Master Slider -->
                        <div class="master-slider ms-skin-default" id="masterslider">
                            @if(file_exists(public_path() .'/upload_file/avatar/'.$item_obj->image_file_name))
                            <div id="avatar_pic" class="ms-slide">
                                <img class="ms-brd" src="{{ asset('upload_file/avatar/'.$item_obj->image_file_name) }}" data-src="{{ asset('upload_file/avatar/'.$item_obj->image_file_name) }}" alt="{{$item_obj->name or ''}}">
                                <img class="ms-thumb" src="{{ asset('upload_file/avatar/'.$item_obj->image_file_name) }}" alt="thumb">
                            </div>
                            @endif

                            @if(isset($attach_file_arr) && count($attach_file_arr) > 0 )
                                @foreach($attach_file_arr as $attach_file)
                                    @if(file_exists(public_path() .'/upload_file/attach/'.$attach_file->path_file))
                                        <div class="ms-slide">
                                            <img class="ms-brd" src="{{ asset('upload_file/attach/'.$attach_file->path_file) }}" data-src="{{ asset('upload_file/attach/'.$attach_file->path_file) }}" alt="{{$item_obj->name or ''}}">
                                            <img class="ms-thumb" src="{{ asset('upload_file/attach/'.$attach_file->path_file) }}" alt="thumb">
                                        </div>
                                    @endif
                                @endforeach
                            @endif

                        </div>
                        <!-- End Master Slider -->
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="shop-product-heading">
                        <h2>{{ $item_obj->name or '' }}</h2>
                        <ul class="list-inline shop-product-social">
                            <li><a href="https://www.facebook.com/dodaxin100" title="Đồ da xịn"><i class="fa fa-facebook"></i></a></li>
                            {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-pinterest"></i></a></li>--}}
                        </ul>
                    </div><!--/end shop product social-->

                    <ul class="list-inline product-ratings margin-bottom-30">
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        {{--<li class="product-review-list">--}}
                            {{--<span>(1) <a href="#">Review</a> | <a href="#"> Add Review</a></span>--}}
                        {{--</li>--}}
                    </ul><!--/end shop product ratings-->

                    {{--<p>Integer <strong>dapibus ut elit</strong> non volutpat. Integer auctor purus a lectus suscipit fermentum. Vivamus lobortis nec erat consectetur elementum.</p><br>--}}

                    <ul class="list-inline shop-product-prices margin-bottom-30">
                        <li class="shop-red">{{ !empty($item_obj->unit_price) && $item_obj->unit_price > 0 ? number_format($item_obj->unit_price) : '' }}</li>
                        @if(isset($item_obj->old_price) && $item_obj->old_price > 0)
                        <li class="line-through">{{ !empty($item_obj->old_price) && $item_obj->old_price > 0 ? number_format($item_obj->old_price) : '' }}</li>
                        @endif
                    </ul><!--/end shop product prices-->

                    <h3 class="shop-product-title">Mã sản phẩm: {{ $item_obj->code or '' }}</h3>

                    @if(!empty($item_obj->color))
                    <h3 class="shop-product-title">Màu sắc: {{ $item_obj->color or '' }}</h3>
                    @endif

                    <h3 class="shop-product-title">Quantity</h3>
                    <div id="add_to_card_panel" class="margin-bottom-40">


                        {!! Form::open(array('id' => "quantity_cart", 'method' => 'POST' , 'class' => 'product-quantity sm-margin-bottom-20')) !!}

                        {{ csrf_field() }}
                            <button type='button' class="quantity-button" name='subtract' onclick="javascript: subtractQty('qty');" value='-'>-</button>
                            <input type='text'  class="quantity-field" name='cart_qty' value="1" id='qty'/>
                            <button type='button' class="quantity-button" name='add' onclick='javascript: document.getElementById("qty").value++;' value='+'>+</button>
                        <button id="add_to_cart" type="submit" class="btn-u btn-u-sea-shop btn-u-lg">Đặt hàng</button>
                        {!! Form::close() !!}
                    </div><!--/end product quantity-->
                    <br/>
                    <br/>

                    <p class="wishlist-category"><strong>Categories:</strong> <a href="{{ asset($item_obj->category->name_url) }}" title="{{ $item_obj->category->name or '' }}">{{ $item_obj->category->name or '' }}</a></p>
                </div>
            </div><!--/end row-->
        </div>
    </div>
    <!--=== End Shop Product ===-->

    <!--=== Content Medium ===-->
    <div class="content-md container">
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

        <div class="tab-v5">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#description" role="tab" data-toggle="tab">Thông tin chi tiết sản phẩm</a></li>
                {{--<li><a href="#reviews" role="tab" data-toggle="tab">Reviews (1)</a></li>--}}
            </ul>

            <div class="tab-content">
                <!-- Description -->
                <div class="tab-pane fade in active" id="description">
                    <?= $item_obj->description ?>
                </div>
                <!-- End Description -->

                <!-- Reviews
                <div class="tab-pane fade" id="reviews">
                    <div class="product-comment margin-bottom-40">
                        <div class="product-comment-in">
                            <img class="product-comment-img rounded-x" src="assets/img/team/01.jpg" alt="">
                            <div class="product-comment-dtl">
                                <h4>Mickel <small>22 days ago</small></h4>
                                <p>I like the green colour, it's very likeable and reminds me of Hollister. A little loose though but I am very skinny</p>
                                <ul class="list-inline product-ratings">
                                    <li class="reply"><a href="#">Reply</a></li>
                                    <li class="pull-right">
                                        <ul class="list-inline">
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating-selected fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                            <li><i class="rating fa fa-star"></i></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h3 class="heading-md margin-bottom-30">Add a review</h3>
                    <form action="assets/php/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form sky-changes-4">
                        <fieldset>
                            <div class="margin-bottom-30">
                                <label class="label-v2">Name</label>
                                <label class="input">
                                    <input type="text" name="name" id="name">
                                </label>
                            </div>

                            <div class="margin-bottom-30">
                                <label class="label-v2">Email</label>
                                <label class="input">
                                    <input type="email" name="email" id="email">
                                </label>
                            </div>

                            <div class="margin-bottom-30">
                                <label class="label-v2">Review</label>
                                <label class="textarea">
                                    <textarea rows="7" name="message" id="message"></textarea>
                                </label>
                            </div>
                        </fieldset>

                        <footer class="review-submit">
                            <label class="label-v2">Review</label>
                            <div class="stars-ratings">
                                <input type="radio" name="stars-rating" id="stars-rating-5">
                                <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-4">
                                <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-3">
                                <label for="stars-rating-3"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-2">
                                <label for="stars-rating-2"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-1">
                                <label for="stars-rating-1"><i class="fa fa-star"></i></label>
                            </div>
                            <button type="button" class="btn-u btn-u-sea-shop btn-u-sm pull-right">Submit</button>
                        </footer>
                    </form>
                </div>
                <!-- End Reviews -->
            </div>
        </div>
    </div><!--/end container-->
    <!--=== End Content Medium ===-->

    <!--=== Illustration v2 ===-->
    @if(isset($reference_items) && count($reference_items) > 0 )
    <div class="container">
        <div class="heading heading-v1 margin-bottom-20">
            <h2>Có thể bạn sẽ thích</h2>
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio elit, ultrices vel cursus sed, placerat ut leo. Phasellus in magna erat. Etiam gravida convallis augue non tincidunt. Nunc lobortis dapibus neque quis lacinia. Nam dapibus tellus sit amet odio venenatis</p>--}}
        </div>

        <div class="illustration-v2 margin-bottom-60">
            <div class="customNavigation margin-bottom-25">
                <a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
                <a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
            </div>

            <ul class="list-inline owl-slider-v4">
                @foreach($reference_items as $ref_item_obj)
                    @if(file_exists(public_path() .'/upload_file/avatar/'.$ref_item_obj->image_file_name))
                    <li class="item">
                        <a href="{{ asset($ref_item_obj->name_url) }}"><img class="img-responsive" src="{{ asset('upload_file/avatar/'.$ref_item_obj->image_file_name) }}" alt=""></a>
                        <div class="product-description-v2">
                            <div class="margin-bottom-5">
                                <h4 class="title-price"><a href="{{ asset($ref_item_obj->name_url) }}">{{ $ref_item_obj->name or '' }}</a></h4>
                                <span class="title-price">{{ $ref_item_obj->unit_price or '' }}</span>
                            </div>
                            <ul class="list-inline product-ratings">
                                <li><i class="rating-selected fa fa-star"></i></li>
                                <li><i class="rating-selected fa fa-star"></i></li>
                                <li><i class="rating-selected fa fa-star"></i></li>
                                <li><i class="rating-selected fa fa-star"></i></li>
                                <li><i class="rating fa fa-star"></i></li>
                            </ul>
                        </div>
                    </li>
                    @endif
                 @endforeach
            </ul>
        </div>
    </div>
    @endif
    <!--=== End Illustration v2 ===-->

@endsection

@section('script')

    <!-- Master Slider -->
    <script src="{{ asset('assets/plugins/master-slider/quick-start/masterslider/masterslider.min.js.php') }}"></script>
    <script src="{{ asset('assets/plugins/master-slider/quick-start/masterslider/jquery.easing.min.js.php') }}"></script>

    <script src="{{ asset('assets/js/plugins/master-slider.js.php') }}"></script>
    <script src="{{ asset('assets/js/forms/product-quantity.js.php') }}"></script>

    <script>
        jQuery(document).ready(function() {
            OwlCarousel.initOwlCarousel();
            MasterSliderShowcase2.initMasterSliderShowcase2();
        });

    </script>

@endsection