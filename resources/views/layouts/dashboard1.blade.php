@extends('layouts.master')
@section('content')


<div class="container">

    <h3>
        Dashboard
        <small class="text-muted">TobaHome@gmail.com</small>
    </h3>

</div>


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-bed"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Ruangan</span>
                        <span class="info-box-number">
                            {{$ruangan -> count()}}
                            <small>Tersedia</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-home"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Homestay</span>
                        <span class="info-box-number">{{$homestay -> count()}}
                            <small>Tersedia</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Pemesanan</span>
                        <span class="info-box-number">{{$order -> count()}}
                            <small>Terhitung</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-bath"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Fasilitas</span>
                        <span class="info-box-number">{{$peralatan -> count()}}
                            <small>Tersedia</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="panel">
                <div id="chartHome"></div>
            </div>
        </div>
        <!-- /.row -->
</section>

@section('chart')
<script src="https://code.highcharts.com/highcharts.js"></script>
// Radialize the colors
<script>
Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function(color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});

// Build the chart
Highcharts.chart('chartHome', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Ketersediaan Sistem TobaHome, 2020'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'Share',
        data: [{
                name: 'Ruangan',
                y: {{$ruangan -> count()}}
            },
            {
                name: 'Homestay',
                y: {{$homestay -> count()}}
            },
            {
                name: 'Pemesanan',
                y: {{$order -> count()}}
            },
            {
                name: 'Fasilitas',
                y: {{$peralatan -> count()}}
            }
        ]
    }]
});
</script>
@stop

@endsection