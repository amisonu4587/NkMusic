@extends('layouts.master') @section('title','Charity | Register Now') @section('add-css')
<style>
    .row {
        margin-right: 1px;
        margin-left: 1px;
    }
    
</style>
@endsection @section('content')
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="page-header" data-bg-image="media/background/7.jpg">
        <div class="tim-container">
            <div class="page-header-title text-center">
                <h3>Register Now</h3>
            </div>

            <div class="breadcrumbs">
                <a href="#">Home</a>
                <span>/</span>
                <span>Register Now</span>
            </div>
        </div>
        <!-- /.tim-container -->
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-push-3"></div>
                <div class="col-md-6 col-md-push-3" style="box-shadow: 0 0 10px 5px;margin-top: 46px;">
                    {!! Form::open(['route'=>'add_register','role'=>'form','files'=>true,'id'=>'add_register_code','autocomplete' => 'off','enctype'=>'multipart/form-data']) !!} @csrf
                   
                    <div class="icon-box mb-0 p-0" style="margin-top: 20px;">
                        <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10" >
                            <i class="pe-7s-users"></i>
                        </a>
                        <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
                    </div>
                    <hr />
                    <!--<p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias.</p>-->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="form_name">User Name</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter your User name." />
                            <div class="text-danger"><strong id="username_error"></strong></div>
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
                        <!-- <div class="form-group col-md-6">
                            <label for="phone">State <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="state" id="state" placeholder="Enter Your State." />
                            <div class="text-danger"><strong id="phone_error"></strong></div>
                        </div> -->
                        <!-- <div class="form-group col-md-6">
                            <label for="phone">City <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter Your city." />
                            <div class="text-danger"><strong id="city_error"></strong></div>
                        </div> -->
                        <!-- <div class="form-group col-md-6">
                            <label for="phone">Bank A/C Number <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="bank" id="bank" placeholder="Enter Your Bank A/C no." />
                            <div class="text-danger"><strong id="bank_error"></strong></div>
                        </div> -->

                        <!-- <div class="form-group col-md-6">
                            <label for="phone">IFCS Code <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="ifcs" id="ifcs" placeholder="Enter IFCS Code." />
                            <div class="text-danger"><strong id="ifcs_error"></strong></div>
                        </div> -->
                        <!-- <div class="form-group col-md-6">
                            <label for="phone">Upload video or audio <span style="color: red;">*</span></label>
                            <input type="file" class="form-control" name="video" id="video" placeholder="uplode" onchange="validateImage(this.id);">
                            <div class="text-danger"><strong id="video_error"></strong></div>
                        </div> -->

                        <div class="form-group col-md-6">
                            <label for="password">Password <span style="color: red;">*</span></label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password." />
                            <div class="text-danger"><strong id="password_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Confirm Password <span style="color: red;">*</span></label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Enter Your Confirm password." />
                            <div class="text-danger"><strong id="password-confirm_error"></strong></div>
                        </div>

                       <div class="form-group col-md-12 otp_view" id="ss">
                    <label for="review"style="color:red;" >Enter One Time Password(OTP)</label>
                    <input onkeyup="matchotp(this.value);" onchange="matchotp(this.value);" type="number" class="form-control" name="otp" id="otp" required placeholder="Enter One Time Password(OTP)">
            
                </div>

