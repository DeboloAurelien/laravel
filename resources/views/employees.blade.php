<?php
use App\Models\Employee;
$allEmployees = Employee::all();

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Employés</title>
        <link href="../css/app.css" rel="stylesheet">
    </head>
    <body>
        @include('header')
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h1>Liste des employés :</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <table class="table border border-dark">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Id Entreprise</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($allEmployees as $employee)

                        <tr class="border border-dark">
                            <th scope="row"><?php echo $employee->id ?></th>
                            <td><?php echo $employee->name ?></td>
                            <td><?php echo $employee->firstname ?></td>
                            <td><?php echo $employee->address ?></td>
                            <td><?php echo $employee->phone ?></td>
                            <td><?php echo $employee->idCompany ?></td>
                            <td>
                                <a class="btn border-0" href="{{ url('/updateEmployee') }}?id=<?php echo $employee->id ?>">
                                    @include("penImg")
                                </a>
                                <a class="btn border-0" href="{{ url('/removeEmployee') }}?id=<?php echo $employee->id ?>">
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
