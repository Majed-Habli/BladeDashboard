<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <style>
        .text-center {
            text-align: center;
        }
        #map {
            width: '100%';
            height: 200px;
        }
    </style>
    @section('head-section')
      @include('head')
    @show

</head>
<body>
    <div class="dashboard-navbar">
        @section('navbar')
            @include('components.navbar.navbar')
        @show
    </div>
    <div class="dashboard-body">
        {{--<div class="dashboard-left">
            @section('sidebar')  
                @include('components.sidebar.sidebar')
            @show
        </div>--}}
        <div class="dashboard-right">
            <div class="outlet-header">Dashboard</div>
            <div class="outlet-body">
                <x-button/>
                <div id='bd-container' drag-root class="body-container">
                    <div drag-item class="map-container" draggable='true'>
                        <div class="Map-header">Map Container</div>
                        <div class="map-section">
                            @section('map')
                                <x-map/>
                            @show
                        </div>
                    </div>

                    <div id="chart-container" drag-item class="map-container" draggable='true'>
                        @section('chart')
                            <x-chart color="red" :data="$combinedData['data']" :chartype="$combinedData['types']" :charColor="$combinedData['colors']"/>
                        @show
                    </div>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>