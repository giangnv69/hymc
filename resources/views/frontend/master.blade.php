<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="{{ asset( 'uploads/config/logo/'.$site_info->site_favicon ) }}">
	@if (isset($site_info->index_google))
		<meta name="robots" content="{{ $site_info->index_google == 1 ? 'index, follow' : 'noindex, nofollow' }}">
	@endif
	{!! SEO::generate() !!}
	<meta name='revisit-after' content='1 days' />
	<meta name="copyright" content="GCO" />
	<meta http-equiv="content-language" content="vi" />
	<meta name="geo.region" content="VN" />
	<meta property="fb:app_id" content="439448050253769" />
    <meta name="geo.position" content="10.764338, 106.69208" />
    <meta name="geo.placename" content="Hà Nội" />
    <meta name="Area" content="HoChiMinh, Saigon, Hanoi, Danang, Vietnam" />
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
 	<meta name="_token" content="{{csrf_token()}}" />

 	<link rel="canonical" href="{{ \Request::fullUrl() }}">

	<link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/font-awesome.css">
    <link rel="stylesheet" href="{{ __BASE_URL__ }}/css/jquery.mmenu.all.css">
    <link rel="stylesheet" href="{{ __BASE_URL__ }}/css/animate.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
	
	<!-- <link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/tool.min.css">     -->
	<link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/main.min.css">  

    <link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/style.css">
    <link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/responsive.css"> 
    <script type="text/javascript" src="{{ __BASE_URL__ }}/js/jquery.min.js"></script> 

 	@if (!empty($site_info->site_google_analytics))
 		{!! $site_info->site_google_analytics !!}
 	@endif
</head> 
	<body>
		@include('frontend.teamplate.header')
		<main id="main">
			@yield('main')
		</main>
		@include('frontend.teamplate.footer')

		<script type="text/javascript" src="{{ __BASE_URL__ }}/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{{ __BASE_URL__ }}/js/wow.min.js"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>    -->
		<!-- <script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>    -->
		<script type="text/javascript" src="{{ __BASE_URL__ }}/js/jquery.mmenu.all.js"></script>
		<script src="{{ __BASE_URL__ }}/js/tool.min.js"></script>      
		<script src="{{ __BASE_URL__ }}/js/main.min.js"></script>    
		<script src="{{ __BASE_URL__ }}/js/number_scroll.js"></script>    
		<script type="text/javascript" src="{{ __BASE_URL__ }}/js/private.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script> 
		<script type="text/javascript" src="{{ __BASE_URL__ }}/js/ajax-pro.js"></script> 

		
		@yield('script')

		@if (!empty($site_info->script))
			{!! $site_info->script !!}
		@endif

		<script>
		jQuery(document).ready(function($) {
	        @if(session('toast'))
	            $.toast({
	                text: "{{ session('message') }}",
	                heading: '{{ session('title') }}',
	                icon: '{{ session('icon', 'success' ) }}',
	                showHideTransition: 'fade',
	                allowToastClose: true,
	                hideAfter: 4000,
	                stack: 5,
	                position: 'top-right',
	                textAlign: 'left',
	                loader: true,
	                loaderBg: '#9EC600',
	            });
	        @endif
	    });
	</script>
	</body>
</html>