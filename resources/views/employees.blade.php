<?php
use App\Models\Employee;

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
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach (Employee::all() as $employee) {
                            echo '<tr class="border border-dark">';
                            echo '<th scope="row">'.$employee->id.'</th>';
                            echo '<td>'.$employee->name.'</td>';
                            echo '<td>'.$employee->firstname.'</td>';
                            echo '<td>'.$employee->address.'</td>';
                            echo '<td>'.$employee->phone.'</td>';
                            echo '<td>'.$employee->idCompany.'</td>';
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
