<?php
	error_reporting(E_NOTICE);
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="UTF-8"/>
<title>numeros</title>
<body>
<h1 align="center">numeros</h1>
<?php

$numero=5;

for ($i=0; $i <= 100; $i++){ 
	if (($i%$numero==0) && ($i%2==0)){
	echo $i,"es par","<br>";
	echo $i." es múltiplo de ".$numero,"<br>";
	
}
}

?>
</body>
</html>