<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php
$connect = mysql_connect("localhost","root","");
if($connect){
	$baza = mysql_select_db("baza1");
	if($baza){
		
		$wynik = mysql_query("SELECT * FROM tabela");
		if($wynik){
			$ile = mysql_num_rows($wynik);
			if($ile>0){
				for($i=1;$i<=$ile;$i++){
					$wiersz = mysql_fetch_assoc($wynik);
					$id = $wiersz["id"];
					$imie = $wiersz["imie"];
					$nazwisko = $wiersz["nazwisko"];
					print $id.". ".$imie." ".$nazwisko."<br />";
				}
			}
			else echo "Zapytanie nie zwróciło rekordów";
		}
		else echo "BŁĄD zapytania";
	}
	else echo "Brak połączenia z wybraną bazą";
mysql_close($connect);
}
else{
	echo "Brak połączenia z zadanym hostem, spróbuj jeszcze raz";
}
?>
</body>
</html>