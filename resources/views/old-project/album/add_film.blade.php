@extends('layouts.master') @section('title','NK Music | Add Film') @section('add-css')
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
                <h3>Movie/Film</h3>
            </div>

            <div class="breadcrumbs">
                <a href="#">Home</a>
                <span>/</span>
                <span>Movie</span>
            </div>
        </div>
        <!-- /.tim-container -->
    </section>

    <section>
        <div class="container">
            <div class="row">





            
                <div class="col-md-2 col-md-push-2"></div>
                <div class="col-md-8 col-md-push-8" style="box-shadow: 0 0 10px 5px;margin-top: 46px;">
                <div class="icon-box mb-0 p-0" style="margin-top: 20px;">
                        <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10" >
                            <i class="pe-7s-users"></i>
                        </a>
                        <h4 class="text-gray pt-10 mt-0 mb-30">Content Type</h4>
                        <a class="btn btn-success" href="/album">Album</a> &nbsp;<a class="btn btn-primary" href="/add_film">Movie/Film</a>
                        <!-- <h4 class="text-gray pt-10 mt-0 mb-30" style="margin-top: 10px !important;"></h4> -->
                    </div>
                    
                    {!! Form::open(['route'=>'add_film','role'=>'form','files'=>true,'id'=>'add_film_code','autocomplete' => 'off','enctype'=>'multipart/form-data']) !!} @csrf 
                   


                    





                    <!-- <ul class="steps">
  <li class="activein"><span data-step="1"></span></li>
  <li><span data-step="2"></span></li>
  <li><span data-step="3"></span></li>
 
</ul> -->



