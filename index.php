<?php
// Generar arreglo de 50 números aleatorios
$numeros = [];

for ($i = 0; $i < 50; $i++) {
    $numeros[] = rand(1, 100);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglos</title>
</head>
<body>
    <h1>50 números aleatorios</h1>
    <p><?php echo implode(", ", $numeros); ?></p>
</body>
</html>
