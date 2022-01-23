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
                <h3>View Album</h3>
            </div>

            <div class="breadcrumbs">
                <a href="#">Home</a>
                <span>/</span>
                <span>View Album</span>
            </div>
        </div>
        <!-- /.tim-container -->
    </section>
    @if(isset($events_details))
    <section>
   <form>
        <div class="container">
        <div class="row">


                   
                   
     

        <div class="form-group col-md-12 row" style="margin-top: 20px;">
                           
                           <div class="col-md-4">
                           
                           </div> 
                           <div class="col-md-4">
                           <center>
                          <img src="albam/{{$events_details->album_image}}" style="height: 120px; width: 50%;">
                          <br>
                          <!-- <p>Delete</p> -->
                          </center>
                          </div>
                          <div class="col-md-4">
                          
                          </div>
                           <!-- <div class="text-danger"><strong id="content_type_error"></strong></div> -->
                           
                           
                           
                       </div>
                        <div class="form-group col-md-6">
                            <label for="form_name">Album/Song Name <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="album_title" id="albam_title" value="{{$events_details->album_title}}" placeholder="Enter Album Title." readonly>
                            <div class="text-danger"><strong id="album_title_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Album Category <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="genre" id="genre" placeholder="Enter genre" /> -->
                           
                            <input type="text" class="form-control" name="album_category" id="album_category" value="{{$events_details->album_category}}" placeholder="Enter Album Title." readonly>
                            <div class="text-danger"><strong id="album_category_error"></strong></div>
                        </div>






                        <div class="form-group col-md-6">
                            <label for="password">Category <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="genre" id="genre" placeholder="Enter genre" /> -->
                            <input type="text" class="form-control" name="all_genre" id="all_genre"  value="{{$events_details->all_genre}}{{$events_details->religion_category}}"
                             placeholder="Enter Album Title." readonly>
                           
                            
                            <div class="text-danger"><strong id="all_genre_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Sub Category <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="subgenre" id="subgenre" placeholder="Enter subgenre" /> -->
                           
                            <input type="text" class="form-control" name="all_sub_category" id="all_sub_category" value="{{$events_details->all_sub_category}} {{$events_details->religion_sub_category}}" placeholder="Enter Album Title." readonly>
                           
                            <div class="text-danger"><strong id="all_sub_category_error"></strong></div>
                        </div>





                        <div class="form-group col-md-6">
                            <label for="password">Description <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="all_secondary_genre" id="secondary_genre" placeholder="Enter secondary_genre" /> -->
                       
                            <input type="text" class="form-control" name="all_secondary_genre" id="all_secondary_genre" value="{{$events_details->description}}{{$events_details->	religion_description}}" placeholder="Enter Album Title." readonly>
                            
                            
                            <div class="text-danger"><strong id="all_secondary_genre_error"></strong></div>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="password">Release Date <span style="color: red;">*</span></label>
                            <input type="date" class="form-control" name="release_date" id="release_date" value="{{$events_details->release_date}}" placeholder="Release Date" readonly>
                            <div class="text-danger"><strong id="release_date_error"></strong></div>
                        </div>


                     






                        





















                        <div class="form-group col-md-6">
                            <label for="password">Language<span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="track_title_language" id="track_title_language" placeholder="Enter track title language" /> -->
                           
                            <input type="text" class="form-control" name="language" id="language" value="{{$events_details->language}}" placeholder="Enter secondary_genre" readonly>
                            
                            
                            <div class="text-danger"><strong id="language_error"></strong></div>
                        </div>

                        


                        
                     
                        <div class="form-group col-md-6">
                            <label for="password">Generate ISRC <span style="color: red;">*</span></label>
                            <input type="text" class="form-control"  name="generate_isre" id="generate_isre" value="{{$events_details->generate_isre}}" placeholder="Enter generate_ISRC" readonly>
                            <div class="text-danger"><strong id="generate_isre_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Generate UPC <span style="color: red;">*</span></label>
                            <input type="text" class="form-control"  name="generate_upc" id="generate_upc"  value="{{$events_details->generate_upc}}" placeholder="Enter generate_UPC" readonly>
                            <div class="text-danger"><strong id="generate_upc_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Lable <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="level" id="level"  value="{{$events_details->level}}" placeholder="Enter Lable" readonly>
                            <div class="text-danger"><strong id="level_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">P - Line <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="pline" id="pline"  value="{{$events_details->pline}}" placeholder="Enter P-Line" readonly>
                            <div class="text-danger"><strong id="pline_error"></strong></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">C - Line <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="cline" id="cline"  value="{{$events_details->cline}}" placeholder="Enter C-Lline" readonly>
                            <div class="text-danger"><strong id="cline_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Lyrics<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="lyrics" id="lyrics"  value="{{$events_details->lyrics}}" placeholder="Enter lyrics" readonly>
                            <div class="text-danger"><strong id="lyrics_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Composer <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="composer" id="composer"  value="{{$events_details->composer}}" placeholder="Enter composer" readonly>
                            <div class="text-danger"><strong id="composer_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Artist/Singer <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="artist" id="artist"  value="{{$events_details->artist}}" placeholder="Enter Artist Name (Ex. Dev, jeet)" readonly>
                            <div class="text-danger"><strong id="artist_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Accepted Moods <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="price_tier" id="price_tier" placeholder="Enter price_tier" /> -->
                            
                            <input type="text" class="form-control" name="mood" id="mood"  value="{{$events_details->mood}}" placeholder="Enter Mood" readonly>
                          
                            
                            <div class="text-danger"><strong id="mood_error"></strong></div>
                        </div>

                      

                        <div class="form-group col-md-6">
                            <label for="password">Additional Information</label>
                            <!-- <input type="text" class="form-control" name="genre" id="genre" placeholder="Enter genre" /> -->
                            <input type="text" class="form-control" name="additional_information" id="additional_information"  value="{{$events_details->additional_information}}" placeholder="Enter additional_information" readonly>
                           
                           
                            <div class="text-danger"><strong id="additional_information_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Callertone Starting time <span style="color: red;">*</span></label>
                            <input type="time" class="form-control" name="callertune" id="callertune" value="{{$events_details->callertune}}" placeholder="Enter CRBT Cut Time" readonly>
                            <div class="text-danger"><strong id="callertune_error"></strong></div>
                        </div>

                       


                


                       
                        <!-- <div class="form-group col-md-6">
                            <label for="password">Select a Audio(Please select a WAV file)<span style="color: red;">*</span></label>
                            <input type="file" class="form-control" name="audio" id="audio" placeholder="Select a mp3 file" accept="audio/mp3"/>
                            <div class="text-danger"><strong id="audio_error"></strong></div>
                        </div> -->

                     

                        <div class="form-group col-md-6">
                            <label for="password">Primer Release Date <span style="color: red;">*</span></label>
                            <input type="date" class="form-control" name="movie_release_date" id="movie_release_date" value="{{$events_details->premier_release_date}}"  placeholder="Movie Release Date" readonly>
                            <div class="text-danger"><strong id="movie_release_date_error"></strong></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Music Release Date <span style="color: red;">*</span></label>
                            <input type="date" class="form-control" name="music_release_date" id="music_release_date" value="{{$events_details->music_release_date}}"  placeholder="Release Date" readonly>
                            <div class="text-danger"><strong id="release_date_error"></strong></div>
                        </div>

                        

                        
                        <input type="hidden" class="form-control"  name="id" id="id"  value="{{$events_details->id}}" required>


                       
                        <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}" />
                   
                        <a href="/view_release" class="btn btn-primary">Submit</a>
                    </div>
        </div>
        </form>
    </section>
    @endif
    <br><br><br>
</div>
<!-- end main-content -->
@endsection @section('add-js')





<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
