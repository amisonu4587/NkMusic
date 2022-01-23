@extends('layouts.master') @section('title') Music || All Album @endsection @section('content')
<section class="page-header" data-bg-image="media/background/7.jpg">
			<div class="tim-container">
				<div class="page-header-title text-center">
					<h3>All Album</h3>
					<h2>Album</h2>
				</div>

				<div class="breadcrumbs">
					<a href="#">Home</a>
					<span>/</span>
					<span>All Album</span>
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
					Film
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
				<th class="table__head__data">
				<a href="/album" class="btn btn-primary">Add Album</a>
				</th>
			
			</tr>












			<tr class="table__head__row">
				<th class="table__head__data table__head__data--lrg">
					Album Image
				</th>
				<th class="table__head__data">
					Album Title
				</th>
				<th class="table__head__data">
					Label Name
				</th>
				<th class="table__head__data">
				ISRE Code
				</th>
				<th class="table__head__data">
				Release Date
				</th>
				<th class="table__head__data">
				Status
				</th>
				<th class="table__head__data">
				Approval
				</th>
			   
			
			
			</tr>
		</thead>
		<tbody class="table__body">
			

		@if(isset($movie_details))
		 @foreach($movie_details as $details)
			<tr class="table__body__row">
				<td class="table__body__data">
					<img src="albam/{{$details->album_image}}" style="height: 64px;width: 60px;">
				</td>
				<td class="table__body__data">
				{{$details->album_title}}
				</td>
				<td class="table__body__data">
				{{$details->level}}
				</td>
				<td class="table__body__data">
				{{$details->generate_isre}}
				</td>
				<td class="table__body__data">
				{{$details->release_date}}
				</td>
				<td class="table__body__data">
				{{$details->status}}
				</td>

				<td>
				@if($details->approve=='1')
				<span class="badge badge-pill badge-primary">Approved</span><br>
				<!-- <a href="form_approval2?id={{$details->id}}&approve=1" class="btn btn-danger btn-sm text-white"><i class="fas fa-toggle-on"></i> Inactiv </a> -->
				@else
				<span class="badge badge-pill badge-danger">Reject</span><br>
				<!-- <a href="form_approval2?id={{$details->id}}&approve=0" class="btn btn-primary btn-sm text-white"><i class="fas fa-toggle-on"></i> Activ </a> -->
				@endif


				</td>
			</tr>
		 @endforeach
		@endif
		</tbody>
	</table>
	</div>










@endsection
