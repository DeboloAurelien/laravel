<?php
use App\Models\Employee;
$idEmployee = $_GET['id'];
Employee::destroy($idEmployee);

?>

    <!doctype html>
<html lang="en">
<head>
    <title>Suppression employé</title>
    <link href="../css/app.css" rel="stylesheet">
</head>
<body>
@include('header')
<div class="container">

    <div class="row">
        <div class="col-12">
            <h1>Supprimer un employé :</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p class="text-success">Employé bien supprimé !</p>
            <a class="btn btn-success" href="{{ url('/employees') }}">Retour aux employés</a>
        </div>
    </div>

</div> <!-- end container -->

<script src="../js/app.js"></script>
</body>
</html>
