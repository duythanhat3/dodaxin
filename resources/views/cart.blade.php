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
    {{--<link rel="stylesheet" href="{{ asset('assets/plugins/formvalidation-io/css/formValidation.min.css') }}"/>--}}

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

    <!--=== Content Medium Part ===-->
    <div class="content-md margin-bottom-30">
        <div class="container">
            @if(!empty($success_mes))
                <div class="alert alert-success fade in">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <strong><i class="fa fa-check"></i> {{ $success_mes }}</strong>
                </div>
                <a href="{{ asset('vi-da-nam') }}" class="btn-u btn-brd btn-brd-hover btn-u-lg btn-u-sea-shop">Tiếp tục
                    mua hàng</a>
            @else
                {!! Form::open(array('id' => "shopping_cart_frm", 'method' => 'POST' , 'class' => 'shopping-cart', 'novalidate' => 'novalidate')) !!}

                {{--                {{ csrf_field() }}--}}
                {!! Form::hidden('act', 'save') !!}
                <div>
                    {{--<div class="header-tags">--}}
                    {{--<div class="overflow-h">--}}
                    {{--<h2><i class="fa fa-shopping-cart"></i> Giỏ Hàng</h2>--}}
                    {{--</div>--}}
                    {{--</div>--}}


                    <section>
                        <div class="row">
                            <div class="col-md-2">
                                <h2><i class="fa fa-shopping-cart"></i> Giỏ Hàng</h2>
                            </div>
                            <div class="col-md-10">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Đơn giá</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền (vnd)</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @if(isset($cart_details_arr) && count($cart_details_arr) > 0)
                                            @foreach($cart_details_arr as $cart_item)
                                                <?php
                                                if (!isset($cart_item['quantity']) || $cart_item['quantity'] <= 0 || empty($cart_item['quantity'])) {
                                                    $cart_item['quantity'] = 1;
                                                }
                                                ?>

                                                <tr id="row_{{ $cart_item['item_id'] }}">
                                                    <td class="product-in-table">
                                                        @if(file_exists(public_path() .'/upload_file/avatar/'.$cart_item['img']))
                                                            <img class="img-responsive"
                                                                 src="{{asset('/upload_file/avatar/'.$cart_item['img']) }}"
                                                                 alt="">
                                                        @endif
                                                        <div class="product-it-in">
                                                            <h3>{{ $cart_item['item_code'] }}</h3>
                                                            <input type="hidden" name="cart_item_ids[]"
                                                                   value="{{$cart_item['item_id'] or ''}}"/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{ number_format($cart_item['price']) }} vnd
                                                        <input type="hidden" id="price_{{ $cart_item['item_id'] }}"
                                                               name="cart_price[]" value="{{$cart_item['price']}}"/>
                                                    </td>
                                                    <td>
                                                        <button type='button' class="quantity-button" name='subtract'
                                                                onclick="javascript: subtractQty('qty_{{ $cart_item['item_id'] }}'); change_quantity_in_shopping_cart({{ $cart_item['item_id'] }});"
                                                                value='-'>-
                                                        </button>
                                                        <input type='text' class="quantity-field" name='cart_qty[]'
                                                               value="{{ $cart_item['quantity'] }}"
                                                               id='qty_{{ $cart_item['item_id'] }}'/>
                                                        <button type='button' class="quantity-button" name='add'
                                                                onclick='javascript: document.getElementById("qty_{{ $cart_item['item_id'] }}").value++; change_quantity_in_shopping_cart({{ $cart_item['item_id'] }});'
                                                                value='+'>+
                                                        </button>
                                                    </td>
                                                    <td class="shop-red">

                                                        <label id="label_total_{{ $cart_item['item_id'] }}">{{ number_format($cart_item['quantity'] * $cart_item['price']) }}</label>
                                                        <input type="hidden" id="txt_total_{{ $cart_item['item_id'] }}"
                                                               class="txt_total"
                                                               value="{{ $cart_item['quantity'] * $cart_item['price']}}"/>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="close"
                                                                onclick="remove_item_in_shopping_cart('{{$cart_item['item_id']}}')">
                                                            <span>&times;</span><span class="sr-only">Close</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        @endif

                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ asset('vi-da-nam') }}"
                                   class="btn-u btn-brd btn-brd-hover btn-u-lg btn-u-sea-shop">Tiếp tục mua hàng</a>
                            </div>
                            <div class="col-md-6">
                                <h4><b>Tổng tiền: <span id="total_amount" class="shop-red"></span> vnd</b></h4>

                            </div>
                        </div>

                    </section>
                    <hr/>

                    {{--<div class="header-tags center">--}}
                    {{--<div class="overflow-h">--}}
                    {{--<h2>Thông tin đặt hàng</h2>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <section class="">
                        <div class="row margin-bottom-20">
                            <div class="col-md-3">
                                <h2><i class="fa fa-truck"></i> Thông tin đặt hàng</h2>
                            </div>
                            <div class="col-md-6">
                                {{--<h2 class="title-type">Shipping Address</h2>--}}
                                <div class="billing-info-inputs checkbox-list">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Họ và tên (bắt buộc)" name="fullname"
                                                   id="fullname" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input id="phone" type="tel" placeholder="Nhập điện thoại (bắt buộc)"
                                                   name="phone" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="email" type="text" placeholder="Nhập email (nếu có)" name="email"
                                                   class="form-control email">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Nhập địa chỉ (bắt buộc)" name="address"
                                                   id="address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="note" placeholder="Ghi chú" class="form-control"></textarea>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="text-align: center">
                                <button type="submit" class="btn-u btn-u-sea-shop btn-u-lg">Đặt hàng</button>
                            </div>
                        </div>
                    </section>

                </div>
                {!! Form::close() !!}

            @endif

        </div><!--/end container-->
    </div>
    <!--=== End Content Medium Part ===-->
@endsection

@section('script')
    {{--    <script src="{{ asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js') }}"></script>--}}

    {{--<script src="{{ asset('assets/plugins/formvalidation-io/js/formValidation.min.js') }}"></script>--}}
    {{--<script src="{{ asset('assets/plugins/formvalidation-io/js/framework/bootstrap.min.js') }}"></script>--}}

    <script src="{{ asset('assets/js/forms/product-quantity.js.php') }}"></script>
    <script>

        $('#shopping_cart_frm').submit(function () {
            var fullname = $("#fullname").val();
            if (fullname.trim() === '') {
                alert('Vui lòng nhập tên của bạn');
                $("#fullname").focus();
                return false;
            }

            var phone = $("#phone").val();
            if (phone.trim() === '') {
                alert('Vui lòng nhập số điện thoại của bạn');
                $("#phone").focus();
                return false;
            }

            var address = $("#address").val();
            if (address.trim() === '') {
                alert('Vui lòng nhập địa chỉ của bạn');
                $("#address").focus();
                return false;
            }
            return true;
        });


        $(document).ready(function () {




//            $('#shopping_cart_frm')
//                    .formValidation({
//                        live: 'disabled',
//                        framework: 'bootstrap',
//                        err: {
//                            container: 'tooltip'
//                        },
//                        // trigger: 'blur',
//                        icon: {
//                            required: 'glyphicon glyphicon-asterisk',
//                            valid: 'glyphicon glyphicon-ok',
//                            invalid: 'glyphicon glyphicon-remove',
//                            validating: 'glyphicon glyphicon-refresh'
//                        },
//                        row: {
//                            valid: 'field-success',
//                            invalid: 'field-error'
//                        },
//                        fields: {
//                            fullname: {
//                                // The messages for this field are shown as usual
//                                validators: {
//                                    notEmpty: {
//                                        message: 'Yêu cầu nhập Họ và Tên'
//                                    }
//                                }
//                            },
//                            phone: {
//                                // The messages for this field are shown as usual
//                                validators: {
//                                    notEmpty: {
//                                        message: 'Yêu cầu nhập Số điện thoại'
//                                    },
//                                    regexp: {
//                                        regexp: /^[0-9]+$/i,
//                                        message: 'Số điện thoại không đúng định dạng'
//                                    },
//                                    stringLength: {
//                                        min: 10,
//                                        max: 11,
//                                        message: 'Số điện thoại không hợp lệ'
//                                    }
//                                }
//                            },
//                            address: {
//                                // The messages for this field are shown as usual
//                                validators: {
//                                    notEmpty: {
//                                        message: 'Yêu cầu nhập địa chỉ'
//                                    }
//                                }
//                            }
//
//                        }
//                    });
        });


        function remove_item_in_shopping_cart(item_id) {
            $("#row_" + item_id).remove();
            getTotal();
        }

        function change_quantity_in_shopping_cart(item_id) {

            var unit_price = $("#price_" + item_id).val();
            var quantity = $("#qty_" + item_id).val();

            total = unit_price * quantity;

            $("#label_total_" + item_id).text(total.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
            $("#txt_total_" + item_id).val(total);

            getTotal();

        }


        function getTotal() {
            var total = 0;
            $('.txt_total').each(function () {
                total += parseFloat($(this).val() || 0);
            });

            $("#total_amount").text(total.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        }

        getTotal();

    </script>
@endsection