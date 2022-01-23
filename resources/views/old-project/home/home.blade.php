@extends('layouts.master') @section('title') Music || Home @endsection @section('content')

<style>

    img {
    max-width: 100%;
    height: auto;
}
.section_title {
  margin-bottom: 40px;
}



.brand_border .fa.fa-minus {
    color: #fff;
    font-size: 8px;
    height: 2px;
        background: #F8C01B none repeat scroll 0 0;
    width: 100px;
}
.brand_border .fas.fa-handshake {
    font-size: 14px;
        color:#000000;
}



.choose_us .section_title {
    margin-top: 45px;
}
#service .single_service {
  padding: 32px;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
  margin-bottom: 50px;
}

#service .single_service:hover{
  box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.4);
}

#service .icon {
  border: 1px solid #666;
  border-radius: 5%;
  color: #e43a90;
  font-size: 35px;
  line-height: 65px;
  overflow: hidden;
  text-align: center;
  text-decoration: none;
  width: 70px;
}

#service .single_service .single_service-left {
  padding-right: 25px;
}

.single_service-heading {
  /* font-size: 15px;
  font-weight: 700;
  text-transform: uppercase;
  color: #000; */
}

.single_service-body p {
  /* font-size: 13px;
  line-height: 25px; */
}

.single_service-left {
  display: table-cell;
  vertical-align: top;
}
.single_service-body {
  color: #333333;
  display: table-cell;
  vertical-align: top;
}
.hvr-curl-top-right {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px transparent;
    position: relative;
}
#service .single_service:hover {
    /* background: #F8C01B none repeat scroll 0 0; */
}




    .section-heading {
        text-align: center;
        margin-bottom: 90px;
    }

    .section-heading h6 {
        font-size: 16px;
        letter-spacing: 3.2px;
        text-align: center;
        color: #ff9900;
        text-transform: uppercase;
        margin-bottom: 30px;
    }

    .section-heading h2 {
        font-size: 30px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.33;
        letter-spacing: normal;
        text-align: center;
        color: #323232;
    }

    #full-faq {
        padding: 120px 0;
    }

    #full-faq .faq-area .card {
        border: 0;
        margin: 8px 0;
        overflow: visible;
    }

    #full-faq .faq-area .card .card-header {
        border: 0;
        padding: 0;
        border-radius: 10px;
        -webkit-backdrop-filter: blur(8px);
        backdrop-filter: blur(8px);
        border: solid 1px #e3e8ec;
        background-color: #f5f8fa;
    }

    #full-faq .faq-area .card .card-header h2 button {
        padding: 20px 30px;
        font-weight: 600;
        font-size: 20px;
        font-stretch: normal;
        font-style: normal;
        line-height: 2;
        letter-spacing: normal;
        text-align: left;
        color: #000000;
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-decoration: none;
    }
    #full-faq .faq-area .card .card-header h2 button:focus {
        box-shadow: none;
    }
    #full-faq .faq-area .card .card-header h2 button span {
        color: #96a9b8;
    }

    #full-faq .faq-area .card .card-header.active {
        background-color: #fffef8;
    }

    #full-faq .faq-area .card .card-header.active span {
        color: #ff9900;
    }

    .pok {
        margin: 0 0px !important;
    }

    .wrapper {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 15px;
        margin: 50px;
        padding: 0px 20px;
    }
    .pricing-table {
        box-shadow: 0px 0px 18px #ccc;
        text-align: center;
        padding: 30px 0px;
        border-radius: 5px;
        position: relative;
    }
    .pricing-table .head {
        border-bottom: 1px solid #eee;
        padding-bottom: 50px;
        transition: all 0.5s ease;
    }
    .pricing-table:hover .head {
        border-bottom: 1px solid #8e2de2;
    }

    .pricing-table .head .title {
        margin-bottom: 20px;
        font-size: 20px;
        font-weight: 700;
    }

    .pricing-table .content .price {
        background: linear-gradient(to right, #e85aa2 0%, #e43a90 100%);
        width: 90px;
        height: 90px;
        margin: auto;
        line-height: 90px;
        border-radius: 50%;
        border: 5px solid #fff;
        box-shadow: 0px 0px 10px #ccc;
        margin-top: -50px;
        transition: all 0.5s ease;
    }
    .pricing-table:hover .content .price {
        transform: scale(1.2);
    }
    .pricing-table .content .price h1 {
        color: #fff;
        font-size: 30px;
        font-weight: 700;
    }
    .pricing-table .content ul {
        list-style-type: none;
        margin-bottom: 20px;
        padding-top: 10px;
    }

    .pricing-table .content ul li {
        margin: 20px 0px;
        font-size: 14px;
        color: #555;
    }

    .pricing-table .content .sign-up {
        background: linear-gradient(to right, #8e2de2 0%, #e54496 100%);
        border-radius: 40px;
        font-weight: 500;
        position: relative;
        display: inline-block;
    }

    .pricing-table .btn {
        color: #fff;
        padding: 14px 40px;
        display: inline-block;
        text-align: center;
        font-weight: 600;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3 linear;
        transition: all 0.3 linear;
        border: none;
        font-size: 14px;
        text-transform: capitalize;
        position: relative;
        text-decoration: none;
        margin: 2px;
        z-index: 9999;
        text-decoration: none;
        border-radius: 50px;
    }

    .pricing-table .btn:hover {
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
    }

    .pricing-table .btn.bordered {
        z-index: 50;
        color: #333;
    }
    .pricing-table:hover .btn.bordered {
        color: #fff !important;
    }

    .pricing-table .btn.bordered:after {
        background: #fff none repeat scroll 0 0;
        border-radius: 50px;
        content: "";
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3 linear;
        transition: all 0.3 linear;
        width: 100%;
        z-index: -1;
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        transform: scale(1);
    }
    .pricing-table:hover .btn.bordered:after {
        opacity: 0;
        transform: scale(0);
    }

    @media screen and (max-width: 768px) {
        .wrapper {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media screen and (max-width: 600px) {
        .wrapper {
            grid-template-columns: 1fr;
        }
    }
</style>

<section id="banner-one">
    <div
        class="swiper-container banner-slider-one"
        data-swiper-config='{"loop": true, "effect": "slide", "prevButton":"#banner-nav-prev", "nextButton": "#banner-nav-next", "speed": 700, "autoplay": 5000, "grabCursor": true, "paginationClickable": true}'
    >
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-bg-image="media/banner/1.jpg" data-parallax="image">
                <div class="slider-content" data-animate="fadeIn">
                    <h3 data-animate="fadeInUp" style="    margin: 15px 75px;">NK DIGITAL MEDIA TRULY MUSIC DISTRIBUTION AND LICENSING SERVICE FOR COMPANY, LABEL, INDEPENDENT ARTISTS.</h3>
                    <!-- <h2 data-animate="fadeInUp" data-delay="0.5s">Spanish Make your Feel</h2> -->

                    <p data-animate="fadeInUp" data-delay="0.9s">
                       We Upload and Monetize Your Songs Tunes & All Music Streaming Store Worldwide<br />
                       
                    </p>
                    <!--<a href="#" class="tim-slide-btn" data-animate="fadeInLeft" data-delay="0.9s">-->
                    <!--    Download Latest Album-->
                    <!--</a>-->

                    <!--<a href="#" class="tim-slide-btn tim-slide-btn-bg" data-animate="fadeInRight" data-delay="0.9s">-->
                    <!--    <i class="fa fa-apple"></i>-->
                    <!--    Download On iTunes-->
                    <!--</a>-->
                </div>
                <!-- /.slider-content -->
            </div>

            <div class="swiper-slide" data-bg-image="media/banner/2.jpg" data-parallax="image">
                <div class="slider-content" data-animate="fadeIn">
                <h3 data-animate="fadeInUp" style="    margin: 15px 75px;">NK DIGITAL MEDIA TRULY YOUTUBE CHANNEL MANAGEMENT, CONTENT ID AND MX PLAYER CONTENT PROVIDER SERVICE FOR COMPANY, LABEL, INDEPENDENT ARTISTS.</h3>
                    <!-- <h2 data-animate="fadeInUp" data-delay="0.5s">Spanish Make your Feel</h2> -->

                    <p data-animate="fadeInUp" data-delay="0.9s">
                      We Upload and Monetize Your Content Worldwide<br />
                       
                    </p>
                    <!--<a href="#" class="tim-slide-btn tim-slide-btn-bg" data-animate="fadeInLeft" data-delay="0.9s">-->
                    <!--    Download Latest Album-->
                    <!--</a>-->

                    <!--<a href="#" class="tim-slide-btn tim-slide-btn-bg" data-animate="fadeInRight" data-delay="0.9s">-->
                    <!--    <i class="fa fa-apple"></i>-->
                    <!--    Download On iTunes-->
                    <!--</a>-->
                </div>
                <!-- /.slider-content -->
            </div>
        </div>

        <!-- Swiper Nav Prev -->
        <div id="banner-nav-prev" class="slider-nav-prev">
            <i class="fa fa-angle-left"></i>
        </div>
        <!-- Swiper Nav Next -->
        <div id="banner-nav-next" class="slider-nav-next">
            <i class="fa fa-angle-right"></i>
        </div>
    </div>
</section>
<!-- /#banner-one -->



<section id="service" style="margin-top: 50px;">
    <div class="container">
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="section_title text-center">
                    <h2>Our Services</h2>
                    <div class="brand_border">
                        <i class="fa fa-minus" aria-hidden="true"></i>
                        <i class="fas fa-handshake"></i>
                        <i class="fa fa-minus" aria-hidden="true"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. <br>
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes
                    </p>
                </div>
            </div>
        </div> -->
        <div class="row">
            <!--START SINGLE SERVICE AREA-->
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="single_service hvr-curl-top-right">
                    <div class="single_service-left">
                        <div class="icon">
                            <i class="fa fa-upload"></i>
                        </div>
                    </div>
                    <div class="single_service-body">
                        <h4 class="single_service-heading">
UPLOAD AND DISTRIBUTE YOUR MUSIC</h4>
                        <p>Upload your music, we deliver your music on JioSaavn, Wynk Music, Gaana, Hungama, Spotify and more than 250 music platforms.</p>
                    </div>
                </div>
            </div>
            <!--/END SINGLE SERVICE AREA-->
            <!--START SINGLE SERVICE AREA-->
           
            <!--/END SINGLE SERVICE AREA-->
            <!--START SINGLE SERVICE AREA-->
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="single_service hvr-curl-top-right">
                    <div class="single_service-left">
                    <div class="icon">
                            <i class="fa fa-youtube-play"></i>
                        </div>
                    </div>
                    <div class="single_service-body">
                        <h4 class="single_service-heading">YOUTUBE MONETIZATION</h4>
                        <p>Monetize your music on YouTube and get paid when other people use your music.</p>
                    </div>
                </div>
            </div>






            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="single_service hvr-curl-top-right">
                    <div class="single_service-left">
                    <div class="icon">
                            <i class="fa fa-volume-control-phone"></i>
                        </div>
                    </div>
                    <div class="single_service-body">
                        <h4 class="single_service-heading">MOBILE CALLERTUNE</h4>
                        <p>Make your music as callertune. ( Jio, Airtel, Vodafone, MTNL, BSNL &amp; IDEA )</p>
                    </div>
                </div>
            </div>



            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="single_service hvr-curl-top-right">
                    <div class="single_service-left">
                    <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                    </div>
                    <div class="single_service-body">
                        <h4 class="single_service-heading">RECEIVE YOUR EARNINGS</h4>
                        <p>Request payments direct to your Bank account either Paypal and Payoneer.</p>
                        <!--<p>Monetize your music on YouTube and get paid when other people use your music.</p>-->
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>


















<!--===========================-->
<!--=        	Album         =-->
<!--===========================-->
<!-- <section id="tranding-album">
    <div class="tim-container">
        <div class="section-title text-center">
            <h2>Trending Albums <span>Hightlights</span></h2>
            <p>
                There are many variations of passages of Lorem Ipsum available but the majority have suffered<br />
                alteration in some injected humour.
            </p>
        </div>
       

        <div class="album-boxs">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-6 col-full-width">
                    <div class="album-box">
                        <div class="box-thumb">
                            <img src="media/tranding-album/1.jpg" alt="album" />
                        </div>

                        <div class="album-details clearfix">
                            <div class="content">
                                <h3 class="album-name"><a href="#">Under the bus</a></h3>
                                <p>Song Artist Name</p>
                            </div>

                            <div class="icon float-right">
                                <i class="tim-headphones"></i>
                            </div>
                        </div>
                       
                    </div>
                    
                </div>
              

                <div class="col-lg-4 col-md-6 col-6 col-full-width">
                    <div class="album-box">
                        <div class="box-thumb">
                            <img src="media/tranding-album/2.jpg" alt="album" />
                        </div>

                        <div class="album-details clearfix">
                            <div class="content">
                                <h3 class="album-name"><a href="#">Your graciousness</a></h3>
                                <p>Song Artist Name</p>
                            </div>

                            <div class="icon float-right">
                                <i class="tim-headphones"></i>
                            </div>
                        </div>
                      
                    </div>
                  
                </div>
              

                <div class="col-lg-4 col-md-6 col-6 col-full-width">
                    <div class="album-box">
                        <div class="box-thumb">
                            <img src="media/tranding-album/3.jpg" alt="album" />
                        </div>

                        <div class="album-details clearfix">
                            <div class="content">
                                <h3 class="album-name"><a href="#">Curiosity's death</a></h3>
                                <p>Song Artist Name</p>
                            </div>

                            <div class="icon float-right">
                                <i class="tim-headphones"></i>
                            </div>
                        </div>
                       
                    </div>
              
                </div>
          

                <div class="col-lg-4 col-md-6 col-6 col-full-width">
                    <div class="album-box">
                        <div class="box-thumb">
                            <img src="media/tranding-album/4.jpg" alt="album" />
                        </div>

                        <div class="album-details clearfix">
                            <div class="content">
                                <h3 class="album-name"><a href="#">Beyond infinity world</a></h3>
                                <p>Song Artist Name</p>
                            </div>

                            <div class="icon float-right">
                                <i class="tim-headphones"></i>
                            </div>
                        </div>
                      
                    </div>
                  
                </div>
               

                <div class="col-lg-4 col-md-6 col-6 col-full-width">
                    <div class="album-box">
                        <div class="box-thumb">
                            <img src="media/tranding-album/5.jpg" alt="album" />
                        </div>

                        <div class="album-details clearfix">
                            <div class="content">
                                <h3 class="album-name"><a href="#">Battleborn No basis</a></h3>
                                <p>Song Artist Name</p>
                            </div>

                            <div class="icon float-right">
                                <i class="tim-headphones"></i>
                            </div>
                        </div>
                      
                    </div>
                   
                </div>
               

                <div class="col-lg-4 col-md-6 col-6 col-full-width">
                    <div class="album-box">
                        <div class="box-thumb">
                            <img src="media/tranding-album/6.jpg" alt="album" />
                        </div>

                        <div class="album-details clearfix">
                            <div class="content">
                                <h3 class="album-name"><a href="#">Your graciousness life</a></h3>
                                <p>Song Artist Name</p>
                            </div>

                            <div class="icon float-right">
                                <i class="tim-headphones"></i>
                            </div>
                        </div>
                       
                    </div>
                   
                </div>
            
            </div>
            
        </div>
        
    </div>
    
</section> -->


<!-- Pricing Section-->
<div class="section-title text-center">
    <h2>Our<span> Membership Planing</span></h2>
    <!-- <p>
            There are many variations of passages of Lorem Ipsum available but the majority have suffered<br>
            alteration in some injected humour.
         </p> -->
</div>

<div class="wrapper">
    <div class="pricing-table gprice-single pok">
        <div class="head">
            <h4 class="title">Label</h4>
        </div>
        <div class="content">
            <div class="price">
                <h5 style="margin-top: -11px;color: white;">₹ 5499</h5>
            </div>
            <ul>
                <li>All Major Platforms</li>
                <li>Unlimited Release</li>
                <li>Unlimited Artist</li>
                <li>1 Custom Label Name</li>
                <li>Customized Callertune</li>
                <li>Schedule Release</li>
                <li> Take 80 % Revenue</li>
                <li>YouTube Content ID</li>
                <li>Same Day Approval</li>
                <li>No Extra/Hidden cost</li>
            </ul>
            <div class="sign-up">
                <a href="#" class="btn bordered radius">Signup Now</a>
            </div>
        </div>
    </div>

    <div class="pricing-table gprice-single pok">
        <div class="head">
            <h4 class="title">White Label</h4>
        </div>
        <div class="content">
            <div class="price">
            <h5 style="margin-top: -11px;color: white;">₹ 6999</h5>
            </div>
            <ul>
                <li>All Major Platforms</li>
                <li>Unlimited Release</li>
                <li>Unlimited Artist</li>
                <li>Multiple Custom Label</li>
                <li>Customized Callertune</li>
                <li>Schedule Release</li>
                <li> Take 90 % Revenue</li>
                <li>YouTube Content ID</li>
                <li>Same Day Approval</li>
                <li>No Extra/Hidden cost</li>
            </ul>
            <div class="sign-up">
                <a href="#" class="btn bordered radius">Signup Now</a>
            </div>
        </div>
    </div>

    <div class="pricing-table gprice-single pok">
        <div class="head">
            <h4 class="title">Single</h4>
        </div>
        <div class="content">
            <div class="price">
            <h5 style="margin-top: -11px;color: white;">₹ 499</h5>
            </div>
            <ul>
                <li>All Major Platforms</li>
                <li>Unlimited Release</li>
                <li>Custom Artist Name</li>
                <li>Music Note Label Name </li>
                <li>Customized Callertune</li>
                <li>Schedule Release</li>
                <li>Take 85 % of Revenue</li>
                <li>YouTube Content ID</li>
                <li>Same Day Approval</li>
                <li>No Extra/Hidden cost</li>
                



            </ul>
            <div class="sign-up">
                <a href="#" class="btn bordered radius">Signup Now</a>
            </div>
        </div>
    </div>
    <!-- <div class="pricing-table gprice-single pok">
        <div class="head">
            <h4 class="title">Premium</h4>
        </div>
        <div class="content">
            <div class="price">
                <h1 style="margin-top: -19px;">639</h1>
            </div>
            <ul>
                <li>5 GB Ram</li>
                <li>40GB SSD Cloud Storage</li>
                <li>Month Subscription</li>
                <li>Responsive Framework</li>
                <li>Monthly Billing Software</li>
                <li>1 Free Website</li>
            </ul>
            <div class="sign-up">
                <a href="#" class="btn bordered radius">Signup Now</a>
            </div>
        </div>
    </div> -->
</div>

<!--=============================-->
<!--=        	Artitst         =-->
<!--=============================-->
<section id="artist" class="section-padding section-dark" data-parallax="image" data-bg-image="media/background/1.jpg">
    <div class="container">
        <div class="section-title text-center">
            <h2>About Us</h2>
           
						<p style="margin: 3px 87px;">Upload your song on Jiosaavn, Wynk Music, Hungama Music, Gaana, Spotify, Amazon Music, Youtube Music, Apple Music, iTunes, Resso, Instagram, Facebook, Soundcloud, TikTok, MX Player and More than 250+ digital platforms</p>	
        <div class="row">
            <div class="col-lg-6 col-md-6 col-full-width">
                <div class="artist-image">
                    <img src="media/artist/1.jpg" alt="artist" />
                </div>
                <!-- /.artist-image -->
            </div>
            <!-- /.col-lg-6 col-md-6 col-full-width -->

            <div class="col-lg-6 col-md-6 col-full-width">
                <div class="artist-details">
                    <!-- <h3 class="artist-name">It’s james robinson</h3>
                    <h4 class="band-name">Band Name Here</h4> -->

                    <div class="details">
                        <h3>NK DIGITAL MEDIA</h3>

                        <p>
								NK Digital Media is Powered by NK MUSIC PRODUCTION, is a Digital music
aggregator from India and YouTube Channel Management.
								</p>
<br>
								<p>
							We provide Music Distribution on International and Domestic
Platform. MX Player Content Provider, YouTube UGC Claims, Facebook
Monetization and YouTube Channel Management.
								</p>

                        <!-- <img src="media/artist/2.png" alt="Artist- Sing" class="sng" /> -->
                    </div>
                </div>
                <!-- /.artist-details -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.tim-container -->
</section>
<!-- /#artist -->

<!--==============================-->
<!--=        	Upcoming         =-->
<!--==============================-->
<section id="logo-carousel">
    <div class="section-title text-center">
        <h2>Our Callertune <span>Partners</span></h2>
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
<!-- /#logo-carousel -->

<section id="full-faq">
    <div class="container">
        <div class="section-title text-center">
            <h2>Frequently Asked <span>Questions</span></h2>
            <!-- <p>
                There are many variations of passages of Lorem Ipsum available but the majority have suffered<br>
                alteration in some injected humour.
            </p> -->
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="accordion faq-area" id="accordionExample">
                    <div class="card">
                        <div class="card-header active" id="heading1">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                What we do?<span class="fa fa-caret-up"></span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionExample">
                            <div class="card-body">
                            We distribute your songs on all Internation and Indian streaming platforms including callertune and content ID.                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading2">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                What do I need to get started with NK Digital Media?<span class="fa fa-caret-down"></span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
                            <div class="card-body">
                            You can register with your email id and mobile no.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading3">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                How much time it takes for release approval? <span class="fa fa-caret-down"></span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                            <div class="card-body">
                            Once your release is approved. we distribute your music instantly.<br>
                            The platforms may take upto 1-7 business days to process your content, depending on the content rush. Generally your music appears in some stores within 6 hours after approval.
<br>
For callertune (CRBT), the telecom partners still using manual content ingestion method and can take anywhere between 2-10 business days.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading4">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                When will i get paid? <span class="fa fa-caret-down"></span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                            <div class="card-body">
                            The platforms send us reports quarterly (3months). But sometimes it takes upto 6 months.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--<section id="logo-carousel">-->
<!--    <div class="section-title text-center">-->
<!--        <h2>Our Prime <span>Partners</span></h2>-->
<!--    </div>-->
<!--    <div class="tim-container">-->
<!--        <div-->
<!--            class="swiper-container tim-logo-carousel"-->
<!--            data-swiper-config='{"loop": true, "speed": 700, "spaceBetween": 50, "autoplay": 3000, "pagination":"#brand-swiper-pagination", "slidesPerView": 5, "grabCursor": true, "paginationClickable": true, "breakpoints": { "1024": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 }, "500": { "slidesPerView": 2 }}}'-->
<!--        >-->
<!--            <div class="swiper-wrapper">-->

<!--			@if(isset($data4))-->
<!--             @foreach($data4 as $details)-->


<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-logo">-->
<!--                        <img src="ppartner/{{$details->ppartner_image}}" alt="Brand Logo" style="height:53px;width:149px;">-->
<!--                    </div>-->
<!--                </div>-->

<!--              @endforeach-->
<!--              @endif-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    
<!--</section>-->






<script>
    $(".card-header").on("click", function () {
        $(this).find("span").toggleClass("fa-caret-up fa-caret-down");
        $(".card-header").removeClass("active");
        $(this).toggleClass("active");
    });
</script>

@endsection
