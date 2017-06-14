<html>
<head>
 <title>COLORES</title>
</head>
<body>
<?php

    $colores=array(
        '1' => 'azul',
        '2' => 'rojo',
        '3' => 'amarillo',
        '4' => 'verde',
        '5' => 'blanco'
    ) ;
    foreach ($colores as $valor){
        echo 'El color es: '.strtoupper($valor). '<br>';
    }
?>

</body>
</html>