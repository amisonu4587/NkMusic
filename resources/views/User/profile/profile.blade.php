@extends('User.layouts.leftMenu') @section('title') Admin || Dashboard @endsection
@section('text')
Profile
@endsection
@section('content')
@if(isset($profile_details))
<div class="content-wrapper-scroll">
                    <div class="content-wrapper">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="profile-header">
                                    <h1>Welcome, {{$profile_details->name}}</h1>
                                    <div class="profile-header-content">
                                        <div class="profile-header-tiles">
                                            <div class="row gutters">
                                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="profile-tile">
                                                        <span class="icon"><i class="icon-location_history"></i></span>
                                                        <h6>Name - <span>{{$profile_details->name}}</span></h6>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="profile-tile">
                                                        <span class="icon"><i class="icon-email"></i></span>
                                                        <h6>Email - <span>{{$profile_details->email}}</span></h6>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="profile-tile">
                                                        <span class="icon"><i class="icon-contacts"></i></span>
                                                        <h6>Contact - <span>{{$profile_details->phone}}</span></h6>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="profile-tile">
                                                        <span class="icon"><i class="icon-map"></i></span>
                                                        <h6>Location - <span>{{$profile_details->city}},{{$profile_details->state}}</span></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-avatar-tile">
                                            @if($profile_details->user_image=="")
                                            <img src="assets/img/z.png" class="img-fluid" alt="User Profile" />

                                            @else
                                            <img src="user/{{$profile_details->user_image}}" class="img-fluid" alt="User Profile" />

                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="stats-tile1 gradient-teal">
                                    <div class="stats-icon1 gradient-pearl"><i class="icon-receipt"></i></div>
                                    <h3>2</h3>
                                    <h4>Certifications</h4>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="stats-tile1 gradient-orange">
                                    <div class="stats-icon1 gradient-pearl"><i class="icon-stars"></i></div>
                                    <h3>7</h3>
                                    <h4>Awards</h4>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="stats-tile1 gradient-green">
                                    <div class="stats-icon1 gradient-pearl"><i class="icon-money"></i></div>
                                    <h3>$9500</h3>
                                    <h4>Balance</h4>
                                </div>
                            </div>
                          
                        </div>
                       
                    </div>
                    @endif
@endsection
