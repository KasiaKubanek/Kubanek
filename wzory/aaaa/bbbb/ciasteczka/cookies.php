<?php
if(isset($_COOKIE["liczba"])){
	$liczba = $_COOKIE["liczba"]+1;
}
else{
	$liczba = 1;
}
setcookie("liczba", $liczba, time()+120)
?>
<!DOCTYPE html>
<html lang ="pl">
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php
echo ($liczba);
?>
</body>
</html>