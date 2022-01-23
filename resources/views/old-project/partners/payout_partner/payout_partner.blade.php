@extends('layouts.master') @section('title') Music || All Payout Partner @endsection @section('content')
<section class="page-header" data-bg-image="media/background/7.jpg">
			<div class="tim-container">
				<div class="page-header-title text-center">
					<h3>All Payout Partner</h3>
					<h2>Payout Partner</h2>
				</div>

				<div class="breadcrumbs">
					<a href="#">Home</a>
					<span>/</span>
					<span>Payout Partner</span>
				</div>

			</div>
			<!-- /.tim-container -->
		</section>
		<!-- /#page-header -->

	




        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
</head>
<body class="body">
	<div class="table-responsive container">
		<table class="table" style="box-shadow: 0 0 10px 5px; margin-top:15px;">
        
    
			<thead class="table__head">











            <tr class="table__head__row">
					<th class="table__head__data table__head__data--lrg" style="font-size: 26px;">
						Payout Partner
					</th>
					<th class="table__head__data">
						
					</th>
					<th class="table__head__data">
					
					</th>
					<th class="table__head__data">
						
					</th>
					<th class="table__head__data">
					
					</th>
                   
					<th class="table__head__data">
					
					</th>
                  
					<th class="table__head__data table__head__data--actions">
						&nbsp;
					</th>
				</tr>












				<tr class="table__head__row">
					<th class="table__head__data table__head__data--lrg">
						Service Name
					</th>
					<th class="table__head__data">
						Month
					</th>
					<th class="table__head__data">
						Payout
					</th>
					<th class="table__head__data">
						Payout Date
					</th>
					<th class="table__head__data">
                    Reference no
					</th>
                   
					<th class="table__head__data">
					Bank Name
					</th>
                   
					<th class="table__head__data table__head__data--actions">
						&nbsp;
					</th>
				</tr>
			</thead>
			<tbody class="table__body">
				

			@if(isset($data4))
             @foreach($data4 as $details)
				<tr class="table__body__row">
					<td class="table__body__data">
					{{$details->service_name}}
					</td>
					<td class="table__body__data">
					{{$details->month}}
					</td>
                    <td class="table__body__data">
                    {{$details->payout}}
					</td>
					<td class="table__body__data">
                    {{$details->date}}
					</td>
					<td class="table__body__data">
					{{$details->ref_no}}
					</td>
                    <td class="table__body__data">
					{{$details->bank_name}}
					</td>
				</tr>
			 @endforeach
			@endif
			</tbody>
		</table>
	</div>










@endsection
