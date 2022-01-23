@extends('layouts.master') @section('title','NK Music | Album') @section('add-css')
<style>
    .row {
        margin-right: 1px;
        margin-left: 1px;
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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-md-push-2"></div>
                <div class="col-md-8 col-md-push-8" style="box-shadow: 0 0 10px 5px;margin-top: 46px;">
                    {!! Form::open(['route'=>'add_release','role'=>'form','files'=>true,'id'=>'add_release_code','autocomplete' => 'off','enctype'=>'multipart/form-data']) !!} @csrf 
                   


                    <div class="icon-box mb-0 p-0" style="margin-top: 20px;">
                        <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10" >
                            <i class="pe-7s-users"></i>
                        </a>
                        <h4 class="text-gray pt-10 mt-0 mb-30">Create Album</h4>
                    </div>
                    <hr />





                    <ul class="steps">
  <li class="activein"><span data-step="1"></span></li>
  <li><span data-step="2"></span></li>
  <li><span data-step="3"></span></li>
 
</ul>



<hr>



                    
                    <!-- <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias.</p> -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="form_name">Album Title</label>
                            <input type="text" class="form-control" name="albam_title" id="albam_title" placeholder="Enter Album Title." />
                            <div class="text-danger"><strong id="albam_title_error"></strong></div>
                        </div>

                        <!-- <div class="form-group col-md-6">
                            <label for="name-l">Last name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="lname" id="name-l" placeholder="Enter your last name." />
                            <div class="text-danger"><strong id="lname_error"></strong></div>
                        </div> -->

                        <div class="form-group col-md-6">
                            <label for="email">Release Version <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="release_version" id="release_version" placeholder="Enter Release Version." />
                            <div class="text-danger"><strong id="release_version_error"></strong></div>
                        </div>

                      

                        <div class="form-group col-md-6">
                            <label for="password">Artist Name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="artist_name" id="artist_name" placeholder="Enter Artist Name" />
                            <div class="text-danger"><strong id="artist_name_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Sportify Artist URL <span style="color: red;">*</span></label>
                            <input type="url" class="form-control" name="sportify_artist_url" id="sportify_artist_url" placeholder="Enter sportify_artist_url" />
                            <div class="text-danger"><strong id="sportify_artist_url_error"></strong></div>
                        </div>

                       

                        <div class="form-group col-md-6">
                            <label for="password">Metadata Language<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="metadata_language" id="metadata_language" placeholder="Enter Metadata Language" />
                            <div class="text-danger"><strong id="metadata_language_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Release Date <span style="color: red;">*</span></label>
                            <input type="date" class="form-control" name="release_date" id="release_date" placeholder="Enter sportify_artist_url" />
                            <div class="text-danger"><strong id="release_date_error"></strong></div>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="password">Type<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="type" id="type" placeholder="Enter Type" />
                            <div class="text-danger"><strong id="type_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Level <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="level" id="level" placeholder="Enter Level" />
                            <div class="text-danger"><strong id="level_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Albam Image (image size 3000*3000) <span style="color: red;">*</span></label>
                            <input type="file" class="form-control" name="albam_image" id="albam_image" onchange="validateImage2(this.id);"  placeholder="Enter Albam Image" />
                            <div class="text-danger"><strong id="albam_image_error"></strong></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Select a audio <span style="color: red;">*</span></label>
                            <input type="file" class="form-control" name="audio" id="audio" placeholder="Select a mp3 file" accept="audio/mp3"/>
                            <div class="text-danger"><strong id="audio_error"></strong></div>
                        </div>









                       
                        <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}" />
                    </div>
                    <br>

                    {{Form::submit('Submit',['class'=>'btn btn-dark btn-lg btn-block mt-15','id'=>'register','style'=>'height: 50px; margin-top: 20px;margin-bottom: 20px;'])}}
                    <br><br>
                   
                    {{ Form::close() }}
               
                </div>
                <div class="col-md-2 col-md-push-2"></div>
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
            $("#albam_title").val("");
            
            $("#release_version").val("");
          

            $("#artist_name").val("");
            
            $("#artist_name").val("");

            $("#sportify_artist_url").val("");
            
            $("#metadata_language").val("");
            





            $("#type").val("");
            $("#level").val("");
            $("#albam_image").val("");
            $("#audio").val("");

        }

        $("#add_release_code").submit(function (event) {
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
                  
                   
                    if (response.success == true) {
                       
                        window.location.href = `/track?id=${response.id}`
                        
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
                //alert(id);
                var formData = new FormData();

                var file = document.getElementById(id).files[0];

                formData.append("Filedata", file);
                var t = file.type.split("/").pop().toLowerCase();
                console.log(t)
                if (t != "mp3") {
                    swal("Error!!", "Please select a valid Audio file!", "error");
                       //alert('Please select a valid image file');
                    // mdtoast("Please select a valid pdf file.", {
                    //     type: "warning",
                    // });
                    document.getElementById(id).value = "";
                    return false;
                }
                if (file.size > 10240000) {
                     alert('Max Upload size is 10MB only');
                    // mdtoast("Max Upload size is 2MB only.", {
                    //     type: "warning",
                    // });
                    document.getElementById(id).value = "";
                    return false;
                }
                return true;
            }
        </script>



<script type="text/javascript">
            function validateImage2(id) {
                //alert(id);
                var formData = new FormData();

                var file = document.getElementById(id).files[0];

                formData.append("Filedata", file);
                var t = file.type.split("/").pop().toLowerCase();
                console.log(t)
                if (t != "jpg" && t !="png" && t!="jpeg") {
                    swal("Error!!", "Please select a valid image file!", "error");
                       //alert('Please select a valid image file');
                    // mdtoast("Please select a valid pdf file.", {
                    //     type: "warning",
                    // });
                    document.getElementById(id).value = "";
                    return false;
                }
                if (file.size > 1024000) {
                     alert('Max Upload size is 1MB only');
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
