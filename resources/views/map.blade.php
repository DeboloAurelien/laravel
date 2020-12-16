<?php
use App\Models\Company;
$allCompanies = Company::all();
?>


{{--<!doctype html>--}}
<html lang="en">
{{--    <head>--}}
{{--        <title>Entreprises</title>--}}
{{--        <link href="../css/app.css" rel="stylesheet">--}}

{{--        {!! $map['js'] !!}--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        <div class="container">--}}

{{--            @include('header')--}}

{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    {!! $map['html'] !!}--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div> <!-- end container -->--}}
{{--    </body>--}}
</html>





<!doctype html>
<html lang="en">
    <head>
        <title>Entreprises</title>
        <link href="../css/app.css" rel="stylesheet">
        <style>
            #map {
                height: 400px;
                width:100%;
            }
        </style>
    </head>
    <body>
        <div class="container">

            @include('header')

            <div class="row">
                <div class="col-12">
                    <div id="map"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table border border-dark">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Latitude</th>
                            <th scope="col">Longitude</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($allCompanies as $company) {
                            echo '<tr class="border border-dark">';
                            echo '<th scope="row">'.$company->id.'</th>';
                            echo '<td>'.$company->name.'</td>';
                            echo '<td>'.$company->address.'</td>';
                            echo '<td>'.$company->phone.'</td>';
                            echo '<td>'.$company->latitude.'</td>';
                            echo '<td>'.$company->longitude.'</td>';
                            echo '</tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div> <!-- end container -->

        <script>




            function initMap() {
                // pass PHP variable declared above to JavaScript variable
                const allCompanies = <?php echo json_encode($allCompanies) ?>;

                const lille = { lat: 50.6333, lng: 3.0667 };
                /*const lomme = { lat: 50.65, lng: 2.9833 };
                const lambersart = { lat: 50.65, lng: 3.0333 };*/

                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 12,
                    center: lille,
                });

                // Add marker on click map event
                /*google.maps.event.addListener(map, 'click', function (event) {
                    addMarker({coords: event.latLng});
                });*/

                allCompanies.forEach(company => addMarker(company));

                function addMarker(props) {
                    const marker = new google.maps.Marker({
                        position: { lat: props.latitude, lng: props.longitude },
                        map: map,
                    });

                    if (props.name) {
                        let infoWindow = new google.maps.InfoWindow({
                            content:'<h1>'+props.name+'</h1><p>'+props.address+'</p><span class="text-success">'+props.phone+'</span>'
                        });

                        marker.addListener('click', function () {
                            infoWindow.open(map, marker);
                        });
                    }



                }
            }
        </script>
        <script defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnr5hzJzbzw0yv_0y0nWLCYYNCrGeZPRQ&callback=initMap">
        </script>
    </body>
</html>






