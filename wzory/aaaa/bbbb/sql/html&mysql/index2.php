<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php
$connect = mysqli_connect("localhost","root","");
if($connect){
	$baza = mysqli_select_db($connect,"baza1");
	if($baza){
		
		$wynik = mysqli_query($connect,"SELECT * FROM tabela");
		if($wynik){
			$ile = mysqli_num_rows($wynik);
			if($ile>0){
				for($i=1;$i<=$ile;$i++){
					$wiersz = mysqli_fetch_assoc($wynik);
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
mysqli_close($connect);
}
else{
	echo "Brak połączenia z zadanym hostem, spróbuj jeszcze raz";
}
?>
</body>
</html>