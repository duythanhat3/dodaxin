<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 5/29/16
 * Time: 8:38 PM
 */

?>
@extends('layouts.main_backend')
@section('title') Team | @parent @stop
@section('style')
    <link href="{{ asset('backend/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Administrator</a></li>
            <li><a href="javascript:;">Item</a></li>
            <li class="active">List</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Item <small>(Number of teams: <?php echo isset($item_arr) ? count($item_arr) : 0 ?>)</small></h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-2 -->
            <div class="col-md-2">
                <p class="m-b-20">
                    <a href="{{ route('backend.a.item.create') }}" class="btn btn-sm btn-success col-md-12"> <i class="fa fa-plus"></i> New team</a>
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
                        <h4 class="panel-title">Item List</h4>
                    </div>
                    <div class="alert alert-warning fade in">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        List of items
                    </div>
                    <div class="panel-body">
                        <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            if(isset($item_arr) && count($item_arr) > 0){
                            $i = 0;
                            foreach($item_arr as $item){
                            $i++;
                            //$j = (($i%2==0)?2:1);
                            $color = (($i%2) == 0) ? 'odd' : 'even';
                            ?>
                            <tr class="<?= $color ?> gradeX">
                                <td>{{ $item->code or '' }}</td>
                                <td>{{ $item->name or '' }}</td>
                                <td>
                                    @if(!empty($item->image_file_name))
                                        <div class="fileupload fileupload-new">
                                    <div class="fileupload-preview fileupload-small thumbnail"><img
                                                src="{{ asset('upload_file/avatar/'. $item->image_file_name ) }}"></div>
                                        </div>
                                    @endif

                                </td>
                                <td>{{ !empty($item->unit_price) && $item->unit_price > 0 ? number_format($item->unit_price) : 0 }}</td>
                                <td>{{ $item->active or ""}}</td>
                                <td>
                                    <a href="{{ route('backend.a.item.edit', $item->id) }}"><i class="fa fa-pencil-square-o fa-lg"></i></a> &nbsp;
                                    <a href="{{ route('backend.a.item.delete-item', $item->id) }}"><i class="fa fa-trash-o fa-lg"></i></a>
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
