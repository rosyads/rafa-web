@extends("guest.layouts.main")

@section('content')

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

			<!-- Products and Services
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
    
@endsection

@section('header')
	transparent-header dark
@endsection

@section('fonts')
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,700|Open+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet" type="text/css" />
@endsection