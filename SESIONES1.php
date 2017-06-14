<?php
session_start();
if (!isset($_SESSION["cuenta_paginas"])) {
  $_SESSION["cuenta_paginas"] = 0;
} else {
  $_SESSION["cuenta_paginas"]++;
}
?>
<html>
<body>
<html>
 <head>
  <title>contador de visitas a la pagina</title>
 </head>
 <body>
 <?php
 echo "Usted ingreso " . $_SESSION["cuenta_paginas"]. " veces";
 ?>
 