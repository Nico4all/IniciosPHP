<?php
include_once("ClaseElectronica.php");

$resistencias = [
    $_POST["resistencia1"],
    $_POST["resistencia2"],
    $_POST["resistencia3"],
    $_POST["resistencia4"],
    $_POST["resistencia5"]
];
$voltaje = $_POST["voltaje"];

$electronica = new Electronica($resistencias, $voltaje);
$electronica->calcularResistenciaTotal();
$electronica->calcularCorriente();
$electronica->calcularPotencia();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Cálculo de Circuito Electrónico</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Cálculo de Circuito Electrónico</h1>
        <div class="card mt-3">
            <div class="card-header">Resultados</div>
            <div class="card-body">
                <p><strong>Resistencia Total:</strong> <?php echo $electronica->getResistenciaTotal(); ?> Ohmios</p>
                <p><strong>Corriente:</strong> <?php echo $electronica->getCorriente(); ?> Amperios</p>
                <p><strong>Potencia:</strong> <?php echo $electronica->getPotencia(); ?> Vatios</p>
                <a class="btn btn-primary" href="../HTML/Electronica.html" role="button">Calcular Nuevo</a>
                <a class="btn btn-warning" href="../index.html" role="button" >Home</a>
            </div>
        </div>
    </div>
</body>
</html>