<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 5/31/16
 * Time: 10:21 PM
 */
?>
@extends('layouts.main_backend')
@section('title') Users | @parent @stop
@section('style')
    <link href="{{ asset('backend/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Administrator</a></li>
            <li><a href="javascript:;">Users</a></li>
            <li class="active">List</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Users <small>(Number of users: <?php echo count($users) ?>)</small></h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-2 -->
            <div class="col-md-2">
                <p class="m-b-20">
                    <a href="{{ route('backend.a.user.create') }}" class="btn btn-sm btn-success col-md-12"> <i class="fa fa-plus"></i> New user</a>
                </p>
                <br/>
                <div>
                    <form action="/" method="POST">

                        <div class="form-group">
                            <label for="search_name">Name</label>
                            <input type="text" class="form-control" id="search_name" name="search_name" placeholder="Search by name" />
                        </div>

                    </form>
                </div>
                <p class="m-b-20">
                    <a href="javascript:void(0)" class="btn btn-inverse btn-sm col-md-12">Search</a>
                </p>
            </div>
            <!-- end col-2 -->
            <!-- begin col-10 -->
            <div class="col-md-10">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Users List</h4>
                    </div>
                    <div class="alert alert-warning fade in">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        List of users
                    </div>
                    <div class="panel-body">
                        <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                            <thead>
                            <tr>
                                <th>User Info</th>
                                <th>Level</th>
                                <th>Department & Team</th>
                                <th>Active</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            if(isset($users) && count($users) > 0){
                            $i = 0;
                            foreach($users as $user){
                            $i++;
                            //$j = (($i%2==0)?2:1);
                            $color = (($i%2) == 0) ? 'odd' : 'even';
                            ?>
                            <tr class="<?= $color ?> gradeX">
                                <td>
                                    <ul>
                                        <li>{{ $user->name or '' }}</li>
                                        <li>({{ $user->username or '' }})</li>
                                    </ul>

                                </td>
                                <td>{{ $user->level or '' }}</td>
                                <td>
                                    <ul>
                                        <li>{{ $user->department->name or "" }}</li>
                                        <li>
                                            @if(isset($user->teams) && count($user->teams) > 0)
                                                @foreach($user->teams as $team_id){
                                                    {{ $team_id }}
                                                @endforeach
                                            @endif
                                        </li>
                                    </ul>

                                    {{-- $user->teams or '' --}}
                                </td>
                                <td>{{ $user->active or ""}}</td>
                                <td>{{ $user->created_at or "" }}</td>
                                <td>
                                    <a href="javascript:void(0)" onclick="detail({{$user->id}})"><i class="fa fa-pencil-square-o fa-lg"></i></a> &nbsp;
                                    <a href="{{ route('backend.a.user.delete-user', $user->id) }}"><i class="fa fa-trash-o fa-lg"></i></a>
                                    {{--
                                    {!! Form::open(array('route'=>array('admin.department.destroy', $department->id), "method" => "DELETE")) !!}
                                    {{ csrf_field() }}
                                    <button type="submit"><i class="fa fa-trash-o fa-lg"></i></button>
                                    {!! Form::close() !!}
                                    --}}
                                </td>
                            </tr>
                            <?
                            }
                            }

                            ?>


                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-10 -->
        </div>
        <!-- end row -->
    </div>

@endsection


@section('script')
    <script src="{{ asset('backend/assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/table-manage-responsive.demo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            TableManageResponsive.init();
        });
    </script>
@endsection
