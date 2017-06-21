<?php
/**
 * Created by PhpStorm.
 * User: manhdung
 * Date: 5/22/16
 * Time: 3:33 PM
 */

?>
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="{{ asset('backend/assets/img/user-13.jpg') }}" alt="" /></a>
                </div>
                <div class="info">
                    {{Auth::user()->name}}
                    <small>{{Auth::user()->username}}</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            {{--
            <li class="nav-header">Working</li>
            <li class="{{ Request::is('backend/dashboard') ? 'active' : '' }}">
                <a href="{{ url('backend/dashboard')  }}">
                    <i class="fa fa-laptop"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('backend/w/contact') ? 'active' : '' }}">
                <a href="{{ url('backend/w/contact') }}">
                    <i class="fa fa-users"></i>
                    <span>Contacts</span>
                </a>
            </li>
            <li class="{{ Request::is('backend/w/task') ? 'active' : '' }}">
                <a href="{{ url('backend/w/task') }}">
                    <i class="fa fa-tasks"></i>
                    <span>Tasks</span>
                </a>
            </li>
            <li class="{{ Request::is('backend/w/deal') ? 'active' : '' }}">
                <a href="{{ url('backend/w/deal') }}">
                    <i class="fa fa-suitcase"></i>
                    <span>Deals</span>
                </a>
            </li>
            <li class="{{ Request::is('backend/w/schedule') ? 'active' : '' }}"><a href="{{ url('backend/w/schedule') }}"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>


            <li class="nav-header">Report</li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-area-chart"></i>
                    <span>Chart <span class="label label-theme m-l-5">NEW</span></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="chart-flot.html">Flot Chart</a></li>
                    <li><a href="chart-morris.html">Morris Chart</a></li>
                    <li><a href="chart-js.html">Chart JS</a></li>
                    <li><a href="chart-d3.html">d3 Chart <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <i class="fa fa-table"></i>
                    <span>Outbound Report</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Report by Agents</a></li>
                    <li><a href="#">Report by Time</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <i class="fa fa-table"></i>
                    <span>Inbound Report</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Summary Report</a></li>
                    <li><a href="#">Report by Agents</a></li>
                    <li><a href="#">Report by Handle Call</a></li>
                    <li><a href="#">Report by Abandon Call</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-microphone"></i> <span>Call Recording Report</span></a></li>
            <li >
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Number of Tasks</span>
                </a>
            </li>
            <li >
                <a href="javascript:;">
                    <i class="fa fa-suitcase"></i>
                    <span>Projects</span>
                </a>
            </li>
            --}}

            <li class="nav-header">Administrator</li>
            {{--
            <li class="has-sub {{ Request::is('backend/a/department') || Request::is('backend/a/team') || Request::is('backend/a/user') ? 'active' : '' }}">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-user"></i>
                    <span>Users Management</span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ Request::is('backend/a/department') ? 'active' : '' }}"><a href="{{ url('backend/a/department')  }}">Setting Departments</a></li>
                    <li class="{{ Request::is('backend/a/team') ? 'active' : '' }}"><a href="{{ url('backend/a/team')  }}">Setting Teams </a></li>
                    <li class="{{ Request::is('backend/a/user') ? 'active' : '' }}"><a href="{{ url('backend/a/user')  }}">Users List</a></li>
                </ul>
            </li>

            <li class="has-sub {{ Request::is('backend/a/contact_group') || Request::is('backend/a/contact') ? 'active' : '' }}" >
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-users"></i>
                    <span>Contacts Management</span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ Request::is('backend/a/contact_group') ? 'active' : '' }}"><a href="{{ url('backend/a/contact_group')  }}">Setting Groups</a></li>
                    <li class="{{ Request::is('backend/a/contact') ? 'active' : '' }}"><a href="{{ url('backend/a/contact')  }}">Contacts List</a></li>
                </ul>
            </li>

            <li class="has-sub {{ Request::is('backend/a/campaign') || Request::is('backend/a/inbound') ? 'active' : '' }}">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-cogs"></i>
                    <span>Work Assignment</span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ Request::is('backend/a/campaign') ? 'active' : '' }}"><a href="{{ url('backend/a/campaign') }}">Setting Task Outbound</a></li>
                    <li class="{{ Request::is('backend/a/inbound') ? 'active' : '' }}"><a href="{{ url('backend/a/inbound') }}">Setting Inbound</a></li>
                </ul>
            </li>
            --}}

            <li class="has-sub {{ Request::is('backend/a/category') || Request::is('backend/a/item') ? 'active' : '' }}">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-file-text-o"></i>
                    <span>Product Setting</span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ Request::is('backend/a/category') ? 'active' : '' }}"><a  href="{{ url('backend/a/category') }}">Category</a></li>
                    <li class="{{ Request::is('backend/a/item') ? 'active' : '' }}"><a  href="{{ url('backend/a/item') }}">Product List</a></li>
                </ul>
            </li>


            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
