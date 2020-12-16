<?php
use App\Models\Company;
use App\Models\Employee;
$idCompany = $_GET['id'];

$arrayEmployeesByIdCompany = Employee::getEmployeesByIdCompany($idCompany)
?>
    <!doctype html>
<html lang="en">
<head>
    <title>Suppression entreprise</title>
    <link href="../css/app.css" rel="stylesheet">
</head>
<body>
@include('header')
<div class="container">

    <div class="row">
        <div class="col-12">
            <h1>Supprimer une entreprise :</h1>
        </div>
    </div>

    <?php
if (count($arrayEmployeesByIdCompany) == 0) {
    Company::destroy($idCompany);
?>
    <div class="row">
        <div class="col-12">
            <p class="text-success">Entreprise bien supprimée !</p>
            <a class="btn btn-success" href="{{ url('/companies') }}">Retour aux entreprises</a>
        </div>
    </div>
    <?php
    } else {
    ?>
    <div class="row">
        <div class="col-12">
            <p class="text-danger">L'entreprise contient toujours des employés. Virer ces employés avant de supprimer cette entreprise.</p>
            <a class="btn btn-info" href="{{ url('/companies') }}">Retour aux entreprises</a>
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

                @foreach ($arrayEmployeesByIdCompany as $employee)

                    <tr class="border border-dark">
                        <th scope="row"><?php echo $employee->id ?></th>
                        <td><?php echo $employee->name ?></td>
                        <td><?php echo $employee->firstname ?></td>
                        <td><?php echo $employee->address ?></td>
                        <td><?php echo $employee->phone ?></td>
                        <td><?php echo $employee->idCompany ?></td>
                        <td>
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
    <?php } ?>

</div> <!-- end container -->

<script src="../js/app.js"></script>
</body>
</html>
