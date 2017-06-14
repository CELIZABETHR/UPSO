 


<html> 

<head><title>Calculadora</title></head> 

<body bgcolor=#BDBDBD> 

<CENTER> 

<h1>CALCULADORA</h1> 

<form method="POST"> 

<font color="blue">Ingrese una operacion:</font><BR/> 
<input type="text" name="caja" size=30><br/> 
<br/> 
<input type="submit" value="Resolver"><br/> 
<br/> 

<?php 

if(isset($_POST['caja'])){ 

$caja=$_POST['caja']; 

if($caja==''){ 

echo '<font color="red"><b>Ingrese un valor</b></font>'; 

}else{ 

$resul="echo $caja;"; 

echo '<table border="0">'; 

echo '<tr bgcolor="#DBDB70">'; 
echo '<td>'; 
echo '<strong>Operacion</strong>'; 
echo '</td>'; 

echo '<td>'; 
echo '<strong>Resultado</strong>'; 
echo '</td>'; 
echo '</tr>'; 

echo '<tr bgcolor="#38B0DE">'; 
echo '<td>'; 
echo '<center><B>'.$caja.'</center></B>'; 
echo '</td>'; 

echo '<td>'; 
echo '<center><B>'; 
eval($resul); 
echo '</center></B>'; 
echo '</td>'; 
echo '</tr>'; 

echo '</table>'; 

} 

}//isset 

?> 

</form> 



</CENTER> 

</body> 

</html> 