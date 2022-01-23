@extends('User.layouts.leftMenu') @section('title') Admin || Dashboard @endsection 
@section('text')
Dashboard
@endsection

@section('content')

    <div class="content-wrapper-scroll">
        <div class="content-wrapper">
            <div class="row gutters">
                <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row gutters">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card gradient-violet-pink card-186">
                                <div class="card-body">
                                    <div class="sales-tile">
                                        <div class="sales-tile-block">
                                            <div class="sales-tile-icon violet"><i class="icon-supervised_user_circle"></i></div>
                                            <div class="sales-tile-details">
                                                <h5>Customers</h5>
                                                <h2>250</h2>
                                                <span>+5.8%</span>
                                            </div>
                                        </div>
                                        <div id="customersGraph" class="apex-hide-lines"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card gradient-teal-cream card-186">
                                <div class="card-body">
                                    <div class="sales-tile">
                                        <div class="sales-tile-block">
                                            <div class="sales-tile-icon teal"><i class="icon-motion_photos_on"></i></div>
                                            <div class="sales-tile-details">
                                                <h5>Products</h5>
                                                <h2>185</h2>
                                                <span>+4.9%</span>
                                            </div>
                                        </div>
                                        <div id="customersGraph2" class="apex-hide-lines"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card gradient-green card-186">
                                <div class="card-body">
                                    <div class="sales-tile">
                                        <div class="sales-tile-block">
                                            <div class="sales-tile-icon green"><i class="icon-shopping_bag"></i></div>
                                            <div class="sales-tile-details">
                                                <h5>Orders</h5>
                                                <h2>600</h2>
                                                <span>+8.2%</span>
                                            </div>
                                        </div>
                                        <div id="customersGraph3" class="apex-hide-lines"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card gradient-peach3 card-186">
                                <div class="card-body">
                                    <div class="sales-tile">
                                        <div class="sales-tile-block">
                                            <div class="sales-tile-icon peach"><i class="icon-settings_input_svideo"></i></div>
                                            <div class="sales-tile-details">
                                                <h5>Signups</h5>
                                                <h2>350</h2>
                                                <span>+3.7%</span>
                                            </div>
                                        </div>
                                        <div id="customersGraph4" class="apex-hide-lines"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card gradient-violet-pink card-186">
                                <div class="card-body">
                                    <div class="sales-tile">
                                        <div class="sales-tile-block">
                                            <div class="sales-tile-icon violet"><i class="icon-supervised_user_circle"></i></div>
                                            <div class="sales-tile-details">
                                                <h5>Customers</h5>
                                                <h2>250</h2>
                                                <span>+5.8%</span>
                                            </div>
                                        </div>
                                        <div id="customersGraph" class="apex-hide-lines"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card gradient-teal-cream card-186">
                                <div class="card-body">
                                    <div class="sales-tile">
                                        <div class="sales-tile-block">
                                            <div class="sales-tile-icon teal"><i class="icon-motion_photos_on"></i></div>
                                            <div class="sales-tile-details">
                                                <h5>Products</h5>
                                                <h2>185</h2>
                                                <span>+4.9%</span>
                                            </div>
                                        </div>
                                        <div id="customersGraph2" class="apex-hide-lines"></div>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
                
            </div>
        </div>
@endsection