<div class="form-group col-md-12 otp_view" id="ss">
                
                    <button type="button" class="btn btn-dark btn-lg btn-block mt-15" onclick="abc();" id="sendotp">
                        Send OTP
                    </button>
                    <button type="button" class="btn btn-dark btn-lg btn-block mt-15 otp_view" onclick="abc();" id="resendotp" style="display:none;    margin-top: 20px;">
                        Re-Send OTP
                    </button>
            
                </div>
                        <input type="hidden" id="otp_value" />
                        <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}" />
                    </div>
            {{Form::submit('Submit',['class'=>'btn btn-dark btn-lg btn-block mt-15','id'=>'register','style'=>'height: 50px;  margin-top: 20px; display:none'])}}


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
</div>
<!-- end main-content -->
@endsection @section('add-js')
<script>
    $(document).ready(function () {
        $("#ss").hide();
        function reset() {
            $("#id").val("");
            $("#username").val("");
            
            $("#email").val("");
          
            





            $("#password").val("");
            $("#password_confirmation").val("");
        }

        $("#add_register_code").submit(function (event) {
            event.preventDefault();

            var formdata = new FormData($(this)[0]);
            $.ajax({
                url: $(this).attr("action"),
                type: "POST",
                dataType: "json",
                processData: false,
                contentType: false,
                cache: false,
                data: formdata,
                success: function (response) {
                    console.log(response);
                    // success callback functiondelete_logo
                    if (response.success == true) {
                        //swal("Congratulation!", "Register Sucesssfully Done", "success");
                        window.location.href = "/login_now";
                        reset();
                    }
                },
                error: function (jqXHR) {
                    var errormsg = jQuery.parseJSON(jqXHR.responseText);
                    $.each(errormsg.errors, function (key, value) {
                        $("#" + key + "_error").html(value);
                    });
                },
            });
        });
    });
    
    
    
    
    
    
    
    
    function abc(){
    var len=$("#phone").val().length;
   // alert(len);
    var token=$("#_token").val();
    var number=$("#phone").val();
    var email=$("#email").val();
    var namel=$("#name-l").val();
    var namef=$("#name-f").val();
    var password=$("#password").val();
    var passwordconfirm=$("#password_confirmation").val();
   //alert(number);
     if(number!=null && email!='' && namef!="" && namel!="" && password!="" && passwordconfirm!=""){
     
           
        $.ajax({
                    url:'/sand_otp',
                    type:'POST', 
                    data:{_token:token,number:number,name:name}, 
                    success:function(data)
                    {
                        $("#mes").html('OTP sent successfully on your phone number').css('color','green');
                        $("#otp_value").val(data);
                        $(".otp_view").css('display','block');
                        $("#sendotp").css('display','none');
                       
                    
                    }
                    
                    });

                
     
              
               
    } else{
        alert('Fill up proper Details!');
    }
   
                   
           
       
  

 

    }
    function matchotp(otp){
  
  ///  alert();
    var orotp=$('#otp_value').val();
    var len=$("#otp").val().length;
  
 if(len==6){
if(otp==orotp){
    $("#register").css('display','block');
    $("#mes").html(' ').css('color','red');
    $("#resendotp").css('display','none');
}else{
    $("#mes").html('Please enter valid OTP').css('color','red');
    $("#register").css('display','none');
}
}else if(len>6){
    $("#mes").html('Please enter valid OTP').css('color','red');
    $("#register").css('display','none');
}else {
    $("#mes").html(' ').css('color','red');
    $("#register").css('display','none');
}
}
    
    
    
    
    
    
    
    
    
    
</script>


<script type="text/javascript">
            function validateImage(id) {
                alert(id);
                var formData = new FormData();

                var file = document.getElementById(id).files[0];

                formData.append("Filedata", file);
                var t = file.type.split("/").pop().toLowerCase();
                console.log(t)
                if (t != "mp3" && t != "mp4" && t != "m4a" t != "avi" && t != "mpeg" && t != "mov") {
                    swal("Error!!", "Please select a valid audio or video file!", "error");
                       
                    document.getElementById(id).value = "";
                    return false;
                }
                if (file.size > 20480000) {
                     alert('Max Upload size is 20 MB only');
                    // mdtoast("Max Upload size is 2MB only.", {
                    //     type: "warning",
                    // });
                    document.getElementById(id).value = "";
                    return false;
                }
                return true;
            }
            
            
            
            
            
            
            
            
            
            
            
        </script>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
