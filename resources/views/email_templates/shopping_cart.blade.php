<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 8/23/16
 * Time: 11:54 AM
 */
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />

</head>
<body>
<h2>Thông tin đơn hàng (mã đơn hàng {{$cart_id or ''}}) </h2>

<p>Tên khách hàng: <b>{{$cart['cus_name']}}</b></p>
<p>Số điện thoại: <b>{{$cart['cus_phone']}}</b></p>
@if(!empty($cart['cus_email']))
    <p>Email: <b>{{$cart['cus_email']}}</b></p>
@endif
<p>Địa chỉ: <b>{{$cart['cus_address']}}</b></p>
<p>Ghi chú: <b>{{$cart['note']}}</b></p>
<p>Ngày tạo: <b>{{$cart['created_at']}}</b></p>

<h2>Danh sách sản phẩm</h2>
<table border="1">
    <tr>
        <td>Mã sản phẩm</td>
        <td>Đơn giá</td>
        <td>Số lượng</td>
        <td>Thành tiền</td>
    </tr>

    @if(isset($cart_details) && count($cart_details) > 0)
        @foreach($cart_details as $item)
            <tr>
                <td>{{ $item['item_id'] }}</td>
                <td>{{ !empty($item['item_price']) && $item['item_price'] > 0 ? number_format($item['item_price']) : 0 }}</td>
                <td>{{ $item['item_quantity'] }}</td>
                <td>{{ !empty($item['amount']) && $item['amount'] > 0 ? $item['amount'] : 0 }}</td>
            </tr>
        @endforeach
    @endif

</table>

<p>Tổng tiền: <b>{{ !empty($total_due) && $total_due > 0 ? number_format($total_due) : 0 }}</b></p>

</body>
</html>


