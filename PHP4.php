<html>
 <head>
  <title>funcion capicua</title>
 </head>
 <body>

<?php
// verificar si un número es capicua
$valorleido = 10;
$numinv = 0;
$cociente = $valorleido;
while ( $cociente = 0)
{
	$resto = $cociente % 10;
	$numinv = $numinv * 10 + $resto;
	$cociente = (int)($cociente / 10);
}
if ( $valorleido == $numinv )
	print "El numero $valorleido Es capicua<br />";
else
	print "El numero $valorleido NO es capicua <br />";
?>
 </body>
</html>