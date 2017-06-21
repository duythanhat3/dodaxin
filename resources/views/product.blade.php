<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 7/20/16
 * Time: 11:58 PM
 */
?>
@extends('layouts.main')

@section('style')
    {{--<link rel="stylesheet" href="{{ asset('assets/css/shop.style.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ asset('assets/plugins/noUiSlider/jquery.nouislider.min.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ asset('assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css') }}">--}}
@endsection

@section('content')


    <!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4">
        <div class="container">
            <span class="page-name">{{ $title or '' }}</span>
            <h1>ĐỒ DA THẬT 100%</h1>
        </div><!--/end container-->
    </div>
    <!--=== End Breadcrumbs v4 ===-->

    <!--=== Content Part ===-->
    <div class="content container">
        <div class="row">
            <div class="col-md-3 filter-by-block md-margin-bottom-60">
                <h1>Tìm kiếm</h1>

                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Nhóm
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </h2>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled checkbox-list">
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" checked />
                                            <i></i>
                                            Tất cả
                                            <small style="color: #18ba9b;">(<?= isset($items_arr) ? count($items_arr) : 0 ?>)</small>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" />
                                            <i></i>
                                            Mới
                                            <small style="color: #18ba9b;">(1)</small>
                                        </label>
                                    </li>

                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" />
                                            <i></i>
                                            Bán nhiều nhất
                                            <small style="color: #18ba9b;">(0)</small>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" />
                                            <i></i>
                                            Hết hàng
                                            <small style="color: #18ba9b;">(1)</small>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--/end panel group-->

                <div class="panel-group" id="accordion-v2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-v2" href="#collapseTwo">
                                    Tên hoặc Mã SP
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <input type="text" name="search_val" class="form-control" placeholder="Tìm theo Tên hoặc Mã SP">
                            </div>
                        </div>
                    </div>
                </div><!--/end panel group-->

                <button type="button" class="btn-u btn-brd btn-brd-hover btn-u-lg btn-u-sea-shop btn-block">Tìm kiếm</button>
            </div>

            <div class="col-md-9">
                <div class="row margin-bottom-5">
                    <div class="col-sm-4 result-category">
                        <h2>{{ $title or 'SẢN PHẨM ĐỒ DA XỊN' }}</h2>
                        <small class="shop-bg-red badge-results"><?= isset($items_arr) ? count($items_arr) : 0 ?> sản phẩm</small>
                    </div>
                    <div class="col-sm-8">
                        <ul class="list-inline clear-both">
                            <li class="grid-list-icons">
                                <a href="shop-ui-filter-list.html"><i class="fa fa-th-list"></i></a>
                                <a href="shop-ui-filter-grid.html"><i class="fa fa-th"></i></a>
                            </li>

                        </ul>
                    </div>
                </div><!--/end result category-->

                <div class="filter-results no-margin-bottom no-padding-bottom">

                    <?php if(isset($items_arr) && count($items_arr)){ ?>
                        <div class="row illustration-v2 margin-bottom-30">

                            <?php $i = 0;
                            foreach($items_arr as $item){ ?>

                                @if($i == 0)

                                @endif

                                <div class="col-md-4">
                                    <div class="product-img product-img-brd">
                                        <a href="{{ asset($item->name_url) }}"><img class="full-width img-responsive" src="{{ asset('upload_file/avatar/'.$item->image_file_name) }}" alt=""></a>
                                        <a class="product-review" href="{{ asset($item->name_url) }}" title="{{ $item->name or '' }}">Chi tiết</a>
                                        <a class="add-to-cart" href="{{ asset($item->name_url) }}"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        @if( isset($item->is_new) && $item->is_new == '1')
                                        <div class="shop-rgba-dark-green rgba-banner">New</div>
                                        @endif

                                        @if( isset($item->is_out_of_stock) && $item->is_out_of_stock == '1')
                                        <div class="shop-rgba-red rgba-banner">Out of stock</div>
                                        @endif
                                    </div>
                                    <div class="product-description product-description-brd margin-bottom-30">
                                        <div class="overflow-h margin-bottom-5">
                                            <div class="pull-left">
                                                <h4 class="title-price">
                                                    <a href="{{ asset($item->name_url) }}" title="{{ $item->name or '' }}">{{ $item->name or '' }}</a>
                                                </h4>
                                                <span class="gender text-uppercase">Mã sp: {{ $item->code or '' }}</span>
                                                {{--@if(!empty($item->color))--}}
                                                {{--<span class="gender">Màu: {{ $item->color or '' }}</span>--}}
                                                {{--@endif--}}
                                            </div>
                                            <div class="product-price">
                                                <span class="title-price">{{ !empty($item->unit_price) && $item->unit_price > 0 ? number_format($item->unit_price) : '' }} đ</span>
                                                {{--@if(isset($item->old_price) && $item->old_price > 0)--}}
                                                <span class="title-price line-through">{{ !empty($item->old_price) && $item->old_price > 0 ? number_format($item->old_price) ." đ" : '' }} </span>
                                                {{--@endif--}}
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <?php
                            }
                        }

                    ?>
                        </div>

                </div><!--/end filter resilts-->

                <div class="text-center">
                    <ul class="pagination pagination-v2">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div><!--/end pagination-->


            </div>
        </div><!--/end row-->
    </div><!--/end container-->
@endsection

@section('script')
    {{--<script src="{{ asset('assets/plugins/noUiSlider/jquery.nouislider.all.min.js') }}"></script>--}}
    {{--<script src="{{ asset('assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>--}}
    {{--<script src="{{ asset('assets/js/shop.app.js') }}"></script>--}}
    {{--<script src="{{ asset('assets/js/plugins/mouse-wheel.js') }}"></script>--}}
    {{--<script>--}}
        {{--jQuery(document).ready(function() {--}}
            {{--App.initScrollBar();--}}
            {{--MouseWheel.initMouseWheel();--}}
        {{--});--}}
    {{--</script>--}}
@endsection