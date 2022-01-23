@extends('layouts.master') @section('title','Albam | Final Submission') @section('add-css')
<style>
    .row {
        margin-right: 1px;
        margin-left: 1px;
    }

    .block {
      display: block;
   }

    
.steps{margin: 0px;padding: 0px;list-style-image: none;font-family: Arial, Helvetica, sans-serif;}

@media (min-width: 768px) {
.steps li{width:31%; display:inline-block;position: relative;text-align: center;color: #ccc;}
.steps li:before{
  content:"";
  position: absolute;
  top: 30%;
  right: -30%;
  background: #ccc;
  height: 3px;
  width: 60%;}
.steps li:last-child:before{display: none;}
.steps li span{width: 80%;margin:auto;}
.steps li span:before{display: block;margin:auto;}
.steps li span:before{
  font-family: Arial;
  width: 30px;
  height: 30px;
	content: attr(data-step);
	border: 3px solid #ccc;
  border-radius: 50%;
  color: #ccc;
  font-size:20px;
	font-family: Arial, Helvetica, sans-serif;
	line-height: 30px;
  background: #fff;
  margin-bottom: 10px;}
.steps li.active,.steps li.activein{color: #73b5e8;}
.steps li.active span:before,
.steps li.activein span::before{
  width: 40px;
  height: 40px;
	border: 3px solid #73b5e8;
  color: #73b5e8;
  font-size:20px;
	line-height: 40px;
  background: #fff;
}

.steps li.active:before{background: linear-gradient(to right,#73b5e8 0%, #ccc 100%);}
.steps li.activein:before{background:#73b5e8;}
}
@media (max-width: 767px) {
  .steps li{display: none;}
  .steps li.active{
    display:block;
    width: 100%;
    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #ccc;
  }
}
    
</style>
@endsection @section('content')
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="page-header" data-bg-image="media/background/7.jpg">
        <div class="tim-container">
            <div class="page-header-title text-center">
                <h3>Albam</h3>
            </div>

            <div class="breadcrumbs">
                <a href="#">Home</a>
                <span>/</span>
                <span>Albam</span>
            </div>
        </div>
        <!-- /.tim-container -->
    </section>
    @if(isset($events_details))
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-md-push-2"></div>
                <div class="col-md-8 col-md-push-8" style="box-shadow: 0 0 10px 5px;margin-top: 46px;">
                    <!-- {!! Form::open(['route'=>'add_register','role'=>'form','files'=>true,'id'=>'add_register_code','autocomplete' => 'off','enctype'=>'multipart/form-data']) !!} @csrf -->
                   
                    <form id="edit_store_action" action="/edit_store_action" method="post" enctype="multipart/form-data">
    @csrf

                    <div class="icon-box mb-0 p-0" style="margin-top: 20px;">
                        <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10" >
                            <i class="pe-7s-users"></i>
                        </a>
                        <h4 class="text-gray pt-10 mt-0 mb-30">Create Album</h4>
                    </div>
                    <hr />





                    <ul class="steps">
  <li><span data-step="1"></span></li>
  <li><span data-step="2"></span></li>
  <li class="activein"><span data-step="3"></span></li>
 
</ul>



<hr>



                    
                    <!-- <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias.</p> -->
                    <div class="row">
                    <div class="form-group col-md-12 row">
                           
                           <div class="col-md-4">
                           
                           </div> 
                           <div class="col-md-4">
                           <center>
                          <img src="albam/{{$events_details->albam_image}}" style="height: 120px; width: 50%;">
                          <br>
                          <!-- <p>Delete</p> -->
                          </center>
                          </div>
                          <div class="col-md-4">
                          
                          </div>
                           <!-- <div class="text-danger"><strong id="content_type_error"></strong></div> -->
                           
                           
                           
                       </div>


                       

                        


                      



                          







                        <!-- <div class="form-group col-md-6">
                            <label for="email">Primary Track Type <span style="color: red;">*</span></label>
                            <input type="email" class="form-control" name="primary_track_type" id="primary_track_type" placeholder="Enter primary_track_type." />
                            <div class="text-danger"><strong id="primary_track_type_error"></strong></div>
                        </div> -->

                      

                        <!-- <div class="form-group col-md-6">
                            <label for="password">Secondary Track Type <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="secondary_track_type" id="secondary_track_type" placeholder="Enter secondary_track_type" />
                            <div class="text-danger"><strong id="secondary_track_type_error"></strong></div>
                        </div> -->

                        <!-- <div class="form-group col-md-6">
                            <label for="password">Instrumental <span style="color: red;">*</span></label>
                            <input type="url" class="form-control" name="instrumental" id="instrumental_title" placeholder="Enter instrumental_title" />
                            <div class="text-danger"><strong id="instrumental_title_error"></strong></div>
                        </div> -->




                        


                       

                        <div class="form-group col-md-6">
                            <label for="password">Release Title<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="release_title" id="release_title" placeholder="Enter release title"  required>
                            <div class="text-danger"><strong id="release_title_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Version/Subtitle <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="version" value="{{$events_details->version}}" id="version" placeholder="Enter Version" readonly required>
                            <div class="text-danger"><strong id="version_error"></strong></div>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="password"> Artist<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="primary_artist" id="primary_artist" value="{{$events_details->artist_name}}" placeholder="Enter primary_artist" readonly required>
                            <!-- <select name="primary_artist" id="primary_artist" class="form-control">
                            <option value="volvo">select 1</option>
                            <option value="saab">select 2</option>
                            <option value="opel">select 3</option>
                            <option value="audi">select 4</option>
                            </select> -->
                            <div class="text-danger"><strong id="primary_artist_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Featuring <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" value="{{$events_details->featuring}}" name="featuring" id="featuring" placeholder="Enter Featuring" readonly required>
                            <div class="text-danger"><strong id="Featuring_error"></strong></div>
                        </div>

                      


                        <input type="hidden" class="form-control"  name="id" id="id"  value="{{$events_details->id}}" readonly required>


                        

                       



                        

                       


                        

                        


                        
                        
                        

                        

                        <div class="form-group col-md-6">
                            <label for="password">Genre <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="genre" id="genre" value="{{$events_details->genre}}" placeholder="Enter genre" readonly required>
                           
                            <!-- <select name="genre" id="genre" class="form-control">
                            <otion value="volvo">select 1</option>
                            <option value="saab">select 2</option>
                            <option value="opel">select 3</option>
                            <option value="audi">select 4</option>
                            </select> -->
                            <div class="text-danger"><strong id="genre_error"></strong></div>
                        </div>



                        <div class="form-group col-md-6">
                            <label for="password">Subgenre <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="subgenre" id="subgenre" value="{{$events_details->subgenre}}" placeholder="Enter subgenre" readonly required>
                           
                            <!-- <select name="subgenre" id="subgenre" class="form-control">
                            <otion value="volvo">select 1</option>
                            <option value="saab">select 2</option>
                            <option value="opel">select 3</option>
                            <option value="audi">select 4</option>
                            </select> -->
                           
                            <div class="text-danger"><strong id="subgenre_error"></strong></div>
                        </div>

                        
                        <div class="form-group col-md-6">
                            <label for="password">Level Name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="level_name" id="level_name" value="{{$events_details->level}}" placeholder="Enter Level name" readonly required>
                            
                            <!-- <select  name="lebel_name" id="lebel_name" class="form-control">
                            <otion value="volvo">select 1</option>
                            <option value="saab">select 2</option>
                            <option value="opel">select 3</option>
                            <option value="audi">select 4</option>
                            </select> -->
                            
                            
                            <div class="text-danger"><strong id="lebel_name_error"></strong></div>
                        </div>





                        <div class="form-group col-md-6">
                            <label for="password">Formate <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="price_tier" id="price_tier" placeholder="Enter price_tier" /> -->
                            
                            <select  name="format" id="format" class="form-control" >
                            <otion value="volvo">select 1</option>
                            <option value="saab">select 2</option>
                            <option value="opel">select 3</option>
                            <option value="audi">select 4</option>
                            </select>
                            
                            
                            <div class="text-danger"><strong id="format_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Original Release Date<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="release_date" id="release_date" value="{{$events_details->release_date}}" placeholder="Enter release_date" readonly required>
                            <div class="text-danger"><strong id="release_date_error"></strong></div>
                        </div>

                        
                        <!-- <div class="form-group col-md-6">
                            <label for="password">Parental Advisory<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="parental_advisry" id="parental_advisry" placeholder="Enter parental advisry" />
                            <div class="text-danger"><strong id="parental_advisry_error"></strong></div>
                        </div> -->

                        <div class="form-group col-md-6">
                            <label for="password">Line<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="line" id="line" placeholder="Enter Line" required>
                            <div class="text-danger"><strong id="line_error"></strong></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Line<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="line2" id="line2" placeholder="Enter Line" required>
                            <div class="text-danger"><strong id="line2_error"></strong></div>
                        </div>




                        

                        <div class="form-group col-md-6">
                            <label for="password">Production Year<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="production_year" id="production_year" value="{{$events_details->production_year}}" placeholder="Enter production_year" readonly required>
                            <div class="text-danger"><strong id="production_year_error"></strong></div>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="password">UPC/EAN<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="upc" id="upc" placeholder="Enter UPC/EAN" required>
                            <div class="text-danger"><strong id="upc_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Producer Catalouge Name<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="catalouge_name" id="catalouge_name" placeholder="Enter catalouge_name" required>
                            <div class="text-danger"><strong id="catalouge_name_error"></strong></div>
                        </div>

                        




                       
                        <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}" />
                    </div>
                    <br>
<input type="submit" name="submit" class="btn btn-dark btn-lg btn-block mt-15" value="Final Submit">
<br><br>
                    <!-- {{Form::submit('Submit',['class'=>'btn btn-dark btn-lg btn-block mt-15','id'=>'register','style'=>'height: 50px; margin-top: 20px;margin-bottom: 20px;'])}} -->

                    <!-- <div class="form-group">
                <button class="btn btn-dark btn-lg btn-block mt-15" id="register" type="submit">Register Now</button>
              </div> -->
                    <!-- {{ Form::close() }} -->
                    </form>
                </div>
                <div class="col-md-2 col-md-push-2"></div>
            </div>
        </div>
    </section>
    @endif
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
