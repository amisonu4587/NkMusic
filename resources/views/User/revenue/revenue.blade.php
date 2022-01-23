@extends('User.layouts.leftMenu') @section('title') Admin || Dashboard @endsection 
@section('text')
Revenue Report
@endsection
@section('content')

<div class="content-wrapper-scroll">
                    <div class="content-wrapper">
                        
                        <div class="row gutters">
                            <div class="colxxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card gradient-dark-grey">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table m-0">
                                                <thead>
                                                    <tr>
                                                       
                                                        <th> Platform</th>

                                                        <th>Month</th>
                                                        <th>Revenue</th>

                                                        <th>Reports</th>
                                                        <th>Downlode</th>
                                                       
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>

                                               
                                                   
                                                @if(isset($revenue_details))
                                                     @foreach($revenue_details as $details)
                                                    <tr>
                                                    <td>{{$details->revenue_for}}</td>
                                                       
                                                        <td>{{$details->month}}</td>
                                                        <td>{{$details->revenue}}</td>

                                                        <td>{{$details->excel_image}}</td>
                                                        <td><a href="rexcel/{{$details->excel_image}}" download="{{$details->month}}">Download Now</a></td>
                                                        
                                                       
                                                    </tr>
                                                 @endforeach
                                                 @endif
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
@endsection
