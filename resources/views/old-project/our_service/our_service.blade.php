@extends('layouts.master') @section('title') Music||Our Services @endsection @section('content')
<style>

h1, h2, h3, h4, h5, h6 {
  color:#0b0861;
}
a, a:hover, a:focus, a:active {
    text-decoration: none;
    outline: none;
}
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.heading {
    margin-top: 0px;
}
.separator {
    position: relative;
    display: inline-block;
    text-transform: capitalize;
    margin-bottom: 30px;
}
.separator:after,
.separator:before {
    position: absolute;
    content: "";
    width: 50px;
    height: 2px;
    background: #0b0861;
    top: 50%;
}

.separator i {
    color: #0b0861;
}

.separator:after {
    right: 140%;
}

.separator:before {
    left: 140%;
}

.amazing_feature {
padding-top:80px;
padding-bottom:50px;
}

.single_feature{
background: #fff none repeat scroll 0 0;
box-shadow:0 2px 30px rgba(0, 0, 0, 0.1);
margin-bottom: 30px;
padding: 40px 100px;
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.single_feature:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #0b0861;
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
  -webkit-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.single_feature:hover, .single_feature:focus, .single_feature:active {
  color: white;
}
.single_feature:hover:before, .single_feature:focus:before, .single_feature:active:before {
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
}
.feature_icon{}
.single_feature i {
  border: 1px solid #e8e8e9;
  border-radius: 50%;
  color: #f60038;
  float: left;
  font-size: 40px;
  height: 60px;
  line-height: 60px;
  margin-right: 15px;
  position: relative;
  text-align: center;
  transition: all 0.3s ease 0s;
  width: 60px;
  z-index: 3;
  margin-top: 25px;
}
.single_feature:hover i{
  background: #fff;border: 1px solid #fff;color:#0b0861;
}
.single_feature h3 {
  text-transform: capitalize;
  font-size: 20px;
  font-weight:400;
  margin-top:0px;
  overflow: hidden;
}
.single_feature:hover h3{color:#fff;}
.single_feature span {
border-bottom: 1px dashed #ccc;
display: block;
margin: 15px auto 10px;
width: 80px;
}
.single_feature p { margin-bottom: 0 ;overflow: hidden;}




/* ***** */
/* GALLERY STYLES */
/* ***** */

/*Overlay styles*/












</style>





<section class="page-header" data-bg-image="media/background/7.jpg">
			<div class="tim-container">
				<div class="page-header-title text-center">
					<h3>Our Services</h3>
				</div>
				<div class="breadcrumbs">
					<a href="#">Home</a>
					<span>/</span>
					<span>Our Services</span>
				</div>
			</div>
		</section>





        <section class="amazing_feature">
      <div class="container">

            <div class="row">
                <div class="col-md-12 text-center heading-main">
                    <h2 class="heading">OUR FEATURES</h2>
                    <div class="separator"><i class="fa fa-home below-line-about-icon"></i></div>

                </div>
            </div>      
        <div class="row">         
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single_feature">
              <div class="feature_icon"><i class="fa fa-upload" aria-hidden="true"></i></div>
              <h3>UPLOAD AND DISTRIBUTE YOUR MUSIC</h3>
              <p>Upload your music, we deliver your music on JioSaavn, Wynk Music, Gaana, Hungama, Spotify and more than 250+ music platforms.</p>  
            </div>
          </div><!-- END COL-->               
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single_feature">
              <div class="feature_icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
              <h3>	MOBILE CALLERTUNE</h3>
              <p>Make your music as callertune. ( Jio, Airtel, Vodafone, MTNL, BSNL & IDEA )</p>    
            </div>
          </div><!-- END COL-->         
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single_feature">
              <div class="feature_icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></div>
              <h3>YOUTUBE MONETIZATION</h3>
              <p>Monetize your music on YouTube and get paid when other people use your music.</p>  
            </div>
          </div><!-- END COL-->             
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single_feature">
              <div class="feature_icon"><i class="fa fa-inr" aria-hidden="true"></i></div>
              <h3>	
RECEIVE YOUR EARNINGS</h3>
              <p>Request Payments Direct to your Bank account either Paypal and Payoneer.</p>  
            </div>
          </div><!-- END COL-->         
        
        </div><!--- END ROW -->     
      </div><!--- END CONTAINER -->   
    </section>












        <section id="logo-carousel">
    <div class="section-title text-center">
        <h2>Our <span>Platforms</span></h2>
    </div>
    <div class="tim-container">
        <div
            class="swiper-container tim-logo-carousel"
            data-swiper-config='{"loop": true, "speed": 700, "spaceBetween": 50, "autoplay": 3000, "pagination":"#brand-swiper-pagination", "slidesPerView": 5, "grabCursor": true, "paginationClickable": true, "breakpoints": { "1024": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 }, "500": { "slidesPerView": 2 }}}'
        >
            <div class="swiper-wrapper">

			


                <div class="swiper-slide">
                    <div class="brand-logo">
                    <img src="x.jpg" alt="Brand Logo" style="height:200px;width:200px;">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="brand-logo">
                    <img src="xx.jpg" alt="Brand Logo" style="height:200px;width:200px;">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="brand-logo">
                    <img src="xxx.png" alt="Brand Logo" style="height:200px;width:200px;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-logo">
                    <img src="xxxx.png" alt="Brand Logo" style="height:200px;width:200px;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-logo">
                    <img src="xxxxx.jpg" alt="Brand Logo" style="height:200px;width:200px;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-logo">
                    <img src="xxxxxx.jpg" alt="Brand Logo" style="height:200px;width:200px;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-logo">
                    <img src="xxxxxxx.jpg" alt="Brand Logo" style="height:200px;width:200px;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-logo">
                    <img src="xxxxxxxx.jpg" alt="Brand Logo" style="height:200px;width:200px;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-logo">
                    <img src="xxxxxxxxx.jpg" alt="Brand Logo" style="height:200px;width:200px;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-logo">
                    <img src="xxxxxxxxxx.jpg" alt="Brand Logo" style="height:200px;width:200px;">
                    </div>
                </div>
              


           
            </div>
        </div>
    </div>
    <!-- /.tim-container -->
</section>




<section id="gallery" class="section-padding">
    <div class="tim-container">
        <div class="section-title text-center">
            <h2>Music <span>Gallery</span></h2>
        </div>
    </div>
    <!-- /.tim-container -->

    <div class="tim-container d-flex justify-content-center">
        <div class="col-xl-12">
            <div class="tim-isotope tim-isotope-2 wow fadeInUp" data-wow-delay="0.8s">
                <ul class="tim-filter-items tim-album-items grid" style="position: relative; height: 761.673px;">
                    <li class="grid-sizer"></li>
                    @if(isset($data4))
             @foreach($data4 as $details)
                    <li class="tim-album-item grid-item bass piano guiter" style="position: absolute; left: 0%; top: 0px;">
                        <div class="tim-isotope-grid__img effect-active">
                            <img src="service/{{$details->service_image}}" alt="album thumb" style="height:277px;weight:260px;">
                        </div>
                        <a class="popup-modal" href="service/{{$details->service_image}}">
                            <i class="fa fa-picture-o"></i>
                        </a>    
                    </li>
                   @endforeach
                   @endif
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
