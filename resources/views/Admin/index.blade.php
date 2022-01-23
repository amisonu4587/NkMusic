@extends('Admin.layouts.leftMenu') @section('title') Admin||Dashboard @endsection @section('content')
    <div class="page-header mt-0 p-3">
        <h3 class="mb-sm-0">Admin Dashboard</h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/"><i class="fe fe-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
        </ol>

    </div>

    <div class="row finance-content">
        <div class="col-xl-3 col-md-6">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h3 class="mb-3">Total Text</h3>
                    <div class="chart-circle" data-value="1" data-thickness="10" data-color="#ad59ff"><canvas width="128" height="128"></canvas>
                        <div class="chart-circle-value"><div class="text-xxl">75</div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h3 class="mb-3">Total User</h3>
                    <div class="chart-circle" data-value="1" data-thickness="10" data-color="#00d9bf"><canvas width="128" height="128"></canvas>
                        <div class="chart-circle-value"><div class="text-xxl">55</div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h3 class="mb-3">Total City</h3>
                    <div class="chart-circle" data-value="1" data-thickness="10" data-color="#fc0"><canvas width="128" height="128"></canvas>
                        <div class="chart-circle-value"><div class="text-xxl">30</div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h3 class="mb-3">Total Booking</h3>
                    <div class="chart-circle" data-value="1" data-thickness="10" data-color="#00b3ff"><canvas width="128" height="128"></canvas>
                        <div class="chart-circle-value"><div class="text-xxl">45</div></div>
                    </div>
                </div>
            </div>
        </div>


		
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card  shadow">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                            <h2 class="mb-0">Monthly Net Profit</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <canvas id="1-chart" class="chart-dropshadow h-315"></canvas>
                </div>
            </div>
        </div>
    
    </div>
</div> 
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $( document ).ready(function() {
    var ctx = document.getElementById("1-chart");
    @php($i=1)
    @php($ii=1)
    @php($iii=1)
    @php($iiii=1)
    @php($product_name=[1,2,3,4,5,6,7,8,9,10,11,12])
    var values = [5,24,44,4,54,4,5,8,9,5,3,44
			
    ];
    var values1 = [5,24,6,4,54,64,5,8,9,2,2,44
			
    ];
    var values12 = [5,2,6,4,5,6,5,8,9,2,2,55
		
    ];
    var values13 = [1,2,3,4,5,6,7,8,9,2,22,55
		
    ];
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Jan", "feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			type: 'line',
			defaultFontFamily: 'Montserrat',
			datasets: [{
				label: "Pending Booking",
				data: values,
				backgroundColor: 'transparent',
				borderColor: '#ad59ff',
				borderWidth: 4,
				pointStyle: 'circle',
				pointRadius: 10,
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#ad59ff',
			}, {
				label: "Reject Booking",
				data: values1,
				backgroundColor: 'transparent',
				borderColor: '#00d9bf',
				borderWidth: 4,
				pointStyle: 'circle',
				pointRadius: 10,
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#00d9bf',
			}, {
				label: "Complete Booking",
				data: values12,
				backgroundColor: 'transparent',
				borderColor: '#fc0',
				borderWidth: 4,
				pointStyle: 'circle',
				pointRadius: 10,
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#fc0',
            }, {
				label: "Cancel Booking",
				data: values13,
				backgroundColor: 'transparent',
				borderColor: 'rgb(0,179,255)',
				borderWidth: 4,
				pointStyle: 'circle',
				pointRadius: 10,
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'rgb(0,179,255)',
			}
        ]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: 'rgba(0,0,0,0.5)',
				bodyFontColor: 'rgba(0,0,0,0.5)',
				backgroundColor: '#fff',
				titleFontFamily: 'Montserrat',
				bodyFontFamily: 'Montserrat',
				cornerRadius: 3,
				intersect: false,
			},
			legend: {
				display: false,
				labels: {
					usePointStyle: true,
					fontFamily: 'Montserrat',
				},
			},
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "rgba(0,0,0,0.5)",
					},
					display: true,
					gridLines: {
						color: 'rgba(0,0,0,0.061)'
					},
					scaleLabel: {
						display: true,
						labelString: 'Month',
						fontColor: 'rgba(0,0,0,0.61)'
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "rgba(0,0,0,0.5)",
					},
					display: true,
					gridLines: {
						display: false,
						drawBorder: true
					},
					scaleLabel: {
						display: true,
						labelString: 'Thousands',
						fontColor: 'rgba(0,0,0,0.61)'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
    });
});

</script>
