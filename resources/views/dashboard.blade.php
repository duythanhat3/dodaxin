<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 5/22/16
 * Time: 3:26 PM
 */
        ?>
@extends('layouts.main_backend')
@section('title') dashboard | @parent @stop
@section('style')
    <link href="{{asset('backend/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/bootstrap-datepicker/css/datepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/bootstrap-datepicker/css/datepicker3.css')  }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="{{ url('/dashboard')  }}">Home</a></li>
            <!--li class="active">Dashboard</li-->
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Dashboard <!--small>header small text goes here...</small--></h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-green">
                    <div class="stats-icon"><i class="fa fa-user"></i></div>
                    <div class="stats-info">
                        <h4>TOTAL CONTACTS</h4>
                        <p>{{ $total_contact or 0 }}</p>
                    </div>
                    <div class="stats-link">
                        <a href="{{route('backend.w.contact.index')}}">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-blue">
                    <div class="stats-icon"><i class="fa fa-chain-broken"></i></div>
                    <div class="stats-info">
                        <h4>TOTAL TASKS</h4>
                        <p>{{ $total_task or 0 }}</p>
                    </div>
                    <div class="stats-link">
                        <a href="{{ route('backend.w.task.index') }}">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-purple">
                    <div class="stats-icon"><i class="fa fa-users"></i></div>
                    <div class="stats-info">
                        <h4>TOTAL DEALS</h4>
                        <p>{{ $total_deal or 0 }}</p>
                    </div>
                    <div class="stats-link">
                        <a href="{{ route('backend.w.deal.index') }}">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-red">
                    <div class="stats-icon"><i class="fa fa-clock-o"></i></div>
                    <div class="stats-info">
                        <h4>AVG TIME ON SITE</h4>
                        <p>00:12:23</p>
                    </div>
                    <div class="stats-link">
                        <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end col-3 -->
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-8 -->
            <div class="col-md-8">
                <div class="panel panel-inverse" data-sortable-id="index-1">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Recent Contacts</h4>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Group</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($recent_contacts) && count($recent_contacts) > 0)
                                    @foreach($recent_contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->phone_primary }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>
                                                @if(isset($contact->group->name) && $contact->group->name =='People')
                                                    <span class="label label-primary">{{ $contact->group->name or '' }}</span>
                                                @else
                                                    <span class="label label-warning">{{ $contact->group->name or '' }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="panel panel-inverse" data-sortable-id="index-2">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Recent Deals</h4>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Deal</th>
                                <th>Deal with</th>
                                <th>Value</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($recent_deals) && count($recent_deals) > 0)
                                @foreach($recent_deals as $deal)
                                    <tr>
                                        <td>{{ $deal->title }}</td>
                                        <td>{{ $deal->contact->name or '' }}</td>
                                        <td>

                                            @if($deal->price > 0)
                                                {{ number_format($deal->price) or 0 }}
                                                {{ $deal->currency }}
                                                    @if(!empty($deal->duration))
                                                        / {{ $deal->duration }} {{ $deal->price_type }}
                                                    @endif


                                            @endif

                                        </td>
                                        <td>

                                            @if($deal->status == 'pending')
                                                <span class="label label-warning">Pending</span>
                                            @elseif($deal->status == 'won')
                                                <span class="label label-success">Won</span>
                                            @elseif($deal->status == 'lost')
                                                <span class="label label-inverse">Won</span>
                                            @endif

                                        </td>

                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- end col-8 -->
            <!-- begin col-4 -->
            <div class="col-md-4">

                <div class="panel panel-inverse" data-sortable-id="index-8">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">My tasks</h4>
                    </div>
                    <div class="panel-body p-0">
                        <ul class="todolist">

                            @if(isset($recent_task) && count($recent_task) > 0 )
                                @foreach($recent_task as $task)
                                    <li @if($task->status == 'done') class="active" @endif >
                                        <a href="javascript:;" class="todolist-container @if($task->status == 'done') active @endif " data-click="todolist">
                                            <div class="todolist-input"><i class="fa fa-square-o"></i></div>
                                            <div class="todolist-title">
                                                {{ $task->title }}<br/>
                                                <span>Due to: {{ $task->due_date }}</span>
                                            </div>

                                        </a>
                                    </li>
                                @endforeach
                            @endif

                        </ul>
                    </div>
                </div>


                <div class="panel panel-inverse" data-sortable-id="index-10">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Calendar</h4>
                    </div>
                    <div class="panel-body">
                        <div id="datepicker-inline" class="datepicker-full-width"><div></div></div>
                    </div>
                </div>
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
@endsection

@section('script')
    <script src="{{ asset('backend/assets/plugins/gritter/js/jquery.gritter.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/flot/jquery.flot.time.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/flot/jquery.flot.pie.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dashboard.js') }}"></script>
    <script>
        $(document).ready(function() {
            Dashboard.init();
        });
    </script>
@endsection