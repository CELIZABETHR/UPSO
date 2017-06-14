<html>

<head><title>Sumatorio</title></head>

<body>

<?php

function sumatorio($n) {

$resultado = 0;

while ($n >= 1 ) {

$resultado = $resultado + $n;

$n = $n - 1;

}

return $resultado;

}

$n = rand(1, 20);

print("Sumatorio de $n es: ".sumatorio($n)."<br />");

?>

</body>

</html>