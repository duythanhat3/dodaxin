<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 5/22/16
 * Time: 3:35 PM
 */


$owned_queues_arr = session('sess_owned_queues');
$queue_status = session('sess_queue_status');

?>
<div id="header" class="header navbar navbar-default navbar-fixed-top">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin mobile sidebar expand / collapse button -->
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand">
                {{--<span class="navbar-logo"></span> --}}
                <img id="logo-header" src="{{ asset('backend/assets/img/logo.png') }}" class="navbar-logo" alt="Đồ Da Xịn"> TaduSoft
            </a>

            <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- end mobile sidebar expand / collapse button -->

        <!-- begin header navigation right -->
        <ul class="nav navbar-nav navbar-right">
            <li>
                <form action="/search" class="navbar-form full-width">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter keyword" />
                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </li>
            <li class="dropdown">
                <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                    <i class="fa fa-bell-o"></i>
                    <span class="label">5</span>
                </a>
                <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                    <li class="dropdown-header">Notifications (5)</li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading">Server Error Reports</h6>
                                <div class="text-muted f-s-11">3 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><img src="{{ asset('backend/assets/img/user-1.jpg') }}" class="media-object" alt="" /></div>
                            <div class="media-body">
                                <h6 class="media-heading">John Smith</h6>
                                <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                <div class="text-muted f-s-11">25 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><img src="{{ asset('backend/assets/img/user-2.jpg') }}" class="media-object" alt="" /></div>
                            <div class="media-body">
                                <h6 class="media-heading">Olivia</h6>
                                <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                <div class="text-muted f-s-11">35 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"> New User Registered</h6>
                                <div class="text-muted f-s-11">1 hour ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"> New Email From John</h6>
                                <div class="text-muted f-s-11">2 hour ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-footer text-center">
                        <a href="javascript:;">View more</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown navbar-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">


                    @if(isset($owned_queues_arr) && count($owned_queues_arr) > 0)
                        <?php
                                $color = 'offline';
                              if($queue_status == 'login'){
                                  $color = 'online';
                              }
                        ?>
                        <i id="status_color" class="ace-icon fa fa-circle fa-3x {{$color}}" style="float: left; height: 30px; margin: -10px 10px 0 0; width: 30px;"></i>
                    @else
                        <img src="{{ asset('backend/assets/img/user-13.jpg') }}" alt="" />
                    @endif

                    <span class="hidden-xs">
                        {{Auth::user()->name}}
                    </span>
                    <b class="caret"></b>
                </a>
                <ul id="cbo_queue_action" class="dropdown-menu animated fadeInLeft">

                    @if(isset($owned_queues_arr) && count($owned_queues_arr) > 0)
                        @if(empty($queue_status) || $queue_status == 'logout' )
                            <li class="status">
                                <a href="javascript:void(0)" onclick="action_queue('login')">
                                    <i id="status_color" class="ace-icon fa fa-circle online"></i>
                                    Online
                                </a>
                            </li>
                        @else
                            @if($queue_status != 'login')
                                <!--?= make_inbound_agent_reason_li(session()->get('sess_queue_status')); ?-->
                                {{--<li class="divider status"></li>--}}
                                <li class="status">
                                    <a href="javascript:void(0)" onclick="action_queue('login')">
                                        <i id="status_color" class="ace-icon fa fa-circle online"></i>
                                        Online
                                    </a>
                                </li>
                            @else
                                <!--?= make_inbound_agent_reason_li() ?-->
                                    <li class="status">
                                        <a href="javascript:void(0)" onclick="action_queue('logout')">
                                            <i id="status_color" class="ace-icon fa fa-circle offline"></i>
                                            Offline
                                        </a>
                                    </li>
                            @endif

                        @endif

                    <li class="divider status"></li>
                    @endif


                    <li class="arrow"></li>
                    <li><a href="{{ route('user.profile') }}">Edit Profile</a></li>
                    <li><a href="javascript:;">Setting</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0)" onclick="logout()">Log Out</a></li>
                </ul>
            </li>
        </ul>
        <!-- end header navigation right -->
    </div>
    <!-- end container-fluid -->
</div>

@if(isset($owned_queues_arr) && count($owned_queues_arr) > 0)
    @include('partials.backend.popup_caller');


<script>
    function action_queue(p_status) {
        if (p_status != '') {
            $.ajax({
                type: "GET",
                url: '{{ route('backend.w.ajax.change_queue_status') }}',
                data: {
                    status : p_status
                },
                success: function (output) {
                    if(output != null){
                        $("#cbo_queue_action").find('.status').remove();

                        $("#cbo_queue_action").prepend(output);

                        load_status(p_status);

                        if (p_status == 'login') {
                            start_check_call_timer();
                        } else {
                            stop_check_call_timer();
                        }
                    }

                }
            });

        }
    }

    function load_status(status) {

        if (status == '' || status == 'logout') {
            //$("#status_mess").text("Offline");
            $("#status_color").css('color', '#e7e7e7');
        } else if (status == 'login') {
            //$("#status_mess").text("Online");
            $("#status_color").css('color', '#87b846');
        } else {
            //$("#status_mess").text(status);
            $("#status_color").css('color', '#ffb752');
        }

    }


    function logout(){
        $.ajax({
            type: "GET",
            url: '{{ route('backend.w.ajax.change_queue_status') }}',
            data: {
                status: 'logout'
            },
            success: function (output) {
               if(output != null){
                   location.href = '{{ url('backend/logout') }}';
               }

            }
        });

    }

</script>

@endif