<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 5/24/16
 * Time: 12:27 AM
 */
?>
@extends('layouts.main_backend')
@section('title') User | @parent @stop
@section('style')
    <link href="{{ asset('backend/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />

@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Administrator</a></li>
            <li><a href="javascript:;">Users</a></li>
            <li class="active">Detail</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">User Detail <small>(Create or update a user)</small></h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-12 -->
            <div class="col-md-12">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Form detail</h4>
                    </div>
                    <div class="panel-body">


                        <?php $attr_arr = array( 'data-parsley-validate' => true);
                        if(isset($domain)){
                            $attr_arr['route'] = array('backend.a.user.update', $domain->id);
                            $attr_arr['method'] = 'PATCH';
                        } else {
                            $attr_arr['route'] = "backend.a.user.store";
                            $attr_arr['method'] = 'POST';
                        }
                        ?>

                        {!! Form::open($attr_arr) !!}

                        {{ csrf_field() }}

                            <fieldset>
                                <legend class="pull-left width-full">General information</legend>
                                <!-- begin row -->
                                <div class="row">
                                    <!-- begin col-3 -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Fullname</label>
                                            <input type="text" name="name" placeholder="Fullname" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                    <!-- begin col-3 -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" name="phone" placeholder="Phone Number" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                    <!-- begin col-3 -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" placeholder="Email" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                    <!-- begin col-3 -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" />
                                                    Active
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                </div>
                                <!-- end row -->

                                <!-- begin row -->
                                <div class="row">
                                    <!-- begin col-3 -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" placeholder="Username" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                    <!-- begin col-3 -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select name="level" class="form-control">
                                                <option>Agent</option>
                                                <option>Teamleader</option>
                                                <option>Supervisor</option>
                                                <option>Manager</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                    <!-- begin col-3 -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Department</label>
                                            <select name="department" class="form-control">
                                                <option>Agent</option>
                                                <option>Teamleader</option>
                                                <option>Supervisor</option>
                                                <option>Manager</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                    <!-- begin col-3 -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Team</label>
                                            <div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="" />
                                                        Team 1
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="" />
                                                        Team 2
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->

                                </div>
                                <!-- end row -->

                            </fieldset>

                            <fieldset>
                                <legend class="pull-left width-full">Access Permission</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>WORKING</label>
                                            <div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>PAGE</th>
                                                            <th>ACCESS</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Dashboard</td>
                                                            <td><input type="checkbox" data-render="switchery" data-theme="blue" checked /></td>

                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Contacts</td>
                                                            <td><input type="checkbox" data-render="switchery" data-theme="blue" checked /></td>

                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>REPORT</label>
                                            <div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>PAGE</th>
                                                            <th>ACCESS</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Chart</td>
                                                            <td><input type="checkbox" data-render="switchery" data-theme="blue" /></td>

                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Outbound Report</td>
                                                            <td><input type="checkbox" data-render="switchery" data-theme="blue" /></td>

                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Inbound Report</td>
                                                            <td><input type="checkbox" data-render="switchery" data-theme="blue"  /></td>

                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ADMINISTRATOR</label>
                                            <div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>PAGE</th>
                                                            <th>ACCESS</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Setting Departments</td>
                                                            <td><input type="checkbox" data-render="switchery" data-theme="blue"  /></td>

                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Setting Teams</td>
                                                            <td><input type="checkbox" data-render="switchery" data-theme="blue"  /></td>

                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>User List</td>
                                                            <td><input type="checkbox" data-render="switchery" data-theme="blue"  /></td>

                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </fieldset>



                            <div class="col-md-12 center">
                                <button type="submit" class="btn btn-sm btn-success width-100" >Save</button>

                            </div>

                        <!--/form-->
                        {!! Form::close() !!}
                    </div>
                </div>


            </div>
            <!-- end col-10 -->
        </div>
        <!-- end row -->

    </div>
@endsection
@section('script')
    <script src="{{ asset('backend/assets/plugins/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/form-slider-switcher.demo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            FormSliderSwitcher.init();
        });
    </script>
@endsection