<hr>



                    
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="form_name">Album/Song Name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="album_title" id="albam_title" placeholder="Enter Album Title." />
                            <div class="text-danger"><strong id="album_title_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Album Category <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="genre" id="genre" placeholder="Enter genre" /> -->
                           
                            <select name="album_category" id="album_category" class="form-control">
                            <option value="original">Original</option>
                            <option value="Cover">Cover</option>
                           

                            </select>
                            <div class="text-danger"><strong id="album_category_error"></strong></div>
                        </div>






                        <div class="form-group col-md-6">
                            <label for="password">Category <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="genre" id="genre" placeholder="Enter genre" /> -->
                           
                            <select name="all_genre" id="all_genre" class="form-control">
                            @if(isset($data4))
                            @foreach($data4 as $details)
                             <option value="{{$details->cat_id}}">{{$details->cat_name}}</option>
                            @endforeach
                            @endif

                            </select>
                            <div class="text-danger"><strong id="genre_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Sub Category <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="subgenre" id="subgenre" placeholder="Enter subgenre" /> -->
                            
                               
                            <select name="all_sub_category" id="all_sub_category" class="form-control">
                            <option value="">-- Select Sub Category --</option>
                           
                         
                            
                            </select>
                           
                            <div class="text-danger"><strong id="sub_category_error"></strong></div>
                        </div>





                        <div class="form-group col-md-6">
                            <label for="password">Description <span style="color: red;">*</span></label>
                            
                            <!-- <input type="text" class="form-control" name="secondary_genre" id="secondary_genre" placeholder="Enter secondary_genre" /> -->
                            <select  name="all_secondary_genre" id="all_secondary_genre" class="form-control">
                            <option value="">-- Select Description --</option>
                            </select>
                            
                            
                            
                            <div class="text-danger"><strong id="description_error"></strong></div>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="password">Release Date <span style="color: red;">*</span></label>
                            <input type="date" class="form-control" name="release_date" id="release_date" placeholder="Enter sportify_artist_url" />
                            <div class="text-danger"><strong id="release_date_error"></strong></div>
                        </div>








                        <div class="form-group col-md-12 row">
                           
                           <div class="col-md-4">
                           <label for="form_name" style="text-align:left;">Devotional Track :</label>
                           </div> <div class="col-md-4">
                           <label for="chkYess" class="block"><input type="radio" name="religion" value="yes" onclick="myFunction3()" checked>&nbsp;Yes</label>
                          </div>
                          <div class="col-md-4">
                           <label for="chkNoo" class="block"><input type="radio" name="religion" value="no" onclick="myFunction4()" >&nbsp;No</label>
                          </div>
                           
                           
                           
                       </div>










                       <div class="form-group col-md-6">
                            <label for="password">Devotional Category <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="genre" id="genre" placeholder="Enter genre" /> -->
                           
                            <select name="genre" id="genre" class="form-control">
                            @if(isset($data5))
                            @foreach($data5 as $details)
                             <option value="{{$details->cat_id}}">{{$details->cat_name}}</option>
                            @endforeach
                            @endif

                            </select>
                            <div class="text-danger"><strong id="genre_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Devotional Sub Category <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="subgenre" id="subgenre" placeholder="Enter subgenre" /> -->
                           
                            <select name="sub_category" id="sub_category" class="form-control">
                            <option value="">-- Select Religion Sub Category --</option>
                            <!-- @if(isset($data6))
                            @foreach($data6 as $details)
                             <option value="{{$details->sub_cat_name}}">{{$details->sub_cat_name}}</option>
                            @endforeach
                            @endif -->
                            
                            </select>
                           
                            <div class="text-danger"><strong id="sub_category_error"></strong></div>
                        </div>





                        <div class="form-group col-md-6">
                            <label for="password">Devotional Description <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="secondary_genre" id="secondary_genre" placeholder="Enter secondary_genre" /> -->
                            <select  name="secondary_genre" id="secondary_genre" class="form-control">
                            <option value="">-- Select Religion Description --</option>
                           
                         
                           
                            </select>
                            
                            <div class="text-danger"><strong id="description_error"></strong></div>
                        </div>





















                        <div class="form-group col-md-6">
                            <label for="password">Language<span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="track_title_language" id="track_title_language" placeholder="Enter track title language" /> -->
                            <select  name="language" id="language" class="form-control">
                            <otion value="Hindi">Hindi</option>
                       
                            <option value="All Language">All Language</option>
                            <option value="Gujarati">Gujarati</option>



                            <otion value="Punjabi">Punjabi</option>
                            <option value="Bengali">Bengali</option>
                            <option value="Assamese">Assamese</option>
                            <option value="Malayalam">Malayalam</option>




                            <otion value="Punjabi">Punjabi</option>
                            <option value="Bengali">Bengali</option>
                            <option value="Assamese">Assamese</option>
                            <option value="Malayalam">Malayalam</option>


                            <otion value="Hindi">Hindi</option>
                            <option value="Rajasthani">Rajasthani</option>
                            <option value="Gujarati">Gujarati</option>
                            <option value="Marathi">Marathi</option>


                            <otion value="Bhojpuri">Bhojpuri</option>
                            <option value="Instrumental">Instrumental</option>
                            <option value="English">English</option>
                            <option value="Marathi">Marathi</option>
                            </select>
                            
                            
                            
                            <div class="text-danger"><strong id="language_error"></strong></div>
                        </div>

                        


                        <div class="form-group col-md-12 row">
                           
                           <div class="col-md-5">
                           <label for="form_name" style="text-align:left;">Ask to generate an ISRC/UPC Code :</label>
                           </div> <div class="col-md-3">
                           <label for="chkYes" class="block"><input type="radio" name="isre" value="yes" onclick="myFunction2()">&nbsp;Yes</label>
                          </div>
                          <div class="col-md-4">
                           <label for="chkNo" class="block"><input type="radio" name="isre" value="no" onclick="myFunction()">&nbsp;No</label>
                          </div>
                           
                           
                           
                       </div>
                     
                        <div class="form-group col-md-6">
                            <label for="password">Generate ISRC <span style="color: red;">*</span></label>
                            <input type="text" class="form-control"  name="generate_isre" id="generate_isre" placeholder="Enter generate_ISRC" />
                            <div class="text-danger"><strong id="generate_isre_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Generate UPC <span style="color: red;">*</span></label>
                            <input type="text" class="form-control"  name="generate_upc" id="generate_upc" placeholder="Enter generate_UPC" />
                            <div class="text-danger"><strong id="generate_upc_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Lable <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="level" id="level" placeholder="Enter Lable" />
                            <div class="text-danger"><strong id="level_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">P - Line <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="pline" id="pline" placeholder="Enter P-Line" required>
                            <div class="text-danger"><strong id="pline_error"></strong></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">C - Line <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="cline" id="cline" placeholder="Enter C-Lline" required>
                            <div class="text-danger"><strong id="cline_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Lyrics<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="lyrics" id="lyrics" placeholder="Enter lyrics" />
                            <div class="text-danger"><strong id="lyrics_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Composer <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="composer" id="composer" placeholder="Enter composer" required>
                            <div class="text-danger"><strong id="composer_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Artist/Singer <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="artist" id="artist" placeholder="Enter Artist Name (Ex. Dev, jeet)" required>
                            <div class="text-danger"><strong id="artist_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Accepted Moods <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="price_tier" id="price_tier" placeholder="Enter price_tier" /> -->
                            
                            <select  name="mood" id="mood" class="form-control">
                            <otion value="Romantic">Romantic</option>
                            <option value="Happy">Happy</option>
                            <option value="Sad">Sad</option>
                            <option value="Partiotic">Partiotic</option>


                            <otion value="Nostalgic">Nostalgic</option>
                            <option value="Inspirational">Inspirational</option>
                            <option value="Enthusiastic">Enthusiastic</option>
                            <option value="Optimistic">Optimistic</option>



                            <otion value="Passion">Passion</option>
                            <option value="Pessimistic">Pessimistic</option>
                            <option value="Spiritual">Spiritual</option>
                            <option value="Peppy">Peppy</option>
                            <option value="Philosophical">Philosophical</option>
                            </select>
                            
                            
                            <div class="text-danger"><strong id="price_tier_error"></strong></div>
                        </div>

                      

                        <div class="form-group col-md-6">
                            <label for="password">Additional Information</label>
                            <!-- <input type="text" class="form-control" name="genre" id="genre" placeholder="Enter genre" /> -->
                           
                            <select name="additional_information" id="additional_information" class="form-control">
                            @if(isset($data1))
                            @foreach($data1 as $details)
                             <option value="{{$details->additional_info}}">{{$details->additional_info}}</option>
                            @endforeach
                            @endif
                           

                            </select>
                            <div class="text-danger"><strong id="additional_information_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Callertone Starting time <span style="color: red;">*</span></label>
                            <input type="time" class="form-control" name="callertune" id="callertune" placeholder="Enter CRBT Cut Time" />
                            <div class="text-danger"><strong id="callertune_error"></strong></div>
                        </div>

                       


                


                        <div class="form-group col-md-6">
                            <label for="password">Albam Image (image size 3000*3000) <span style="color: red;">*</span></label>
                            <input type="file" class="form-control" name="albam_image" id="albam_image" onchange="validateImage2(this.id);"  placeholder="Enter Albam Image" />
                            <div class="text-danger"><strong id="albam_image_error"></strong></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Select a Audio(Please select a WAV file)<span style="color: red;">*</span></label>
                            <input type="file" class="form-control" name="audio" id="audio" placeholder="Select a mp3 file" accept="audio/mp3"/>
                            <div class="text-danger"><strong id="audio_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Star Cast <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="star_cast" id="star_cast"  placeholder="Star Cast" />
                            <div class="text-danger"><strong id="star_cast_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Movie Release Date <span style="color: red;">*</span></label>
                            <input type="date" class="form-control" name="movie_release_date" id="movie_release_date"  placeholder="Movie Release Date" />
                            <div class="text-danger"><strong id="movie_release_date_error"></strong></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Music Release Date <span style="color: red;">*</span></label>
                            <input type="date" class="form-control" name="music_release_date" id="music_release_date"  placeholder="Release Date" />
                            <div class="text-danger"><strong id="release_date_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Film Banner <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="banner_image" id="banner_image"  placeholder="Enter Film Banner" />
                            <div class="text-danger"><strong id="banner_image_error"></strong></div>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="password">Director <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="director" id="director"  placeholder="Director Name" />
                            <div class="text-danger"><strong id="director_error"></strong></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Producer <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="producer" id="producer"  placeholder="Producer Name" />
                            <div class="text-danger"><strong id="producer_error"></strong></div>
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

        $("#add_film_code").submit(function (event) {
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
                       
                        window.location.href = `/view_film?id=${response.id}`
                        
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
<script>
function myFunction() {
  document.getElementById("generate_isre").disabled = true;
  document.getElementById("generate_upc").disabled = true;
}

function myFunction2() {
  document.getElementById("generate_isre").disabled = false;
  document.getElementById("generate_upc").disabled = false;
}
</script>


<script>
function myFunction4() {
  document.getElementById("genre").disabled = true;
  document.getElementById("sub_category").disabled = true;
  document.getElementById("secondary_genre").disabled = true;
  document.getElementById("all_genre").disabled = false;
  document.getElementById("all_sub_category").disabled = false;
  document.getElementById("all_secondary_genre").disabled = false;
}

function myFunction3() {
  document.getElementById("genre").disabled = false;
  document.getElementById("sub_category").disabled = false;
  document.getElementById("secondary_genre").disabled = false;
  document.getElementById("all_genre").disabled = true;
  document.getElementById("all_sub_category").disabled = true;
  document.getElementById("all_secondary_genre").disabled = true;

}










$(document).ready(function(){
        function appendData(response) {
            // console.log("gs")
            if(response){
                var i = 0;
                var _html = '';
                $.each(response.data, function(index, value) {
                    i++;
                    _html =_html+`<option value='${value.sub_cat_id}'>${value.sub_cat_name}</option>`;
                });
            }
            return _html;
        }

        $('#all_genre').change(function(){
           // console.log('rgfdu9fh')
            if($(this).val() != '')
                {
                    var value = $(this).val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                    url:"/show_subcategory",
                    method:"post",
                    data:{cat_id:value, _token:_token},
                
                    success:function(response)
                    {
                        if(response.success === true){
                             console.log(response)
                        $('#all_sub_category').html(appendData(response));
                        }
                    },
                    error:function(){

                    }

                    })
                }
        });
       
        function appendData1(response) {
            if(response){
                var i = 0;
                var _html = '';
                $.each(response.data, function(index, value) {
                    i++;
                    _html =_html+`<option value='${value.sub_sub_cat_name}'>${value.sub_sub_cat_name}</option>`;
                });
            }
            return _html;
        }

        $('#all_sub_category').change(function(){
            if($(this).val() != '')
                {
                    var value = $(this).val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                    url:"/show_description",
                    method:"post",
                    data:{sub_cat_id:value, _token:_token},
                    success:function(response)
                    {
                        console.log(response);
                        if(response.success === true){
                             $('#all_secondary_genre').html(appendData1(response));
                        }
                    },
                    error:function(){

                    }

                    })
                }
        });








        function appendData3(response) {
            // console.log("gs")
            if(response){
                var i = 0;
                var _html = '';
                $.each(response.data, function(index, value) {
                    i++;
                    _html =_html+`<option value='${value.sub_cat_id}'>${value.sub_cat_name}</option>`;
                    // console.log(_html)
                });
            }
            return _html;
        }

        $('#genre').change(function(){
           // console.log('rgfdu9fh')
            if($(this).val() != '')
                {
                    var value = $(this).val();
                    console.log(value)
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                    url:"/show_religion_subcategory",
                    method:"post",
                    data:{cat_id:value, _token:_token},
                    success:function(response)
                    {
                       
                        if(response.success === true){
                           //  console.log(response)
                        $('#sub_category').html(appendData3(response));
                        // $('#commission').val(response.gst.commission);
                        }
                    },
                    error:function(){

                    }

                    })
                }
        });









        function appendData4(response) {
            if(response){
                var i = 0;
                var _html = '';
                $.each(response.data, function(index, value) {
                    i++;
                    _html =_html+`<option value='${value.sub_sub_cat_name}'>${value.sub_sub_cat_name}</option>`;
                });
            }
            return _html;
        }

        $('#sub_category').change(function(){
           // console.log('rgfdu9fh')
            if($(this).val() != '')
                {
                    var value = $(this).val();
                    console.log(value)
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                    url:"/show_religion_details",
                    method:"post",
                    data:{sub_cat_id:value, _token:_token},
                    success:function(response)
                    {
                       
                        if(response.success === true){
                           //  console.log(response)
                        $('#secondary_genre').html(appendData4(response));
                        // $('#commission').val(response.gst.commission);
                        }
                    },
                    error:function(){

                    }

                    })
                }
        });











    });
</script>
@endsection
