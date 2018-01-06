<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
</head>
<body>
<form action="odbierz.php" method="post">
login: <input type="text" name = 'login' value='' > <br> <br>
haslo: <input type="password" name="haslo" id="" value=''> <br><br>
wybierz gatunek muzyki: <br>
<select name="gatunek[]" id="" multiple='multiple'>
<option value="rock">rock</option>
<option value="metal">metal</option>
<option value="jazz">jazz</option>
</select>

<input type="submit" value="prześlij">

</form>
</body>
</html>