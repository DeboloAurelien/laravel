<?php
use App\Models\Company;
use App\Models\Employee;

$allCompanies = Company::all();

foreach ($allCompanies as $company) {
    $idCompany = $company['id'];
    $company['employees'] = Employee::getEmployeesByIdCompany($idCompany);
}

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Entreprises</title>
        <link href="../css/app.css" rel="stylesheet">
        <style>
            #map {
                height: 600px;
                width:100%;
            }
        </style>
    </head>
    <body>
        @include('header')
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div id="map"></div>
                </div>
            </div>

        </div> <!-- end container -->

        <script>
            function initMap() {
                // pass PHP variable declared above to JavaScript variable
                const allCompanies = <?php echo json_encode($allCompanies) ?>;
                //console.log(allCompanies);

                /*let employeesOfCompany = [];
                const  = idCompany;

                for (let employee in allEmployees) {

                }*/

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
                //allCompanies.forEach(company => console.log(company.employees));
                /*allCompanies.forEach(function(company) {
                    company.employees.forEach(function(worker) {
                        console.log(worker.name);
                    })
                })*/
                allCompanies.forEach(company => addMarker(company));



                function addMarker(companies) {
                    console.log(companies.employees.length);
                    const marker = new google.maps.Marker({
                        position: { lat: companies.latitude, lng: companies.longitude },
                        map: map,
                    });

                    if (companies.name) {
                        let html = "";
                        //companies.employees.forEach(employee => addHtml(employee));
                        for (let employee in companies.employees) {
                            html += '<tr><td>'+companies.employees[employee].name+'</td><td>'+companies.employees[employee].firstname+'</td></tr>';
                        }
                        let infoWindow = new google.maps.InfoWindow({
                            content:'<h3>'+companies.name+'</h3><p>'+companies.address+'</p>' +
                                '<p class="text-success">'+companies.phone+'</p>' +
                                '<table>' +
                                    '<thead>' +
                                        '<tr>' +
                                            '<th colspan="2">Employés :</th>' +
                                        '</tr>' +
                                    '</thead>' +
                                    '<tbody>' +
                                        html +
                                    '</tbody>' +
                                '</table>',
                        });

                        marker.addListener('click', function () {
                            infoWindow.open(map, marker);
                        });
                    }
                }
            }
        </script>
        <script defer
                src="https://maps.googleapis.com/maps/api/js?key=<?php echo $_ENV['GOOGLE_MAPS_KEY']; ?>&callback=initMap">
        </script>
    </body>
</html>






