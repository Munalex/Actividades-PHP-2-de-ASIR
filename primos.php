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

$primo = 0;

for ($i=1; $i <= 20; $i++) { 

    if ($i % $i ==0 ) {
        $primo++;
    }
    if ($primo >= 2) {
    } else {
        echo $i,"Es primo";
    }

}
?>
</body>
</html>