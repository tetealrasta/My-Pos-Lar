<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <li>
                        <a href="{{ URL('Admin\Dashboard') }}">
                            <i class="fa fa-home mr-1" aria-hidden="true"></i>
                            <strong>
                                <span class="right-nav-text">
                                    الصفحه الرئيسية
                                </span> </strong>
                        </a>
                    </li>

                    <!-- category -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#mainCat-menu">
                            <div class="pull-left">
                                <i class="fa fa-gears mr-1" aria-hidden="true"></i>
                                <span class="right-nav-text">إعدادات النظام</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="mainCat-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ URL('Admin\Units') }}">الوحدات <i class="fa fa-store highlight-icon" aria-hidden="true"></i></a></li>
                            <li><a href="{{ URL('Admin\Category') }}">أنواع الأجهزه <i class="fa fa-mobile highlight-icon" aria-hidden="true"></i></a></li>
                            <li><a href="{{ URL('Admin\Problems') }}">أنواع الأعطال <i class="fa fa-flag highlight-icon" aria-hidden="true"></i></a></li>
                            <li><a href="{{ URL('Admin\Mothasilen')}}">المتحصلين <i class="fa fa-users highlight-icon" aria-hidden="true"></i></a></li>
                            <li><a href="{{ URL('Admin\Super_Visor')}}">المشرفين <i class="fa fa-mobile highlight-icon" aria-hidden="true"></i></a></li>
                        </ul>
                    </li>


                    <!-- balg -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#blags">
                            <div class="pull-left">
                                <i class="fa fa-tag mr-1" aria-hidden="true"></i>
                                <strong> <span class="right-nav-text"> البـلاغــات</span></strong>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="blags" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ URL('Admin\Blag2') }}">بلاغات اليوم <i class="fa fa-mobile highlight-icon" aria-hidden="true"></i></a></li>
                            <li><a href="{{ URL('Admin\Blag') }}">جميع البلاغات <i class="fa fa-mobile highlight-icon" aria-hidden="true"></i></a></li>

                        </ul>
                    </li>


                    {{-- has done  --}}
                    <li>
                        <a href="{{ URL('Admin\Fixed') }}">
                            <i class="fa fa-check mr-1" aria-hidden="true"></i>
                            <strong>
                                <span class="right-nav-text">
                                    أجهزه تمت صيانتها
                                </span> </strong>
                            <div class="pull-right"><i class="ti-minus"></i></div>
                            <div class="clearfix"></div>

                        </a>
                    </li>

                    <!-- products -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#users">
                            <div class="pull-left">
                                <i class="fa fa-mobile mr-1" aria-hidden="true"></i>
                                <span class="right-nav-text">الأجهزه</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="users" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ URL('Admin\About_Device') }}">بيانات عن جهاز <i class="fa fa-mobile highlight-icon" aria-hidden="true"></i></a></li>
                            <li><a href="{{ URL('Admin\Device') }}">مراجعه الأجهزه <i class="fa fa-mobile highlight-icon" aria-hidden="true"></i></a></li>
                            {{-- <li><a href="{{ URL('Admin\Device')}}">تعديل في حاله الجهازالصيانه</a>
                    </li> --}}
                    <li><a href="{{ URL('Admin\Device') }}">الأجهزه التالفة <i class="fa fa-mobile highlight-icon" aria-hidden="true"></i></a></li>
                </ul>
                </li>
                {{-- <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text">المحليات والوزارات</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                    </li> --}}
                <!-- Reports -->
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#Reports">
                        <div class="pull-left">
                            <i class="fa fa-calendar mr-1" aria-hidden="true"></i>
                            <span class="right-nav-text">التقارير</span>
                        </div>
                        <div class="pull-right"><i class="ti-plus"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="Reports" class="collapse" data-parent="#sidebarnav">
                        <li><a href="{{ URL('Admin\Reports\has_fixed')}}">الأجهزه التي تمت صيانتها <i class="fa fa-mobile highlight-icon" aria-hidden="true"></i></a></li>
                        <li><a href="{{ URL('Admin\Reports\Not_yet')}}">أجهزه تحت الصيانه <i class="fa fa-mobile highlight-icon" aria-hidden="true"></i></a></li>
                        <li><a href="{{ URL('Admin\Reports\droped')}}"> التالف <i class="fa fa-mobile highlight-icon" aria-hidden="true"></i></a></li>
                        {{-- <li><a href="#">المحليات والوزارات</a></li>
            <li><a href="#">المشرفين الإداريين</a></li> --}}
                    </ul>
                </li>
                <!-- settings -->
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#settings">
                        <div class="pull-left">
                            <i class="fa fa-edit mr-1" aria-hidden="true"></i>
                            <span class="right-nav-text">الإعدادات</span>
                        </div>
                        <div class="pull-right"><i class="ti-plus"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="settings" class="collapse" data-parent="#sidebarnav">
                        <li><a href="{{ URL('Admin\Setting') }}">الإعدادات <i class="fa fa-mobile highlight-icon" aria-hidden="true"></i></a></li>
                        <li><a href="{{ URL('Admin\Users') }}">المستخدمين <i class="fa fa-mobile highlight-icon" aria-hidden="true"></i></a></li>
                    </ul>
                </li>
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================