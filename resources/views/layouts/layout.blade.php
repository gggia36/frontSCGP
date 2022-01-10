<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SCGP</title>
	<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('bootstrap5/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('OwlCarousel/dist/assets/owl.carousel.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/custom.css?v=19')}}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

	<!-- aos -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


	<!--Icons-->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>

	@include('layouts.header')

	@yield('content')

	@include('layouts.footer')


	@yield('modal')

	<script src="{{asset('bootstrap5/js/bootstrap.min.js') }}"></script>
	<script src="{{asset('assets/js/jquery-1.12.4.js')}}"></script>
	<script src="{{asset('OwlCarousel/dist/owl.carousel.min.js') }}"></script>
	<script src="{{asset('assets/js/home.js')}}"></script>

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
	
	@yield('script')

	<script type="text/javascript">
  $(document).ready(function () {
	if ($(window).width() > 991){
	$('.navbar-light .d-menu').hover(function () {
	        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
	    }, function () {
	        $(this).find('.sm-menu').first().stop(true, true).delay(120).slideUp(100);
	    });
	    }
	});

	  $(document).ready(function(){
	  $('#nav-toggle').click(function(){
	    if($(this).hasClass('open')){
	      $(this).removeClass('open');
	      $('nav.mobile').removeClass('mobile--open');
	    }else{
	      $(this).addClass('open');
	      $('nav.mobile').addClass('mobile--open');
	    }
	  });
	});

	 $(document).ready(function(){
	  $(".click-menu").click(function(){
	    $(".sub-dropdown").toggle();
	  });
	});

	$('#zero-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		dots: false,
		mouseDrag: false,
		items: 3,
		center: true,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:3
			},
    	}
	})

	$('#recycle-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		dots: false,
		mouseDrag: false,
		items: 3,
		center: true,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:3
			},
    	}
	})

</script>

</body>
</html>
