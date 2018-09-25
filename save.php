<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo '¡Hi my name is: ' . htmlspecialchars($_POST["name"])  . " ".  htmlspecialchars($_POST["lastname"]) . '!';
echo "<br>";
echo 'My email address is: ' . $_POST["emailaddress"];
?>
</body>
</html>