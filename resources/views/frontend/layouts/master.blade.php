<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from www.vasterad.com/themes/workscout_1_5/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Oct 2018 07:46:50 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Work Scout</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('bower_components/bower-firstjob/frontend/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('bower_components/bower-firstjob/frontend/css/colors/green.css') }}" id="colors">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
<div id="wrapper">
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
</div>
<!-- Wrapper / End -->
<!-- Scripts
================================================== -->
<script src="{{ asset('bower_components/bower-firstjob/frontend/scripts/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('bower_components/bower-firstjob/frontend/scripts/custom.js') }}"></script>
<script src="{{ asset('bower_components/bower-firstjob/frontend/scripts/jquery.superfish.js') }}"></script>
<script src="{{ asset('bower_components/bower-firstjob/frontend/scripts/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('bower_components/bower-firstjob/frontend/scripts/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('bower_components/bower-firstjob/frontend/scripts/jquery.themepunch.showbizpro.min.js') }}"></script>
<script src="{{ asset('bower_components/bower-firstjob/frontend/scripts/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('bower_components/bower-firstjob/frontend/scripts/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/bower-firstjob/frontend/scripts/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('bower_components/bower-firstjob/frontend/scripts/waypoints.min.js') }}"></script>
<script src="{{ asset('bower_components/bower-firstjob/frontend/scripts/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('bower_components/bower-firstjob/frontend/scripts/jquery.jpanelmenu.js') }}"></script>
<script src="{{ asset('bower_components/bower-firstjob/frontend/scripts/stacktable.js') }}"></script>
<script src="{{ asset('bower_components/bower-firstjob/frontend/scripts/slick.min.js') }}"></script>
<script src="{{ asset('bower_components/bower-firstjob/frontend/scripts/headroom.min.js') }}"></script>

</body>
<!-- Mirrored from www.vasterad.com/themes/workscout_1_5/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Oct 2018 07:47:21 GMT -->
</html>