<?php
use App\Models\Company;
$allCompanies = Company::all();

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Entreprises</title>
        <link href="../css/app.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">

            @include('header')
            <div class="row text-center">
                <div class="col-12">
                    <p><span class="text-success"><?php ($allCompanies); ?></span> Entreprises trouvées.</p>
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

        <script src="../js/app.js"></script>
    </body>
</html>
