<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 7/19/16
 * Time: 12:25 AM
 */
        ?>


@extends('layouts.main')

@section('style')
    {{--<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">--}}

@endsection

@section('content')


<!-- Google Map -->
{{--<div id="google_map" class="map"></div><!---/map-->--}}
<!-- End Google Map -->

<!--=== Content Part ===-->
<div class="container content">
    <div class="row margin-bottom-30">
        <div class="col-md-9 mb-margin-bottom-30">
            <div class="headline"><h2>Tư Vấn & Hỗ Trợ</h2></div>
            <p>Điền đầy đủ thông tin bên duới để được tư vấn và hỗ trợ</p><br />

            <form action="assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form contact-style">
                <fieldset class="no-padding">
                    <label>Tên của bạn <span class="color-red">*</span></label>
                    <div class="row sky-space-20">
                        <div class="col-md-7 col-md-offset-0">
                            <div>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <label>Điện thoại <span class="color-red">*</span></label>
                    <div class="row sky-space-20">
                        <div class="col-md-7 col-md-offset-0">
                            <div>
                                <input type="text" name="phone" id="phone" class="form-control">
                            </div>
                        </div>
                    </div>

                    <label>Email <span class="color-red">*</span></label>
                    <div class="row sky-space-20">
                        <div class="col-md-7 col-md-offset-0">
                            <div>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                        </div>
                    </div>

                    <label>Nội dung <span class="color-red">*</span></label>
                    <div class="row sky-space-20">
                        <div class="col-md-11 col-md-offset-0">
                            <div>
                                <textarea rows="8" name="message" id="message" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                    <p><button type="submit" class="btn-u">Gửi yêu cầu</button></p>
                </fieldset>

                <div class="message">

                    <p> <i class="rounded-x fa fa-check"></i> Your message was successfully sent!</p>
                </div>
            </form>
        </div><!--/col-md-9-->

        <div class="col-md-3">
            <!-- Contacts -->
            <div class="headline"><h2>Liên Hệ</h2></div>
            <ul class="list-unstyled who margin-bottom-30">

                    <li><i class="fa fa-home fa-lg"></i> 19 Dương Đức Hiền, P. Tây Thạnh, Q. Tân Phú, TP.HCM</li>
                    <li><i class="fa fa-envelope"></i> dodaxin@gmail.com</li>
                    <li><i class="fa fa-phone"></i> 0974 084 091 (gặp c.Loan) </li>
                    <li><i class="fa fa-phone"></i> 0165 2198 403 (gặp a.Dũng)</li>
                    <li><a href="http://www.dodaxin.com/" title="đồ da xịn"><i class="fa fa-globe"></i> http://www.dodaxin.com</a></li>

            </ul>

            {{--<!-- Business Hours -->--}}
            {{--<div class="headline"><h2>Giờ Làm Việc</h2></div>--}}
            {{--<ul class="list-unstyled margin-bottom-30">--}}
                {{--<li><strong>Monday-Friday:</strong> 10am to 8pm</li>--}}
                {{--<li><strong>Saturday:</strong> 11am to 3pm</li>--}}
                {{--<li><strong>Sunday:</strong> Closed</li>--}}
            {{--</ul>--}}

            <!-- Why we are? -->
            <div class="headline"><h2>Tiêu Chí Hoạt Động</h2></div>
            <p>Chúng tôi luôn muốn mang đến cho người tiêu dùng những sản phẩm chất lượng tốt nhất, Giá cả hợp lý nhất, Phục vụ tận tình nhất.</p>
            <ul class="list-unstyled">
                <li><i class="fa fa-check color-green"></i> Da thật 100%</li>
                <li><i class="fa fa-check color-green"></i> Thời trang</li>
                <li><i class="fa fa-check color-green"></i> Giá rẻ</li>
                <li><i class="fa fa-check color-green"></i> Còn dùng còn bảo hành</li>
                <li><i class="fa fa-check color-green"></i> Miễn phí giao hàng với những đơn hàng >= 500k</li>
                <li><i class="fa fa-check color-green"></i> Đổi trả hàng nếu sản phẩm chưa làm hài lòng quý khách</li>
            </ul>
        </div><!--/col-md-3-->
    </div><!--/row-->

</div><!--/container-->
<!--=== End Content Part ===-->

@endsection

@section('script')

    {{--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>--}}
    {{--<script type="text/javascript" src="{{ asset('assets/plugins/gmaps/gmaps.js') }}"></script>--}}
    {{--<script>--}}
        {{--var map;--}}
        {{--$(document).ready(function(){--}}
            {{--map = new GMaps({--}}
                {{--el: '#google_map',--}}
                {{--lat: -12.043333,--}}
                {{--lng: -77.028333--}}
            {{--});--}}
            {{--map.addMarker({--}}
                {{--lat: -12.043333,--}}
                {{--lng: -77.03,--}}
                {{--title: 'Đồ Da Xịn',--}}
                {{--details: {--}}
                    {{--database_id: 42,--}}
                    {{--author: 'dodaxin.com'--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
@endsection
