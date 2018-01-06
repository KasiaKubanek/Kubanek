<?php
if(isset($_COOKIE["zalogowany"])){
	$zalogowany=$_COOKIE["zalogowany"];
}
else{
	$zalogowany= "nie";
	setcookie("zalogowany",$zalogowany,time()+60*60*24);
}

?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php
if($zalogowany == "tak"){
	echo "Witamy w MATRIXIE Panie ".$login;
}
else{
	echo "<a href=\"logowanie.php\">Zaloguj się</a>";
}
?>
</body>
</html>