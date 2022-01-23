@extends('layouts.master') @section('title') Music||Prime Partners @endsection @section('content')
<section class="page-header" data-bg-image="media/background/7.jpg">
			<div class="tim-container">
				<div class="page-header-title text-center">
					<h3>Our Prime Partners</h3>
				
				</div>

				<div class="breadcrumbs">
					<a href="#">Home</a>
					<span>/</span>
					<span>Our Prime Partners</span>
				</div>

			</div>
			<!-- /.tim-container -->
		</section>
		<!-- /#page-header -->

		<!--===========================-->
		<!--=        	About         =-->
		<!--===========================-->

        <section id="logo-carousel">
    <div class="section-title text-center">
        <h2>Our Prime <span>Partners</span></h2>
    </div>
    <div class="tim-container">
        <div
            class="swiper-container tim-logo-carousel"
            data-swiper-config='{"loop": true, "speed": 700, "spaceBetween": 50, "autoplay": 3000, "pagination":"#brand-swiper-pagination", "slidesPerView": 5, "grabCursor": true, "paginationClickable": true, "breakpoints": { "1024": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 }, "500": { "slidesPerView": 2 }}}'
        >
            <div class="swiper-wrapper">

			@if(isset($data3))
             @foreach($data3 as $details)


                <div class="swiper-slide">
                    <div class="brand-logo">
                        <img src="partner/{{$details->partner_image}}" alt="Brand Logo" style="height:53px;width:149px;">
                    </div>
                </div>

              @endforeach
              @endif
            </div>
        </div>
    </div>
    <!-- /.tim-container -->
</section>
@endsection
