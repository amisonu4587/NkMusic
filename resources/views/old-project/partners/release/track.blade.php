@extends('layouts.master') @section('title','Albam | Truck') @section('add-css')
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
                <h3>Truck</h3>
            </div>

            <div class="breadcrumbs">
                <a href="#">Home</a>
                <span>/</span>
                <span>Truck</span>
            </div>
        </div>
        <!-- /.tim-container -->
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-md-push-2"></div>
                <div class="col-md-8 col-md-push-8" style="box-shadow: 0 0 10px 5px;margin-top: 46px;">
                    <!-- {!! Form::open(['route'=>'add_register','role'=>'form','files'=>true,'id'=>'add_register_code','autocomplete' => 'off','enctype'=>'multipart/form-data']) !!} @csrf -->
                   
                    <form id="edit_track_action" action="/edit_track_action" method="post" enctype="multipart/form-data">
    
    
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
  <li class="activein"><span data-step="2"></span></li>
  <li><span data-step="3"></span></li>
 
</ul>



<hr>



                    
                    <!-- <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias.</p> -->
                    <div class="row">
                    <div class="form-group col-md-12 row">
                           
                           <div class="col-md-4">
                           <label for="form_name" style="text-align:left;">Content Type :</label>
                           </div> <div class="col-md-4">
                           <label class="block"><input type="radio" name="content_type" id="content_type" value="audio" checked >&nbsp;Audio</label>
                          </div>
                           <!-- <div class="text-danger"><strong id="content_type_error"></strong></div> -->
                           
                           
                           
                       </div>


                        <div class="form-group col-md-12 row">
                           
                           <div class="col-md-4">
                           <label for="form_name" style="text-align:left;">Primary Track Type :</label>
                           </div> <div class="col-md-4">
                           <label class="block"><input type="radio" name="primary_track_type" id="primary_track_type" value="music" checked>&nbsp;Music</label>
                          </div>
                           <!-- <div class="text-danger"><strong id="content_type_error"></strong></div> -->
                           
                           
                           
                       </div>

                        


                       <div class="form-group col-md-12 row">
                           
                           <div class="col-md-4">
                           <label for="form_name" style="text-align:left;">Secondary Track Type :</label>
                           </div> 
                           <div class="col-md-2">
                           <label class="block"><input type="radio" name="secondary_track_type" value="originam" >&nbsp;Original</label>
                          </div>
                          <div class="col-md-2">
                           <label class="block"><input type="radio" name="secondary_track_type" value="karaoke" >&nbsp;Karaoke</label>
                          </div>
                          <div class="col-md-2">
                           <label class="block"><input type="radio" name="secondary_track_type" value="medley" >&nbsp;Medley</label>
                          </div>



                          <div class="col-md-2">
                           <label class="block"><input type="radio" name="secondary_track_type" value="cover" >&nbsp;Cover</label>
                          </div>
                          <div class="col-md-4"></div>
                          <div class="col-md-4">
                           <label class="block"><input type="radio" name="secondary_track_type" value="karaoke" >&nbsp;Cover By Coverband</label>
                          </div>
                          <!-- <div class="col-md-2">
                           <label class="block"><input type="radio" name="secondary_track_type" value="medley" checked>Medley</label>
                          </div> -->







                          <!-- <div class="col-md-2">
                           <label class="block"><input type="radio" name="secondary_track_type" value="music" checked>Music</label>
                          </div>
                          <div class="col-md-2">
                           <label class="block"><input type="radio" name="secondary_track_type" value="music" checked>Music</label>
                          </div>
                          <div class="col-md-2">
                           <label class="block"><input type="radio" name="secondary_track_type" value="music" checked>Music</label>
                          </div> -->
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




                        <div class="form-group col-md-12 row">
                           
                           <div class="col-md-4">
                           <label for="form_name" style="text-align:left;">Instrumental :</label>
                           </div> <div class="col-md-4">
                           <label class="block"><input type="radio" name="instrumental" value="yes" >&nbsp;Yes</label>
                          </div>
                          <div class="col-md-4">
                           <label class="block"><input type="radio" name="instrumental" value="no" >&nbsp;No</label>
                          </div>
                           <!-- <div class="text-danger"><strong id="content_type_error"></strong></div> -->
                           
                           
                           
                       </div>


                       

                        <div class="form-group col-md-6">
                            <label for="password">Title<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" required>
                            <div class="text-danger"><strong id="title_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Version <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="version" id="version" placeholder="Enter Version" required>
                            <div class="text-danger"><strong id="version_error"></strong></div>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="password">Primary Artist<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="primary_artist" id="primary_artist" placeholder="Enter primary artist name" />
                            <!-- <select name="primary_artist" id="primary_artist" class="form-control" required>
                            <option value="volvo">select 1</option>
                            <option value="saab">select 2</option>
                            <option value="opel">select 3</option>
                            <option value="audi">select 4</option>
                            </select> -->
                            <div class="text-danger"><strong id="primary_artist_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Featuring <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="featuring" id="featuring" placeholder="Enter Featuring" required>
                            <div class="text-danger"><strong id="featuring_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Remixer <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="remixer" id="remixer" placeholder="Enter remixer" required>
                            <div class="text-danger"><strong id="remixer_error"></strong></div>
                        </div>




                        <div class="form-group col-md-6">
                            <label for="password">Author <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="author" id="author" placeholder="Enter Author" required>
                            <div class="text-danger"><strong id="author_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Composer <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="composer" id="composer" placeholder="Enter composer" required>
                            <div class="text-danger"><strong id="composer_error"></strong></div>
                        </div>



                        <div class="form-group col-md-6">
                            <label for="password">Arranger <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="arranger" id="arranger" placeholder="Enter Arranger" required>
                            <div class="text-danger"><strong id="arranger_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Producer <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="producer" id="producer" placeholder="Enter producer" required>
                            <div class="text-danger"><strong id="producer_error"></strong></div>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="password">Pline <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="pline" id="pline" placeholder="Enter Pline" required>
                            <div class="text-danger"><strong id="pline_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Production Year <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="production_year" id="production_year" placeholder="Enter production year" /> -->
                           
                            <select name="production_year" id="production_year" class="form-control">
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>

                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>

                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>














                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>

                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>

                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        
                            </select>
                           
                            <div class="text-danger"><strong id="production_year_error"></strong></div>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="password">Publisher <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="publisher" id="publisher" placeholder="Enter Publisher" />
                            <div class="text-danger"><strong id="publisher_error"></strong></div>
                        </div>
                        <div class="form-group col-md-12 row">
                           
                           <div class="col-md-4">
                           <label for="form_name" style="text-align:left;">Ask to generate an ISRC :</label>
                           </div> <div class="col-md-4">
                           <label for="chkYes" class="block"><input type="radio" name="isre" value="yes" onclick="myFunction2()">&nbsp;Yes</label>
                          </div>
                          <div class="col-md-4">
                           <label for="chkNo" class="block"><input type="radio" name="isre" value="no" onclick="myFunction()">&nbsp;No</label>
                          </div>
                           <!-- <div class="text-danger"><strong id="content_type_error"></strong></div> -->
                           
                           
                           
                       </div>
                        <!-- <div class="form-group col-md-6">
                            <label for="password">isrc <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="isrc" id="isrc" placeholder="Enter isrc" />
                            <div class="text-danger"><strong id="isrc_error"></strong></div>
                        </div> -->

                        <div class="form-group col-md-6">
                            <label for="password">Generate isrc <span style="color: red;">*</span></label>
                            <input type="text" class="form-control"  name="generate_isre" id="generate_isre" placeholder="Enter generate_isrc" />
                            <div class="text-danger"><strong id="generate_isre_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Genre <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="genre" id="genre" placeholder="Enter genre" /> -->
                           
                            <select name="genre" id="genre" class="form-control">
                            <option value="Album">Album</option>
                            <option value="Film">Film</option>
                            <option value="opel">Traditional or Folk</option>
                            <option value="audi">Easy Listening</option>
                            <option value="Western Classical">Western Classical</option>
                            <option value="Carnatic Classical">Carnatic Classical</option>
                            <option value="Hindustani Classical">Hindustani Classical</option>
                            <option value="Devotional Or Spiritual">Devotional Or Spiritual</option>
                            <option value="English-Pop">English-Pop</option>
                            <option value="English-Rock">English-Rock</option>
                            <option value="English-Hip Hop">English-Hip Hop</option>
                            <option value="English-Soundtrack">English-Soundtrack</option>
                            <option value="Devotional">Devotional</option>

                            </select>
                            <div class="text-danger"><strong id="genre_error"></strong></div>
                        </div>



                        <div class="form-group col-md-6">
                            <label for="password">Subgenre <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="subgenre" id="subgenre" placeholder="Enter subgenre" /> -->
                           
                            <select name="subgenre" id="subgenre" class="form-control">
                            <option value="Indipop">Indipop</option>
                            <option value="Ghazal">Ghazal</option>
                            <option value="Regional Pop">Regional Pop</option>
                            <option value="Ghazal">Ghazal</option>
                            <option value="Modern Song">Modern Song</option>
                            <option value="Song">Song</option>
                            <option value="Remix">Remix</option>
                            <option value="Instrumental">Instrumental</option>
                            <option value="Dialogue">Dialogue</option>
                            <option value="Garba">Garba</option>
                            <option value="Dandia">Dandia</option>
                            <option value="Gidda">Gidda</option>
                            <option value="Rabindra Sangeet">Rabindra Sangeet</option>
                            <option value="Nazrulgeeti">Nazrulgeeti</option>
                            <option value="Rajanikantageeti">Rajanikantageeti</option>
                            <option value="Baul Geet">Baul Geet</option>
                            <option value="Borgeet">Borgeet</option>
                            <option value="Bihu">Bihu</option>
                            <option value="Mapilla">Mapilla</option>
                            <option value="Karwa Chauth Songs">Karwa Chauth Songs</option>
                            <option value="Lagna Geet">Lagna Geet</option>
                            <option value="Marriage song">Marriage song</option>
                            <option value="Raksha Bandhan">Raksha Bandhan</option>
                            <option value="Classical Vocals">Classical Vocals</option>
                            <option value="Instrument Name">Instrument Name</option>
                            <option value="Lounge">Lounge</option>
                            <option value="Fusion">Fusion</option>
                            <option value="Electronic">Electronic</option>
                            <option value="Instrument Name">Instrument Name</option>
                            <option value="Religion/ Festival">Religion/ Festival</option>
                            <option value="International/Indian">International/Indian</option>
                            <option value="Deity name">Deity name</option>
                            <option value="Islamic">Islamic</option>
                            <option value="Christianity">Christianity</option>
                            <option value="Buddhism">Buddhism</option>
                            <option value="Jainism">Jainism</option>
                            <option value="Sikhism">Sikhism</option>
                            
                            </select>
                           
                            <div class="text-danger"><strong id="subgenre_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Description <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="secondary_genre" id="secondary_genre" placeholder="Enter secondary_genre" /> -->
                            <select  name="secondary_genre" id="secondary_genre" class="form-control">
                            <option value="Mood of Song/Additional Information">Mood of Song/Additional Information</option>
                            <option value="Mood of Song">Mood of Song</option>
                            
                            <option value="Dance">Dance</option>
                            <option value="Happy">Happy</option>
                            <option value="Raag/ Style of singing etc">Raag/ Style of singing etc</option>
                            <option value="Mood">Mood</option>
                            <option value="Happy/Dance / Romantic">Happy/Dance / Romantic</option>
                            <option value="Any Additional Information">Any Additional Information</option>
                            <option value="Raga / Distinctive style of performance">Raga / Distinctive style of performance</option>
                            <option value="Mood/ Raag">Mood/ Raag</option>
                            <option value="Aarti">Aarti</option>
                            <option value="Bhajan">Bhajan</option>
                            <option value="Geet">Geet</option>
                            <option value="Kirtan">Kirtan</option>
                            <option value="Mantra">Mantra</option>
                            <option value="Chalisa">Chalisa</option>
                            <option value="Naat">Naat</option>
                            <option value="Qawwals">Qawwals</option>
                            <option value="Chant">Chant</option>
                            <option value="Mantra">Mantra</option>
                            <option value="Bhajan">Bhajan</option>
                            <option value="Geet">Geet</option>
                            <option value="Kirtan">Kirtan</option>
                            <option value="Mantra">Mantra</option>
                            <option value="Gurbani">Gurbani</option>
                           
                            <option value="Paath">Paath</option>
                            <option value="Shabd">Shabd</option>
                           
                            </select>
                            
                            
                            
                            <div class="text-danger"><strong id="secondary_genre_error"></strong></div>
                        </div>






                        <div class="form-group col-md-6">
                            <label for="password">Remerks <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="sub_secondary_genre" id="sub_secondary_genre" placeholder="Enter sub-secondary_genre" /> -->
                            
                            <select  name="sub_secondary_genre" id="sub_secondary_genre" class="form-control">
                            <option value="Additional information Ex :Women's Day , Mother's Day , Father's Day Etc">Additional information Ex :Women's Day , Mother's Day , Father's Day Etc</option>
                            <option value="Additional information Ex:Hiphop/Rap">Additional information Ex:Hiphop/Rap</option>
                            <option value="Additional information ex bhajan , Mother's Love etc">Additional information ex bhajan , Mother's Love etc</option>
                            <option value="Additional Information Ex: Bidai geet , Sagai geet etc">Additional Information Ex: Bidai geet , Sagai geet etc</option>
                            <option value="Soundtrack=Movie Song">Soundtrack=Movie Song</option>
                            <!-- <option value="Mantra">Mantra</option>
                            <option value="Bhajan">Bhajan</option>
                            <option value="Geet">Geet</option>
                            <option value="Kirtan">Kirtan</option>
                            <option value="Mantra">Mantra</option>
                            <option value="Gurbani">Gurbani</option> -->
                            </select>
                            
                            
                            <div class="text-danger"><strong id="sub_secondary_genre_error"></strong></div>
                        </div>





                        <div class="form-group col-md-6">
                            <label for="password">Accepted Moods <span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="price_tier" id="price_tier" placeholder="Enter price_tier" /> -->
                            
                            <select  name="price_tier" id="price_tier" class="form-control">
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
                            <label for="password">Producer Catalogue Number<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="producer_catalogue_number" id="producer_catalogue_number" placeholder="Enter producer_catalogue_number" />
                            <div class="text-danger"><strong id="producer_catalogue_number_error"></strong></div>
                        </div>

                        <div class="form-group col-md-12 row">
                           
                           <div class="col-md-4">
                           <label for="form_name" style="text-align:left;">Parental Advisory :</label>
                           </div> <div class="col-md-2">
                           <label class="block"><input type="radio" name="parental_advisory" value="yes" >&nbsp;Yes</label>
                          </div>
                          <div class="col-md-2">
                           <label class="block"><input type="radio" name="parental_advisory" value="no" >&nbsp;No</label>
                          </div>
                          <div class="col-md-2">
                           <label class="block"><input type="radio" name="parental_advisory" value="cleaned" >&nbsp;Cleaned</label>
                          </div>
                           <!-- <div class="text-danger"><strong id="content_type_error"></strong></div> -->
                           
                           
                           
                       </div>
                        <!-- <div class="form-group col-md-6">
                            <label for="password">Parental Advisory<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="parental_advisry" id="parental_advisry" placeholder="Enter parental advisry" />
                            <div class="text-danger"><strong id="parental_advisry_error"></strong></div>
                        </div> -->

                        <div class="form-group col-md-6">
                            <label for="password">Preview Start<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="preview" id="preview" placeholder="Enter preview start" />
                            <div class="text-danger"><strong id="preview_error"></strong></div>
                        </div>


                        <input type="hidden" class="form-control"  name="id" id="id"  value="{{$event_details->id}}" required>


                        <div class="form-group col-md-6">
                            <label for="password">Track Title language<span style="color: red;">*</span></label>
                            <!-- <input type="text" class="form-control" name="track_title_language" id="track_title_language" placeholder="Enter track title language" /> -->
                            <select  name="track_title_language" id="track_title_language" class="form-control">
                            <otion value="Hindi">Hindi</option>
                            <option value="Other Language">Other Language</option>
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
                            
                            
                            
                            <div class="text-danger"><strong id="track_title_language_error"></strong></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Lyrics Language<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="lyrics_language" id="lyrics_language" placeholder="Enter lyrics_language" />
                            <div class="text-danger"><strong id="lyrics_language_error"></strong></div>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="password">Lyrics<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="lyrics" id="lyrics" placeholder="Enter lyrics" />
                            <div class="text-danger"><strong id="lyrics_error"></strong></div>
                        </div>


                        




                       
                        <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}" />
                    </div>
                    <br>
<input type="submit" name="submit" class="btn btn-dark btn-lg btn-block mt-15" value="Continue">
<br><br>
                  
                    </form>
                </div>
                <div class="col-md-2 col-md-push-2"></div>
            </div>
        </div>
    </section>
    <br><br><br>
</div>
<!-- end main-content -->
@endsection @section('add-js')
<!-- <script>
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
        </script> -->
        <script>
function myFunction() {
  document.getElementById("generate_isre").disabled = true;
}

function myFunction2() {
  document.getElementById("generate_isre").disabled = false;
}
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
