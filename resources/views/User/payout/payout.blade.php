@extends('User.layouts.leftMenu') @section('title') Admin || Dashboard @endsection
@section('text')
Payout
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
                                                    <th>Txc_date</th>
                                                        <th>Txc_no</th>
                                                        
                                                        <th>Amount</th>
                                                        <th>Upi Id</th>
                                                        <th>Bank Name</th>
                                                       
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>

                                               
                                                   
                                                @if(isset($payout_details))
                                                     @foreach($payout_details as $details)
                                                    <tr>
                                                    <td>{{$details->txc_date}}</td>
                                                       
                                                        <td>{{$details->txc_no}}</td>
                                                        <td>{{$details->amount}}</td>
                                                        <td>{{$details->upi_id}}</td>
                                                        <td>{{$details->bank_name}}</td>
                                                        
                                                       
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
