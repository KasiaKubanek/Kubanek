<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php
$data_base = new mysqli("localhost","root","","baza1");
if($data_base -> connect_errno){
	echo "Błąd połączenia zserwerem bazodanowym: ".$data_base -> connect_error;	
}
else{
	$wynik = $data_base -> query("SELECT * FROM tabela");
	$ile = $wynik -> num_rows;
	for($i=0;$i<$ile;$i++){
		$wiersz = $wynik -> fetch_assoc();
		$id = $wiersz["id"];
		$imie = $wiersz["imie"];
		$nazwisko = $wiersz["nazwisko"];
		echo $id.". ".$imie." ".$nazwisko."<br />";
	}
	$data_base -> close();
}
?>
</body>
</html>