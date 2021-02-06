<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hipotenusa</title>
</head>

<body>
<h2 align='center'>CALCULO DE LA HIPOTENUSA</h2>


<?php
$lado1 = 3;
$lado2 = 4;
$hipotenusa= null;

$hipotenusa = sqrt(pow($lado1, 2) + pow($lado2, 2));

echo 'Lado 1: ' . $lado1, '<br />';
echo 'lado 2: ' . $lado2, '<br />';
echo 'Hipotenusa: ' . $hipotenusa, '<br />';
?>
</body>
</html>