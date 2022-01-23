@extends('Admin.layouts.leftMenu') @section('title') Admin||View All Movie @endsection @section('content')
<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">View Movie</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">View Movie</li>
    </ol>
</div>




@if(isset($albam_detail))

<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">View Movie Details</h2>
										</div>
										<div class="card-body">
											<div class="row">


                                            <div class="col-md-4">
                                            </div>
                                            <div class="col-md-4">
                                            <img src="albam/{{$albam_detail->album_image}}" style="width: 50%;">
                                            </div>
                                            <div class="col-md-4">
                                            </div>







												<div class="col-md-4">
													Album Title: {{$albam_detail->album_title}}<br>
													Album Category: {{$albam_detail->album_category}}<br>
                                                    Album Genre: {{$albam_detail->all_genre}}<br>
                                                    Album Sub_genre: {{$albam_detail->all_sub_category}}<br>
                                                    Album Description: {{$albam_detail->description}}<br>
                                                    Composer: {{$albam_detail->composer}}<br>
                                                    Additional InFormation: {{$albam_detail->additional_information}}<br>
                                                    Banner: {{$albam_detail->banner_image}}<br>
                                                    Star Cast: {{$albam_detail->star_cast}}<br>

                                                 <br><br>
                                                    <a class="btn btn-secondary mt-1 mb-1" href="/movie_status?id={{$albam_detail->id}}">Add Status</a>

												</div>
												<div class="col-md-4">
													Release Date: {{$albam_detail->release_date}}<br>
													Religion: {{$albam_detail->religion}}<br>
                                                    language: {{$albam_detail->language}}<br>
                                                    ISRE: {{$albam_detail->isre}}<br>
                                                   ISRE Code: {{$albam_detail->generate_isre}}<br>
                                                   Artist: {{$albam_detail->artist}}<br>
                                                   Music Release Date: {{$albam_detail->music_release_date}}/20<br>
                                                   Director: {{$albam_detail->director}}<br>

                                                    <br><br>
                                                    <a class="btn btn-secondary mt-1 mb-1" href="/film_isre?id={{$albam_detail->id}}">Add ISRE/UPC Code</a>
                                                    
												</div>
                                                <div class="col-md-4">
													UPC Code: {{$albam_detail->generate_upc}}<br>
													Label: {{$albam_detail->level}}<br>
                                                    Pline: {{$albam_detail->pline}}<br>
                                                    Cline: {{$albam_detail->cline}}<br>
                                                    Lyrics: {{$albam_detail->lyrics}}<br>
                                                   Mood: {{$albam_detail->composer}}<br>
                                                   Premier Release Date: {{$albam_detail->premier_release_date}}<br>
                                                   Producer: {{$albam_detail->producer}}<br>

                                                   
                                                   Status: {{$albam_detail->status}}<br>
                                                  

												</div>
										
									</div>
								
								</div>

							
							</div>
                            @endif
@endsection


