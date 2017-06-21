<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 3/14/16
 * Time: 3:54 PM
 */
?>
<script src="{{ asset('backend/assets/my/js/jquery.timer.js') }}"></script>
<style>
    .activity-item i {
        float: left;
        font-size: 20px;
    }

    div.activity {
        margin-left: 28px;
        padding-bottom: 2px;
    }
    div.activity-title {
        margin-left: 28px;
        font-size: 15px;
        font-weight: bold;
        padding-bottom: 5px;
    }

    div.activity-item {
        padding: 7px 12px;
    }

    #notification-list div.activity-item {
        border-top: 1px solid #f5f5f5;
    }

    #notification-list div.activity-item a {
        font-weight: 600;
    }

    div.activity span {
        display: block;
        color: #999;
        font-size: 11px;
        line-height: 16px;
    }

    #notifications i.fa {
        font-size: 17px;
    }

    .noty_type_error * {
        font-weight: normal !important;
    }

    .noty_type_error a {
        font-weight: bold !important;
    }

    .noty_bar.noty_type_error a, .noty_bar.noty_type_error i {
        color: #fff
    }

    .noty_bar.noty_type_information a {
        color: #fff;
        font-weight: bold;
    }

    .noty_type_error div.activity span
    {
        color: #fff
    }

    .noty_type_information div.activity span
    {
        color: #fefefe
    }
</style>
<script>
    var interval = 1000 * 2; /* every 5 seconds */
    var income_call_arr = Array();
    function popup_caller() {
        $.ajax({
            type: "GET",
            dataType: "json",
            url:  "{{ route('backend.w.ajax.notification_income_call') }}",
            success: function(json){
                if(json != null) {
                    var index = income_call_arr.length;

                    var href = 'javascript:void(0)';
                    if(json.contact_id != '' && json.contact_id > 0){
                        href = "{{url('ticket/contact_detail/')}}/"+json.contact_id ;
                    }

                    var text = '<div class="activity-item"> ' +
                            '<i class="fa fa-sign-in"></i> <div class="activity-title">Incoming Call</div>' +
                            '<div class="activity"> Contact: <a href="'+href+'">'+json.phone+' - '+json.contact_name+'</a> </div>' +
                            '<div class="activity center"> <a href="javascript:void(0)" class="btn btn-sm btn-default" onclick="close_box('+index+')">Close</a> <a href="'+href+'" class="btn btn-sm btn-warning">Open</a> </div>'
                    ' </div>';
                    var type = 'warning';
                    /*if(json.customer_id != ''){
                     type = 'success';
                     }*/

                    var n = noty({
                        text: text,
                        type: type,
                        dismissQueue: true,
                        layout: 'bottomLeft',
                        closeWith: ['button'],
                        theme: 'relax',
                        maxVisible: 10,
                        animation: {
                            open: 'animated bounceInLeft',
                            close: 'animated bounceOutLeft',
                            easing: 'swing',
                            speed: 100
                        },
                    });
                    income_call_arr.push(n);

                }

            }
        });
    }

    var timer = $.timer(popup_caller);
    timer.set({ time : interval, autostart : false });

    function start_check_call_timer() {
        timer.play(true);
    }
    function stop_check_call_timer() {
        timer.stop();
    }
    function view_customer(index, phone_no) {
        close_box(index);
        window.open("inbound/view_call?mobile_phone="+phone_no);
    }
    function close_box(index) {
        var notify_box = income_call_arr[index];
        notify_box.close();
    }
    $(document).ready(function(){

        @if(session('sess_queue_status') == 'login')
            start_check_call_timer();
        @endif
    });


</script>