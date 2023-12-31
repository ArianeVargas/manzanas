@extends('layouts.app')

@section('content')
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
            height: 400px;
        }
    </style>
    </head>

    <body>
        <div class="container mt-5">
            <h2>How to Add Google Map in Laravel? - ItSolutionStuff.com</h2>
            <div id="map"></div>
        </div>

        <script type="text/javascript">
            function initMap() {
                const myLatLng = {
                    lat: 22.2734719,
                    lng: 70.7512559
                };
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 5,
                    center: myLatLng,
                });

                new google.maps.Marker({
                    position: myLatLng,
                    map,
                    title: "Hello Rajkot!",
                });
            }

            window.initMap = initMap;
        </script>

        <script type="text/javascript"
            src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>
    @endsection
