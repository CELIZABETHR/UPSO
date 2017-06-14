<html>
<head>
 <title>Cuadro</title>
</head>
<body>
<?php
define("TAM",10);
echo "<table border=5>";
$n=1;
for ($n1=1; $n1<=TAM; $n1++)
{
 if ($n1 % 2 == 0)
 echo "<tr bgcolor=#A9A9A9>";
 else
 echo "<tr>";
 for ($n2=1; $n2<=TAM; $n2++)
 {
 echo "<td>", $n, "</td>";
 $n=$n+1;
 }
 echo "</tr>";
}
echo "</table>";
?>
</body>
</html>


