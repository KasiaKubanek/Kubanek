<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php
echo <<<KONIEC
<from action="strona.php" method="post">
Login:<input type="text" name="login" value="" /><br /><br />
Hasło:<input type="password" name="password" value="" /><br /><br />
<input type="checkbox" name="memory" value="tak" >Remember me<br /><br />
<input type="submit" value="Wejdź do !@#%$@" />
</from>
KONIEC;
?>
</body>
</html>