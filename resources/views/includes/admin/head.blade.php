<!-- Title -->
<title>@yield("title")</title>

<!-- Favicon -->
 <link rel="shortcut icon" href="{{ URL::asset('assets/Admin/pic/8.jpg') }}" type="image" /> 

<!-- Font -->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <!-- <link rel="stylesheet" src="Assets/Admin/css/jquery.timeline.min.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/gh/ka215/jquery.timeline@master/dist/jquery.timeline.min.css" rel="stylesheet"> -->


@yield('css')
<!--- Style css -->
{{-- <link href="{{ URL::asset('assets/Admin/css/style.css') }}" rel="stylesheet"> --}}
{{-- <link href="{{ URL::asset('assets/Admin/css/jquery.timeline.min.css') }}" rel="stylesheet"> --}}

<!--- Style css -->
@if (App::getLocale() == 'en')
    <link href="{{ URL::asset('assets/Admin/css/ltr.css') }}" rel="stylesheet">
@else
    <link href="{{ URL::asset('assets/Admin/css/rtl.css') }}" rel="stylesheet">
@endif
