<?php
include_once("ClasePension.php");

$nombre = $_POST["nombre"];
$ingresoBase = $_POST["ingreso_base"];

$pension = new Pension($nombre, $ingresoBase);
$pension->calcularPension();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Cálculo de Pensiones</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Cálculo de Pensiones</h1>
        <div class="card mt-3">
            <div class="card-header">Resultados</div>
            <div class="card-body">
                <p><strong>Nombre:</strong> <?php echo $pension->getNombre(); ?></p>
                <p><strong>Ingreso Base:</strong> $<?php echo $pension->getIngresoBase(); ?></p>
                <p><strong>Monto Cotización:</strong> $<?php echo $pension->getMontoCotizacion(); ?></p>
                <p><strong>Cuenta Ahorro Pensional:</strong> $<?php echo $pension->getCuentaAhorroPensional(); ?></p>
                <p><strong>Seguro Invalidez y Muerte:</strong> $<?php echo $pension->getSeguroInvalidezMuerte(); ?></p>
                <p><strong>Comisión Administración:</strong> $<?php echo $pension->getComisionAdministracion(); ?></p>
                <p><strong>Garantía Pensión Mínima:</strong> $<?php echo $pension->getGarantiaPensionMinima(); ?></p>
                <a class="btn btn-primary" href="../HTML/Pensiones.html" role="button">Calcular Nuevo</a>
                <a class="btn btn-warning" href="../index.html" role="button" >Home</a>
            </div>
        </div>
    </div>
</body>
</html>