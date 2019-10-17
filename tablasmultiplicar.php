<?php
	error_reporting(E_NOTICE);
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="UTF-8"/>
<title> tabla de multiplicar</title>
<body>
<h1 align="center">tabla de multiplicar</h1>
<table border="1" align="center">
<?php
 echo "<tr>";
 for ($thead="0";$thead<=10;$thead++){
             echo "<th>";
             echo $thead;
             echo "</th>";
 }
 echo "</tr>";
 for ($manu = 1; $manu <=10; $manu++){
            echo "<tr>";
            echo "<th>";
            echo $manu;
            echo "</th>";
                 for ($manu1=1;$manu1<=10;$manu1++){                      
                         $resultado = $manu1 * $manu;                    
                         echo "<td>";                      
                         echo $resultado;                      
                         echo "</td>";              
                 }              
         echo "</tr>";          
         }      
?>      
</table>
</body>
</html>