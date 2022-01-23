@extends('layouts.master') @section('title','Albam | Revenue Report') @section('add-css')
<style>
    body {
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
    }
    .main-body {
        padding: 15px;
    }
    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm > .col,
    .gutters-sm > [class*="col-"] {
        padding-right: 8px;
        padding-left: 8px;
    }
    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }
    .h-100 {
        height: 100% !important;
    }
    .shadow-none {
        box-shadow: none !important;
    }
</style>
@endsection @section('content')
<section class="page-header" data-bg-image="media/background/7.jpg">
    <div class="tim-container">
        <div class="page-header-title text-center">
            <h3>Revenue Report</h3>
        </div>

        <div class="breadcrumbs">
            <a href="#">Home</a>
            <span>/</span>
            <span>Revenue Report</span>
        </div>
    </div>
    <!-- /.tim-container -->
</section>

<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="col-md-12 row">
                            <div class="col-md-12">
                            <h4><u>Revenue Repoart</u></h4><br>
                            @if(isset($data4))
                         @foreach($data4 as $details)
                            
                                <div class="row">
                                        <div class="col-sm-4">
                                            <h6 class="mb-0">{{$details->month}}</h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary">
                                        {{$details->revenue}}
                                        </div>
                                    </div>
                                    <hr />
                                 @endforeach   
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection
