
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>validador</title>
</head>
<body>
<?php

include_once __DIR__."/../conexion/conextiondb.php";

echo "<div>";
echo "el nombe de usuario es : ".$_REQUEST['mail'];
echo "<br>";
echo "la contraseña es: ".$_REQUEST['contrasena'];
echo "</div>";


$d -> bdCon()

?>

</body>
</html>
