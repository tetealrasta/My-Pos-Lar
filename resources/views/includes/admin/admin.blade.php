<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('includes.admin.head')
</head>
<style>
    select.form-control:not([size]):not([multiple]) {
    height: calc(3.3rem + 1px) !important;
    border: 1px solid #00000012;
}.form-control{
    border: 1px solid #00000012 !important;
}
</style>

<body>

<div class="wrapper">
    <!--=================================
preloader -->

    <div id="pre-loader">
        <img src="assets/images/pre-loader/loader-01.svg" alt="">
    </div>

    <!--=================================
preloader -->

@include('includes.admin.main-header')

@include('includes.admin.main-sidebar')

<!--=================================
 Main content -->
    <!-- main-content -->
    <div class="content-wrapper">

    @yield('page-header')
    <div align="center">
        <h4>@yield('Page-Title')</h4>
        <br>
    </div>
   
    @yield('content')

    <!--=================================
 wrapper -->

        <!--=================================
footer -->

        @include('includes.admin.footer')
    </div><!-- main content wrapper end-->
</div>
</div>
</div>

<!--=================================
footer -->

@include('includes.admin.footer-scripts')
{{--@include('sweet::alert')--}}
</body>

</html>
