<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="NDI-dev" content="Norma Diagnostika Indonesia" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,700|Open+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/css/guest/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="/css/guest/style.css" type="text/css" />
	<link rel="stylesheet" href="/css/guest/dark.css" type="text/css" />
	<link rel="stylesheet" href="/css/guest/swiper.css" type="text/css" />

	<!-- Business Demo Specific Stylesheet -->
	<link rel="stylesheet" href="/css/business.css" type="text/css" />
	<link rel="stylesheet" href="/css/guest/fonts/fonts.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="/css/guest/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="/css/guest/animate.css" type="text/css" />
	<link rel="stylesheet" href="/css/guest/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="/css/guest/et-line.css" type="text/css" />

	<link rel="stylesheet" href="/css/guest/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Theme Color
	============================================= -->
	<!-- <link rel="stylesheet" href="/css/guest/colors.php?color=00BED7" type="text/css" /> -->
	<link rel="stylesheet" href="/css/guest/colors.php?color=542C4B" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>PT. Norma Diagnostika Indonesia</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@include("guest.layouts.header")

		@include("guest.layouts.slider")

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap pb-0 bg-norma-dark" style="z-index: 1;">

				<!-- What We Do
        		============================================= -->
				{{-- @include("guest.contents.section1") --}}

				<!-- How We Work
				============================================= -->
				{{-- @include("guest.contents.section2") --}}

				<!-- About Us
				============================================= -->
				{{-- @include("guest.contents.section3") --}}

				<!-- Our Works
				============================================= -->
				@include("guest.contents.section4")

				<!-- Video Sections
				============================================= -->
				{{-- @include("guest.contents.section5") --}}

				<!-- Parallax Area
				============================================= -->
				{{-- @include("guest.contents.section6") --}}

				<!-- Team Work
				============================================= -->
				{{-- @include("guest.contents.section7") --}}

				<!-- Brands Carousel Principal
				============================================= -->
				@include("guest.contents.section8")

				<!-- Brands Carousel Customer
				============================================= -->
				@include("guest.contents.section9")
			</div>
		</section><!-- #content end -->

		@include("guest.layouts.footer")

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="/js/guest/jquery.js"></script>
	<script src="/js/guest/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="/js/guest/functions.js"></script>

	<script>
		jQuery(window).on( 'pluginCarouselReady', function(){
			$('#oc-features').owlCarousel({
				items: 1,
				margin: 60,
			    nav: true,
			    navText: ['<i class="icon-line-arrow-left"></i>','<i class="icon-line-arrow-right"></i>'],
			    dots: false,
			    stagePadding: 30,
			    responsive:{
					768: { items: 2 },
					1200: { stagePadding: 200 }
				},
			});
		});
	</script>

</body>
</html>