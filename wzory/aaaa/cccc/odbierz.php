<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
</head>
<body>

<?php
    if(isset($_POST["login"])) $login=$_POST["login"];
    else $login="Anonim";

    if(isset($_POST["haslo"])) $haslo=$_POST["haslo"];
    else $haslo="******";

    echo "Zostałeś zalogowany: ".$login."<br>";
    echo "Twoje hasło: ".$haslo."<br>";

    if(isset($_POST["gatunek"])){
        echo"twoje ulubione gatunki muzyczne:<br>";
        $dlugosc=count($_POST["gatunek"]);
        for($i=0;$i<$dlugosc;$i++){
            echo $_POST["gatunek"][$i];
            echo ", ";
        }
    }
    else echo"Nie wybrałeś nic";
?>
</body>
</html>