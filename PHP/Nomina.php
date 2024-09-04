<?php
include_once("ClaseNomina.php");

$nombre = $_POST["nombre"];
$horasNormales = $_POST["horas_normales"];
$horasExtrasDiurnas = $_POST["horas_extras_diurnas"];
$horasExtrasNocturnas = $_POST["horas_extras_nocturnas"];
$valorHora = $_POST["valor_hora"];

$empleado = new Empleado($nombre, $horasNormales, $horasExtrasDiurnas, $horasExtrasNocturnas, $valorHora);
$empleado->calcularSueldo();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Nómina del Empleado</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Nómina del Empleado</h1>
        <div class="card mt-3">
            <div class="card-header">Resultados</div>
            <div class="card-body">
                <p><strong>Nombre:</strong> <?php echo $empleado->getNombre(); ?></p>
                <p><strong>Horas Normales:</strong> <?php echo $empleado->getHorasNormales(); ?></p>
                <p><strong>Horas Extras Diurnas:</strong> <?php echo $empleado->getHorasExtrasDiurnas(); ?></p>
                <p><strong>Horas Extras Nocturnas:</strong> <?php echo $empleado->getHorasExtrasNocturnas(); ?></p>
                <p><strong>Sueldo Bruto:</strong> $<?php echo $empleado->getSueldoBruto(); ?></p>
                <p><strong>Sueldo Neto:</strong> $<?php echo $empleado->getSueldoNeto(); ?></p>
                <a class="btn btn-primary" href="../HTML/Nomina.html" role="button">Calcular Nuevo</a>
            </div>
        </div>
    </div>
</body>
</html>