@extends('layouts.master') @section('title') Music || Contact us @endsection @section('content')
<section class="page-header" data-bg-image="media/background/7.jpg">
			<div class="tim-container">
				<div class="page-header-title text-center">
					<h3>Get with us</h3>
					<h2>Contact</h2>
				</div>

				<div class="breadcrumbs">
					<a href="#">Home</a>
					<span>/</span>
					<span>Contact</span>
				</div>

			</div>
			<!-- /.tim-container -->
		</section>
		<!-- /#page-header -->

		<!--=============================-->
		<!--=        Contact content        =-->
		<!--=============================-->


		<!-- Map Area Start -->

		<div class="google-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.0520102247715!2d84.81847611442805!3d22.238105350770503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a201918e998f7b9%3A0x805fc009cb2c7a1!2sNihar%20Medical%20Line%20PLOT%20L%2F29%2C%20Phase%201%2C%20Chhend%20Colony%2C%20Rourkela%2C%20Odisha%20769015!5e0!3m2!1sen!2sin!4v1615281171065!5m2!1sen!2sin" width="100%" height="305" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			<!-- /.google-map -->
		</div>
		<!-- /#map -->

		<section class="contact-info">
			<div class="container-fluid no-pad">
				<div class="contact-info-inner">
					<div class="row no-gutters">
						<div class="col-md-4">

							<div class="email-info sin-cont-info d-flex align-items-center">
								<div class="center-wrap">
									<i class="fa fa-at" aria-hidden="true"></i>
									<h3>Email Us</h3>
									<p>Mail:<a href="mailto: nkmuzicproduction@gmail.com"> nkmuzicproduction@gmail.com</a></p>
									<!-- <a href="mailto:name@email.com">info@yoursite.com</a> -->
								</div>

							</div>
						</div>
						<!-- /.col-md-4 -->
						<div class="col-md-4">
							<div class="office-location sin-cont-info d-flex align-items-center">
								<div class="center-wrap">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
									<h3>office location</h3>
									<p>Address:  Nihar Medical Line PLOT L/29,Phase-1 Chhend Colony,Rourkela,Odisha 769015</p>
								</div>
							</div>
						</div>
						<!-- /.col-md-4 -->
						<div class="col-md-4">
							<div class="call-us sin-cont-info d-flex align-items-center">
								<div class="center-wrap">
									<i class="fa fa-phone" aria-hidden="true"></i>
									<h3>call Us</h3>
									<p>Phone: <a href="tel:9337229896">+91 9337229896</a></p>
									<!-- <a href="tel:158-659-8546">158-659-8546</a> -->
								</div>
							</div>
						</div>
						<!-- /.col-md-4 -->

					</div>
				</div>
				<!-- /.contact-info-inner -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.contact-info -->



		<!-- Contact bottom area Start -->
		<section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-push-3"></div>
                <div class="col-md-6 col-md-push-3" >
				@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<a type="button" class="close" data-dismiss="alert">×</a>	
        <strong>{{ $message }}</strong>
</div>
@endif
       
                    {!! Form::open(['route'=>'add_contact_action','role'=>'form','files'=>true,'id'=>'add_register_code','autocomplete' => 'off','enctype'=>'multipart/form-data']) !!} @csrf
                   
                    <div class="icon-box mb-0 p-0" style="margin-top: 20px;">
                        <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10" >
                            <i class="pe-7s-users"></i>
                        </a>
                        <h4 class="text-gray pt-10 mt-0 mb-30">Message Now</h4>
                    </div>
                    <hr />
                    <p class="text-gray">Message Us</p>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="form_name">Full Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your first name." />
                            <div class="text-danger"><strong id="fname_error"></strong></div>
                        </div>

                        <!-- <div class="form-group col-md-6">
                            <label for="name-l">Last name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="lname" id="name-l" placeholder="Enter your last name." />
                            <div class="text-danger"><strong id="lname_error"></strong></div>
                        </div> -->

                        <div class="form-group col-md-6">
                            <label for="email">Email <span style="color: red;">*</span></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." />
                            <div class="text-danger"><strong id="email_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="phone">Phone <span style="color: red;">*</span></label>
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter Your Phone no." />
                            <div class="text-danger"><strong id="phone_error"></strong></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Subject <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Your Subject." />
                            <div class="text-danger"><strong id="subject_error"></strong></div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="phone">Mesage <span style="color: red;">*</span></label>
                            <textarea rows = "5" cols = "50" id="message" class="form-control" name = "message">Enter your Message</textarea>
                            <div class="text-danger"><strong id="message_error"></strong></div>
                        </div>
                       
                        <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}" />
                    </div>

                    {{Form::submit('Submit',['class'=>'btn btn-dark btn-lg btn-block mt-15','id'=>'register','style'=>'height: 50px; margin-top: 20px;margin-bottom: 20px;'])}}

                    <!-- <div class="form-group">
                <button class="btn btn-dark btn-lg btn-block mt-15" id="register" type="submit">Register Now</button>
              </div> -->
                    {{ Form::close() }}
                </div>
                <div class="col-md-3 col-md-push-3"></div>
            </div>
        </div>
    </section>
    <br><br><br>
		<!-- Contact bottom area end -->

@endsection
