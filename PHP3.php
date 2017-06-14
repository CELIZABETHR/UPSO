<html>
<body>
<html>
 <head>
  <title>Frase</title>
 </head>
<?php
    $cadena = "playa";
	
	echo=substr($cadena,5,1);
     $posicion1 = substr($cadena, "php");
     $posicion2 = substr($cadena, "php");
     $posicion3 = substr($cadena, "PHP");
	 $posicion4 = substr($cadena, "PHP");
	 $posicion5 = substr($cadena, "PHP");
   
     if( $posicion1 === false )
        echo "No se ha encontrado la cadena 'php'<br />";
    else
        echo "Cadena 'php' encontrada en la posición [".$posicion1."]<br />";
  
     if( $posicion2 === false )
        echo "No se ha encontrado la cadena 'php'<br />";
    else
        echo "Cadena 'php' encontrada en la posición [".$posicion2."]<br />";
     if( $posicion3 === false )
        echo "No se ha encontrado la cadena 'PHP'<br />";
    else
        echo "Cadena 'PHP' encontrada en la posición [".$posicion3."]<br />";
	 if( $posicion4 === false )
        echo "No se ha encontrado la cadena 'php'<br />";
    else
        echo "Cadena 'php' encontrada en la posición [".$posicion4."]<br />";
	 if( $posicion5 === false )
        echo "No se ha encontrado la cadena 'php'<br />";
    else
        echo "Cadena 'php' encontrada en la posición [".$posicion5."]<br />";
	 if( $posicion6 === false )
        echo "undefined 'php'<br />";
   
?>
</body>
</html>