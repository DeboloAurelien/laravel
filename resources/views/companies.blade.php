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
        @include('header')
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h1>Liste des entreprises :</h1>
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
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($allCompanies as $company)

                            <tr class="border border-dark">
                                <th scope="row"><?php echo $company->id ?></th>
                                <td><?php echo $company->name ?></td>
                                <td><?php echo $company->address ?></td>
                                <td><?php echo $company->phone ?></td>
                                <td><?php echo $company->latitude ?></td>
                                <td><?php echo $company->longitude ?></td>
                                <td>
                                    <a class="btn border-0" href="{{ url('/updateCompany') }}?id=<?php echo $company->id ?>">
                                        @include("penImg")
                                    </a>
                                    <a class="btn border-0" href="{{ url('/removeCompany') }}?id=<?php echo $company->id ?>">
                                        @include("trashImg")
                                    </a>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>




        </div> <!-- end container -->

        <script src="../js/app.js"></script>
    </body>
</html>
