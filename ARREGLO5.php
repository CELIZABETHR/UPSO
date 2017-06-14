<html>
<head>
 <title>Productos</title>
</head>
<body>
<?php
$Productos = array("Foco "=>"$50","Toallon "=>"$70","Repasador "=>"$40","Difusor "=>"$100");
foreach($Productos as $key => $value) {	
echo "El Producto " . $key . "cuesta " . $value . '<li>';
}
 ?>
	
 
</body>
</html>

				   
