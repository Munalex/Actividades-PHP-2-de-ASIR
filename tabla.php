<?php
	error_reporting(E_NOTICE);
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="UTF-8"/>
<title> tabla de multiplicar</title>
<body>
<h1 align="center">tabla de multiplicar de 5</h1>
<table border="1" align="center">
<?php
define('tabla',5);
for ($i = 1; $i <= 10; $i++){

    echo "<tr>";
    echo "<td>";
    echo tabla,"*$i";
    echo "</td>";
    echo "<td>";
    $resultado = tabla * $i;
    echo $resultado;
    echo "</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>
