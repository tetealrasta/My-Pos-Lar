@extends('includes.admin.admin')
@section('title', 'الصفحة الرئيسية')
@section('content')
    <style>
        h6 {
            font-size: 12px;
        }

        .btn {
            /* height: 35px;
                    width:37px; */
            text-align: center;
            font-size: 13px
        }

        .card-statistics {
            /* background: red; */
            border-radius: 12px;
            padding: 10px 15px;

        }

        h4 {
            font-size: 25px;
            color: #454574
        }

        .text-dark {
            font-size: 18px;
            color: #303644 !important;

        }

        .fa-list:before {
            content: "\f03a";
            text-align: right;
            font-size: 25px;
        }

        .fa-product-hunt:before {
            content: "\f288";
            font-size: 25px;
        }

        .fa-shopping-cart:before {
            content: "\f07a";
            font-size: 25px;
        }

        .fa-user:before {
            content: "\f007";
            font-size: 25px;
        }
    </style>
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> الإحصائـيات</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                </ol>
            </div>
        </div>
    </div>
    <!-- widgets -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-danger">
                                <i class="fa fa-mobile highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <a href="{{ URL('Admin\Blag') }}">
                                <p class="card-text text-dark">مجموع الأجهزه </p>
                            </a>
                            <h4>{{ \App\Models\Admin\Device::count() }}</h4>


                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i>
                        <a href="{{ URL('Admin\Blag') }}">
                            Total Of Devices
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-warning">
                                <i class="fa fa-shopping-cart highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <a href="{{ URL('Admin\Blag') }}">
                                <p class="card-text text-dark">الأجهزه المعطله </p>
                            </a>
                           
                            <h4 style="color:#dc3545 !important">{{ \App\Models\Admin\Device::count() }}</h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        {{-- <i class="fa fa-bookmark-o mr-1" aria-hidden="true"></i> إجمالي الأجهزه --}}
                    <p><i class="fa fa-repeat mr-1" aria-hidden="true"></i>
                        <a href="{{ URL('Admin\Blag') }}">
                            Broken Devices
                        </a>
                    </p>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-success">
                                <i class="fa fa-list highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الأجهزه التي تم إصلاحها</p>
                            <h4 style="color:green !important">{{ \App\Models\Admin\Device::count() }}</h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        {{-- <i class="fa fa-calendar mr-1" aria-hidden="true"></i> Sales Per Week --}}
                    <p><i class="fa fa-repeat mr-1" aria-hidden="true"></i>
                         <a href="{{ URL('Admin\Blag') }}">
                            Devices Has Fixed
                        </a>
                        </p>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-primary">
                                <i class="fa fa-product-hunt highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">أجهزه تحت الإصلاح</p>
                            <h4 style="color:#dc3545 !important">{{ \App\Models\Admin\Device::count() }}</h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        {{-- <i class="fa fa-repeat mr-1" aria-hidden="true"></i> Just Updated --}}
                    <p><i class="fa fa-repeat mr-1" aria-hidden="true"></i> 
                     
                        <a href="{{ URL('Admin\Blag') }}">
                            Devices Still Broken
                        </a>
                     </p>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 mb-30">
            <div class="card h-100">
                <div class="btn-group info-drop">
                    <button type="button" class="dropdown-toggle-split text-muted" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>Refresh</a>
                        <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>View
                            all</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-block d-md-flexx justify-content-between">
                        <h5 class="card-title">البلاغات</h5>
                        <div class="isal">
                            <h4><a href="{{ URL('Admin\Blag') }}">إضافه بلاغ     <i class="fa fa-plus highlight-icon" aria-hidden="true"></i> </a></h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="col-xl-6 mb-30">
            <div class="card h-100">
                <div class="btn-group info-drop">
                    <button type="button" class="dropdown-toggle-split text-muted" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>Refresh</a>
                        <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>View
                            all</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-block d-md-flexx justify-content-between">
                        <h5 class="card-title">الوصول السريع للأجهزة </h5>
                        <div class="isal">
                            <div class="row">
                            <div class="col-sm-6">
                                <h4><a href="{{ URL('Admin\Device') }}">صرف الأجهزه </a></h4>
                            </div>
                            <div class="col-sm-6">
                            <h4><a href="{{ URL('Admin\About_Device') }}">مراجعه الأجهزه </a></h4>
                    
                        </div>
                    
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-block d-md-flexx justify-content-between">
                 
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================

            <! main content wrapper end-->




@endsection
