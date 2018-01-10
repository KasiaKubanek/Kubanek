<?php
error_reporting(0); //powoduje niepokazywanie się błędów z php należy zrobić to jeszcze przed znacznikiem <!DOCTYPE html>
?>
<!DOCTYPE html>
<html lang="pl"> <!--Ustawienie języka-->
<head>
    <style> /*W ten sposób możemy utworzyć arkusz stylu bezpośrednio w htmlu bez podpinania css'a*/
    table, th, td 
    {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th, td 
    {
        padding: 5px;
        text-align: center;
    }    
    </style>
    <meta charset="UTF-8"><!--Ustawienie kodowania znaków-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Ta meta określa jak strona ma się zachowywać i skalować; width=device-width sprawia że dostosowywuje się ona do wielkości ekranu urządzenia, initial-scale=1.0 określa z jakim przybliżeniem ma się otwierać strona za pierwszym razem-->
    <meta name="description" content="Opis strony"><!--Podanie opisu strony-->
    <meta name="keywords" content="HTML,CSS,XML,JavaScript"><!--Podanie kluczowych słów dla wyszukiwarek internetowych-->
    <meta name="author" content="autor strony"><!--Podanie autora strony-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><!--Ta opcja wymusza użycie przez IE najnowszej wersji silnika-->
    <link rel="stylesheet" type="text/css" href="style.css"><!--Podpięcie arkusza stylów-->
    <title>Document</title>
</head>
<body>

<!--Takie tam ogólne dotyczące tekstu-->
    <h1>1</h1>
	<h2>2</h2>
	<h3>3</h3>
	<h4>4</h4>
	<h5>5</h5>
    <h6>6</h6>
     
    <p>Paragraf</p>
    <i>Kursywa</i>
    <b>Pogrubienie</b>
    Indeks górny<sup>10</sup>
    Indeks dolny<sub>10</sub>
    Przejście do następnej linii<br />
    Ten znacznik robi taką poziomą linię <hr />która oddziela dwie części tego zdania
    <strong>Niby pogrubienie, a jednak wzmocnienie danego tekstu</strong>
    <em>niby kursywa, a jednak emfaza</em>
    <q>krótki cytat</q>
    A to jest <blockquote>długi cytat</blockquote>
	<cite>tego używaj do odnoszenia się do czegoś</cite>
	<dfn>to jest do definicji</dfn>
    <address>To jest do adresów, duh</address>
        
<!--Lista punktowana--> 
<!-- styl punktów można ustawić tak <ol type="">, w cudzysłowie można wpisać disc, circle, square-->
    <ul>
        <li>iksde</li>
        <ul>
            <li>iksde</li>
            <ul>
                <li>iksde</li>
            </ul>
            <li>iksde</li>
        </ul>
        <li>iksde</li>
    </ul>

<!--Lista numerowana--> 
<!--Numerki lub literki można ustawić tak <ol type="">, w cudzysłowie można wpisać 1, a, A, i, I-->
    <ol>
        <li>iksde</li>
        <ol type="A">
            <li>iksde</li>
            <ol type="I">
                <li>iksde</li>
            </ol>
            <li>iksde</li>
        </ol>
        <li>iksde</li>
    </ol>

<!--Tabele-->
<!--Najbardziej optymalne stylowanie tabeli I guess, można je ująć w znaczniku <style> w headzie lub równie dobrze w pliku css

table, th, td 
{
    border: 1px solid black;
    border-collapse: collapse;
}

th, td 
{
    padding: 5px;
    text-align: center;
}

-->

<table>
    <tr><th>imię</th><th>nazwisko</th><th>wiek</th></tr> <!-- znacznikiem <tr> otwieramy każdy wiersz tabeli, <th> jest używany do głównych komórek tabeli, tych na samej górze na przykład-->
    <tr><td>Kasiek</td><td>Kubanek</td><td>19</td></tr> <!--<td> używamy do zwykłch komórek tabeli-->
    <tr><td colspan="3">iksde</td></tr><!--Parametr colspan łączy podaną w cudzysłowie liczbę komórek w poziomej linii-->
    <tr><td rowspan="2">iksde</td><td>iksde</td><td>iksde</td></tr> <!--Parametr rowspan łączy podaną w cudzysłowie liczbę komórek w pionowej linii-->
    <tr><td>iksde</td><td>iksde</td></tr>
</table>

<!--Formularz-->
<form action="" method="post"><!--action określa gdzie zostanie wysłany formularz, można tam wpisać ścieżkę pliku do którego ma on zostać wysłany, pozostawienie tej opcji pustej spowoduje wysłanie formularza do tego samego pliku w którym się znajduje; w method można wpisać get lub post, używajcie post-->
<!--Daruję sobie opisywanie elementów formularza, I'm too lazy, zorientujecie się-->
    <fieldset>
        <legend>Legenda</legend>
        <label>Tekst:</label><input type="text" name="tekst" id="txt" placeholder="iksde"><br /><br />
        Hasło:<input type="password" name="haslo" /><br /><br />
        Data:<input type="date" name="data"><br /><br />
        Kolor:<input type="color" name="kolor"><br /><br />
        Radio:<input type="radio" name="gender" value="male" checked> Mężczyzna
        <input type="radio" name="gender" value="female"> Kobieta
        <input type="radio" name="gender" value="other"> Inna<br /><br />
        Checkbox:<input type="checkbox" name="vehicle" value="Bike"> XD
        <input type="checkbox" name="vehicle" value="Car" checked="checked"> Iks de<br /><br />
        Select:<select name="samochody" size="4" multiple>
            <option value="volvo" selected>Volvo</option>
            <option value="saab">Saab</option>
            <option value="fiat">Fiat</option>
            <option value="audi">Audi</option>
        </select><br /><br />
        Plik:<input type="file" name="plik"><br /><br />
        Pole tekstowe:<textarea name="message" style="width:300px; height:100px" placeholder="Pole pole łyse pole"></textarea><br /><br />
        <input type="submit" name="zatwierdz" value="Prześlij">
    </fieldset>
</form>

<!--php-->
<!--Tworzenie tabeli w bazie danych-->
<?php
$conn = mysqli_connect('localhost','root','', 'baza1') or die('<p>The database server is not available.</p>'); //W tym miejscu łączymy się z bazą danych, w nawiasie znajdują się kolejno dane: gdzie znajduje się baza danych, nazwa użytkownika, hasło do bazy, nazwa bazy do której się logujemy

$query = "CREATE TABLE tabela (
    id SMALLINT NOT NULL AUTO_INCREMENT,
    imie varchar(32) NOT NULL,
    nazwisko varchar(32) NOT NULL,
    PRIMARY KEY (id)
    )"; //Tutaj tworzymy zmienną której wartość jest zapytaniem które chcemy wykonać w bazie danych

$result = $conn -> query($query); //Tu z kolei prosimy o wykonanie tego zapytania
if ($result) echo("<p>Tabela utworzona</p>");
else die ("Brak dostępu do bazy danych: " . $conn -> error); //Jeśli zapytanie się powiedzie, dostaniemy informację o powodzeniu, jeśli nie, to wyskoczy błąd

mysqli_close($conn); //Tutaj zamykamy połączenie z bazą danych
?>

<!--Wprowadzanie danych do tabeli--> 
<!--Ten skrypt działa identycznie jak poprzedni--> 
<?php
$conn = mysqli_connect('localhost','root','', 'baza1') or die('<p>The database server is not available.</p>');

$query = "INSERT INTO tabela VALUES(NULL, 'Asdf', 'Fdsa')";

$result = $conn -> query($query);
if ($result) echo("Rekord dodany");
else die ("Wal się" . $conn -> error);

mysqli_close($conn);
?>

<!--Wyświetlanie wszystkich rekordów z tabeli, w której są pola imie, nazwisko, data_urodzenia-->
<!--To plik zrobiony po Śnieciowemu-->
<?php
$conn = mysqli_connect("localhost", "root", "", "baza1");
$wynik = $conn -> query("SELECT imie, nazwisko, data_urodzenia FROM pracownicy"); //Tak jak wyżej tworzymy zmienną której wartość jest zapytaniem, tylko że jest ono przy okazji też wykonywane
$ile = $wynik -> num_rows; //Tworzymy zmienną której przypisana wartość równa się liczbie wierszy zwróconych przez zapytanie w $wynik
for($i=1;$i<=$ile;$i++)
{
    $record = $wynik -> fetch_assoc(); //Tutaj pobieramy wiersz który zwróci zapytanie w formie tablicy asocjacyjnej i przypisujemy ją do zmiennej $record, poniżej poszczególne dane z tego wiersza są przypisywane zmiennym, a na końcu wyświetlone na ekranie
    $imie = $record["imie"];
    $nazwisko = $record["nazwisko"];
    $data_urodzenia = $record["data_urodzenia"];
    echo $imie." ".$nazwisko." ".$data_urodzenia."<br />";
}
mysqli_close($conn);
?>

<!--Inne wyświetlanie wszystkich rekordów z tabeli, w której są pola id, imie i nazwisko-->
<?php
$connect = mysqli_connect("localhost","root","");
if($connect){
	$baza = mysqli_select_db("baza1");
	if($baza){
		
		$wynik = mysqli_query("SELECT * FROM tabela");
		if($wynik){
			$ile = mysqli_num_rows($wynik);
			if($ile>0){
				for($i=1;$i<=$ile;$i++){
					$wiersz = mysqli_fetch_assoc($wynik);
					$id = $wiersz["id"];
					$imie = $wiersz["imie"];
					$nazwisko = $wiersz["nazwisko"];
					print $is.". ".$imie." ".$nazwisko."<br />";
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

<!--I jeszcze inne wyświetlenie rekordów z tabeli, takich jak wyżej-->
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

<!--Pobieranie danych z formularza przez PHP--> 
<!-- Powiedzmy że chcemy sobie podbrać dane z formularza w 105 linii kodu, w action wpiszemy ścieżkę do pliku do którego te dane wyślemy i wklepiemy w nim skrypt który przypisze te dane zmiennym i je wyświetli-->
<?php 
$tekst = $_POST["tekst"]; 
$haslo = $_POST["haslo"];
echo $tekst." ".$haslo;
$haslo_sz = md5($haslo); // Tak możemy se ustawić żeby zaszyfrowano nam podane hasło
echo $haslo_sz; //Wyświetli się zaszyfrowane hasło
?>

<!--Wincyj skryptów robiących różne rzeczy-->
<!--Sprawdzanie czy login i hasło są poprawne, czy coś-->
<?php
$password="haslo";
$user="user";

if(isset($_POST["login"])) $login=$_POST["login"];
else $login="anonymus";

if(isset($_POST["password"])) $haslo=$_POST["password"];
else $haslo="wrong";

for ($i=0;$i<count($_POST["opcje"]);$i++)
{ 
$opcje=$_POST["opcje"][$i];
}


if($password==$haslo && $user==$login)
{
	echo "NIE ZGINIESZ  ".$login."<br/>";
	
	for ($i=0;$i<count($_POST["opcje"]);$i++)
{ 
echo $_POST["opcje"][$i]." , ";
}

}
else
{
echo <<<END
<form action="logowanie.php">
Błędne dane Logowania Wróć do strony<br/>
<input type="submit" value="Wróć do strony Logowania" />
</form>	
END;
}
?>

<!--Wyświetlanie danych z formularza tuż pod nim na tej samej stronie--> 
<form  action="zadanie.php" method="post" >
        <label>Lubisz OWOCE JAKIE?</label><br/><br/>
    <input type="checkbox" name="fruit[]" value="Marchewka">Marchewka
    <input type="checkbox" name="fruit[]" value="Jabłko">Jabłko
    <input type="checkbox" name="fruit[]" value="Kiwi">Kiwi
    <input type="checkbox" name="fruit[]" value="Banan">Banan
    <input type="checkbox" name="fruit[]" value="Pomarańcza">Pomarańcza
    <input type="submit" name="" value="Wyślij"><br/><br/><br/>
    </form>
    <?php
        if(isset($_POST['fruit'])) $owoce= $_POST['fruit'];
        {
            foreach($owoce as $item) echo "$item<br/>";
        }
        
    ?>
-------------------------------------------------------------------------------------- 
    <body>
    <form  action="zadanie2.php" method="post" >
    <label>Lubisz ciastko?</label><br/><br/>
    <select multiple="multiple" size="5" name="ciasto[]">
    <option  value="Ciastko cytrynowe">Ciastko cytrynowe</option>
    <option  value="Tort">Tort</option>
    <option  value="Makaowiec">Makaowiec</option>
    <option  value="Ciastka Oli">Ciastka Oli</option>
    <option  value="3BIT">3BIT</option>
    </select>
    <input type="submit" value="Wyślij"><br/><br/><br/>
    </form>
    <?php
        if(isset($_POST['ciasto'])) $ciasto= $_POST['ciasto'];
        {
            foreach($ciasto as $item) echo "$item<br/>";
        }

        ?>
--------------------------------------------------------------------------------------
<body>
<form  action="zadanie3.php" method="post" >
    <label>Podaj swóją godność? </label>
    <label>Podaj datę swojej Śmierci?</label><br/><br/>
    <input type="text" name="imie" value="">
    <input type="date" value="" name="data">
    <input type="submit" value="Wyślij"><br/><br/><br/>
    </form>

    <?php
       if(isset($_POST['imie'])) $imie=$_POST["imie"];
       if(isset($_POST['data'])) $data=$_POST["data"];
       
       if($imie==""|| $data=="")
       {

       }
       else{
       echo "Cześć ".$imie."<br/>";
       echo "Umrzesz w ".$data;
       }
    ?>
--------------------------------------------------------------------------------------
<body>
    <form  action="zadanie4.php" method="post" >
    <label>Jak zostałeś człowiek, kobieto</label><br/>
    <input type="radio" name="time" value="jutro">Jutro<br/>
    <input type="radio" name="time" value="dziś">Dziś<br/>
    <input type="radio" name="time" value="kiedyś">kiedyś<br/>
    <input type="radio" name="time" value="nigdy">nigdy<br/>
    <input type="submit" value="Wyślij"><br/><br/><br/>
    </form>
    <?php
        if(isset($_POST['time'])) $time= $_POST['time'];
        
        if($time=="")
        {

        }

        else
        {
            echo "Stałam się człowiekiem ".$time;
        }

    ?>

<!--Wyświetlenie loginu, hasła i opcji wybranych selectem w formularzu-->
FORMULARZ W PLIKU 1

<form action="odbierz.php" method="post">
login: <input type="text" name = 'login' value='' > <br> <br>
haslo: <input type="password" name="haslo" id="" value=''> <br><br>
wybierz gatunek muzyki: <br>
<select name="gatunek[]" id="" multiple='multiple'> <!--Gdy pojawia się opcja multiple, to w name musi się pojawić []-->
<option value="rock">rock</option>
<option value="metal">metal</option>
<option value="jazz">jazz</option>
</select>
<input type="submit" value="prześlij">

PHP W PLIKU 2
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

<!--JAVASCRIPT-->
<!--NUUUUUUDYYYYY-->
// - komentarz jednowierszowy 
/* tekst */ - komentarz wielowierszowy

Operatory arytmetyczne
+, -, *, / - dodawanie, odejmowanie, mnożenie, dzielenie
% - zwraca resztę z dzielenia

x++ - inkrementacja, zwiększenie wartości zmiennej o jeden
++x - preinkrementacja, najpierw zwiększamy wartość zmiennej o jeden
x-- - dekrementacja, czy na prawdę muszę to tłumaczyć
--x - predekrementacja, jak w preinkrementacji
+= dodawanie czegoś do oryginalnej wartości zmiennej
-= odejmowanie czegoś od oryginalnej wartości zmiennej 
*= mnożenie oryginalnej wartości zmiennej przez liczbę za znakiem równania regbjhbgugr no przecież widzisz że można tak robić z każdym operatorem i wiadomo co to oznacza

var - deklarowanie zmiennej, duh
const - deklarowanie stałej, jej raz określona wartość się nie zmienia 

<!--Operatory relacyjne:-->
Równy (==)
Różny (!=)
Identyczny (===)
Nieidentyczny (!==)
Większy niż (>)
Większy bądź równy (>=)
Mniejszy niż (<)
Mniejszy bądź równy (<=)

<!--Operatory logiczne-->

&& koniunkcja - wyrażenie wymusza aby obie części warunku były poprawne, np. (x == 5) && (y == 1) - aby została zwrócona prawda to x=5 i y=1
|| alternatywa - prawda pojawi się gdy spełniona zostanie przynajmniej jedna część warunku 
! negacja - np. (x == 5) && !(y == 1) - x musi być równe 5 i y nie może być równe 1

<!--Instrukcje warunkowe-->
IF - no tu się chyba rozwodzić nie muszę

if(warunek)
{
    instrukcja
}
else if(warunek 2)
{
    instrukcja 2
}
else if(warunek 3)
{
    instrukcja 3
}
else 
{
    inna instrukcja
}

SWITCH

<script>
var x = 1;
switch(x) 
{
    case 1: <!--W pierwszym wypadku sprawdzamy czy x ma wartość 1, jeśli tak to instrukcja się wykonuje-->
    document.write("x = 1");
    break; <!--Instrukcja warunkowa nie zakończy tutaj swojego wykonywania, będzie dalej sprawdzała pozostałe przypadki, więc należy ją w tym miejscu zakończyć wpisując break;-->
    case 2: <!--Tu sprawdzamy czy x ma wartość 2-->
    document.write("x = 2");
    break;
    case 3: <!--Tu sprawdzamy czy x ma wartość 3-->
    document.write("x = 3");
    break;
    case 4: <!--Tu sprawdzamy czy x ma wartość 4-->
    document.write("x = 4");
    break;
    default: <!--Jeśli żaden z powyższych przypadków nie jest spełniony, zostaje wykonany przypadek domyślny-->
    document.write("x ma wartość inną niż 1, 2, 3 lub 4");
}
</script>

<!--Wyrażenie warunkowe--> 

<script>
var x = 2;
var y = 4;
var wynik = (x > y) ? 1 : 0; //jeśli warunek będzie się zgadzał to zmienna wynik przyjmie wartość 1, jeśli wyrażenie będzie fałszywe to wynik otrzyma wartość 0
var wynik = (x > y) ? "Prawda" : "Fałsz"; //zamiast liczb można używać też wartości tekstowych
</script>

<!--Tablice--> 

<script>
var liczby = new Array(4); //Tworzymy tablicę złożoną z czterech elementów, pozostawienie nawiasu pustego stworzy tablicę o nieokreślonej liczbie elementów, numerowanie elementów tabliczy zaczynamy od 0
liczby[0] = 1000;
liczby[1] = 2000;
liczby[2] = 3000;
liczby[3] = 4000;
document.write(liczby[1]); //wyświetlenie elemntu tablicy 1, czyli 2000

var liczby2 = new Array(1000, 2000, 3000, 4000); //Stworzyliśmy tablicę z konkretnymi 4 elementami
document.write(liczby2[2]); //wyświetli się 3000

var liczby3 = [10, 20, 30, 40, 50]; //Stworzyliśmy tablicę z konkretnymi 5 elementami
var liczby4 = ["Kurs Excel", "Kurs PHP"]; //Znowu to samo tylko elementami w tablicy są ciągni znaków
</script>

<!--Ustawianie ciasteczka--> 
<script>
document.cookie="login = gorilla; expires=07/03/2018 15:20:00";
</script>

<!--More cookies--> 
<script>
document.cookie = "username1=Supek ;expires=Sun, 07 Jan 2018 16:38:35 GMT ";
document.cookie = "username2=Wolo ;expires=Sun, 07 Jan 2018 16:38:35 GMT ";
var decodedCookie = decodeURIComponent(document.cookie); //sprawdza jakie są cookies odziela je znakiem ";"
var ca = decodedCookie.split(';'); //dzieli cookies na elementy tablicy pierwszy cookie ca[0] drugi ca[1] itd.
for(var i = 0; i < ca.length; i++) { 
    //sprawdzanie warunków dla poszczególnych cookies
    //ca.length jest równa ilość rożnych cookies
    var c = ca[i]; 
    while (c.charAt(0) == ' ') { // Usuwa spacje z przed " username1=Supek" o ile taka się znajduje 
        c = c.substring(1); 
    }
    var name = "username1="; // szukana nazwa cookie
    if (c.indexOf(name) == 0) {
        var x = c.substring(name.length, c.length); //Usuwa z c="username1=Supek" "username1=" i zostawia "Supek"
    }
}
document.write(x + "<br>"); // Jest to wartość końcowa czyli zawartość cookie
</script>

<!--Wyrażenia regularne--> 

Wzorce, które opisują łańcuchy symboli
Znaki zwyczajne (pospolite): alfabet(mały, DUżY), cyfry

znaki niezwyczajne (specjalne):
.		-jeden dowolny znak(bezstronny)
\d		-dowolna cyfra dziesiętna
\D		-dowolny znak niebędący cyfrą
\s		-biały znak (np. spacja, tabulator)
^		-początek ciągu znaków(prawostronny)
$		-koniec ciągu znaków(lewostronny)
*		-powtórzenie 0 lub więcej razy
+		-powtórzenie 1 lub więcej razy
?		-powtórzenie 1 lub 0 razy
()		-wyrażenie atomowe(analizujemy jako całość)
|		-alternatywa(obustronna)
[a-z]	-zbiór 
[^a-z]	-zbiór zanegowany
{x}		-powtórzenie 'x'razy (dokładnie 'x' razy lewostronny)
{x,y}	-powtórzenie przynajmniej x nie więcej niż y
\		-umożliwia wprowadzenie znaków specjalnych jako zwykłych znaków


\d [0-9]
\D [^0-9]
\w [0-9a-zA-Z_]
\W [^0-9a-zA-Z_]
\s [ \t\r\n\v\f]
\S [^ \t\r\n\v\f]


<!--ZAPYTANIA SQL--> 
Wyświetl wszystkich pracowników, którzy zarabiająkwote równą największej pensji spośród wszystkich pracowników.
SELECT MAX(wynagrodzenie) FROM pracownicy;
SELECT * FROM pracownicy WHERE wynagrodzenie = (SELECT MAX(wynagrodzenie) FROM pracownicy);

Wyświetl wszystkich pracowników którzy zarabiają więcej niż wynosi średnia pensja w firmie.
SELECT AVG(wynagrodzenie) FROM pracownicy;
SELECT * FROM pracownicy WHERE wynagrodzenie > (SELECT AVG(wynagrodzenie) FROM pracownicy);

Wyświetl wszystkich pracowników którzy zarabiają o 200zł mniej niż kierownik działu IT.
SELECT wynagrodzenie FROM pracownicy, oddzialy WHERE pracownicy.id=oddzialy.kierownikid AND oddzialy.nazwa='IT' - 200;
SELECT * FROM pracownicy WHERE wynagrodzenie = (SELECT wynagrodzenie FROM pracownicy, oddzialy WHERE pracownicy.id=oddzialy.kierownikid AND oddzialy.nazwa='IT' - 200);

Wyświetl wszystkich pracowników z tabeli.
SELECT * FROM pracownicy;

Wyświetl imie i nazwisko wszystkich pracowników.
SELECT imie, nazwisko FROM pracownicy;

Wyświetl imie i nazwisko pracownika którego id=7.
SELECT imie, nazwisko FROM pracownicy WHERE id_pracownika = 7;

Wyświetl wszystkich pracowników którzy zarabiają przytnajmniej 2500zł.
SELECT * FROM pracownicy WHERE wynagrodzenie >= 2500;

Wyświetl wszystkich pracowników którzy pracują w oddziale o identyfikatorze 3.
SELECT * FROM pracownicy WHERE oddzial = 3;

Wyświetl wszystkich pracowników którzy pracuja w innym oddziale niżdział nr. 3.
SELECT * FROM pracownicy WHERE oddzial != 3
SELECT * FROM pracownicy WHERE oddzial <> 3;

Wyświetl wszystkich pracowników którzy zostali zatrudnieni po 23 lutego 2012r.
SELECT * FROM pracownicy WHERE data_zatrudnienia > '2012-02-23';

Wyświetl wszystkich pracowników którzy zarabiają 1000zł i pracują w dziale o identyfikatorze równym 4.
SELECT * FROM pracownicy WHERE wynagrodzenie = 1000 AND oddzial = 4;

Wyświetl wszystkich pracowników którzy zarabiają 1000zł lub 2000zł pracują w dziale o identyfikatorze równym 4.
SELECT * FROM pracownicy WHERE (wynagrodzenie = 1000 OR wynagrodzenie = 2000) AND oddzial = 4;

Wyświetl wszystkich nie zatrudnionych aktualnie pracowników.
SELECT * FROM pracownicy WHERE aktywny = 0;
SELECT * FROM pracownicy WHERE aktywny <> 1;

Dla każdego pracownika wyświetl informacje ile wynosiłą by jego pensja gdyby dostał podwyżkę o 300zł i nazwij ją Podwyzka.
SELECT wynagrodzenie, wynagrodzenie + 300 AS Podwyzka FROM pracownicy;

Dla każdego pracownika wyświetl informację ile wynosiłaby jego pensja gdyby dostał podwyżkę 25%.
SELECT imie, nazwisko, wynagrodzenie*1.25 AS po_podwyzce FROM pracownicy;
SELECT imie, nazwisko,wynagrodzenie + wynagrodzenie*0.25 AS po_podwyzce FROM pracownicy;

Wyświetl wszystkich pracowników którzy po podwyżce pensji o 10% będą zarabiali więcej niż2500zł.
SELECT * FROM pracownicy WHERE wynagrodzenie*1.1 > 2500;

Wyświetl pracowników płci męskiej urodzonych po 1 stycznia 1990r.
SELECT * FROM pracownicy WHERE plec = 'm' AND data_urodzenia > '1990-01-01';

Wyświetl kobiety urodzone po 1 stycznia 1990r i zarabiające co najwyżej 2000zł.
SELECT * FROM pracownicy WHERE plec = 'k' AND data uroczenia > '1990-01-01' AND wynagrodzenie <= 2000;

Wyświetl mężczyzn którzy zarabiają przynajmniej 1000zł i nie więcej niż 2000zł.
SELECT * FROM pracownicy WHERE plec = 'm' AND wynagrodzenie >= 1000 AND wynagrodzenie <= 2000;
SELECT * FROM pracownicy WHERE plec = 'm' AND wynagrodzenie BETWEEN 1000 AND 2000; --BETWEEN jest przedziałem domkniętym--

Wyświetl pracowników zatrudnionych nie wcześneij niż 1 stycznia 2012 i nie później niż 31 grudnia 2013.
SELECT * FROM pracownicy WHERE data_zatrudnienia BETWEEN '2012-01-01' AND '2013-12-31';

Wyświetl pracowników zarabiających mniej niż 1000 lub więcej niż 2000.
SELECT * FROM pracownicy WHERE wynagrodzenie < 1000 AND wynagrodzenie > 2000;
SELECT * FROM pracownicy WHERE wynagrodzenie NOT BETWEEN 1000 AND 2000;

Wyświetl pracowników o id=,1,4,7,9.
SELECT * FROM pracownicy WHERE id_pracownika = 1 OR id_pracownika = 4 OR id_pracownika = 7 OR id_pracownika = 9;
SELECT * FROM pracownicy WHERE id_pracownika IN (1,4,7,9);

Wyświetl pracowników o id różnym od 1, 4, 7, 9.
SELECT * FROM pracownicy WHERE id_pracownika NOT IN (1,4,7,9);

Wyświetl wszystkich pracowników któzy mają na imie Jan i zarabiająwięcej niż 1500zł.
SELECT * FROM pracownicy WHERE imie = 'Jan' AND wynagrodzenie > 1500;

Wyświetl wszystkich pracowników którzy mająna imie inaczej niż Jan i zarabiają przynajmniej 1500zł.
SELECT * FROM pracownicy WHERE imie <> 'Jan' AND wynagrodzenie >= 1500;

Znajdź wszystkich pracowników którzych imie zanycz się na litere J.
SELECT * FROM pracownicy WHERE imie LIKE 'J%';

Znajdź wszystkich pracowników którzych nazwiska kończą się na litere k.
SELECT * FROM pracownicy WHERE nazwisko LIKE '%k';--znak % pznacza dowolną ilość liter--

Znajdź wszystkich pracownikó których druga litera imienia to a.
SELECT * FROM pracownicy WHERE imie LIKE '_a%';--znak _ (podłoga) oznacza dokładnie jeden znak--

Wyświetl wszystkich pracowników których nazwisko spełnia następujące warunki: pierwszaa litera to w, trzecia litera to e, ostatnia litera to k.
SELECT * FROM pracownicy WHERE nazwisko LIKE 'w_e%k';

Policz wszystkich pracowników.
SELECT COUNT(*) AS liczbaPracownikow FROM pracownicy;

Policz wszystkich pracowników którzy nie majądrugiego imienia.
SELECT COUNT(*) AS liczbaPracownikow WHERE drugie_imie IS NULL;

Policz ilu pracowników pracuje w dziale IT.
SELECT COUNT(*) AS pracownicyIT FROM pracownicy, oddzialy WHERE pracownicy.oddzial = oddzialy.id_oddzialu AND nazwaOddzialu='IT';

Policz wszystkich pracowników którzy pracują w oddziałach znajdujących wię w Warszawie.
SELECT COUNT(*) AS pracownicyWawa FROM pracownicy, oddzialy, miasta WHERE pracownicy.oddzial=oddzial.id_oddzialu AND oddzialy.miastID=miasta.id_miasta AND miasta.nazwaMiasta='Warszawa';

Wylicz ile miesięcznie pracodawca wydaje na pensje.
SELECT SUM(wynagrodzenie) FROM pracownicy WHERE aktywny=1;

Wylicz ile kwartalnie pracodawca wydaje na pensje.
SELECT SUM(wynagrodzenie)*3 FROM pracownicy WHERE aktywny=1;

Znajdź maksymalne wynagrodzenie.
SELECT MAX(wynagrodzenie) FROM pracownicy;

Znajdź minimalne wynagrodzenie.
SELECT MIN(wynagrodzenie) FROM pracownicy;

Policz litery w imionach pracowników.
SELECT LENGTH(imie) FROM pracownicy;

Policz z ilu liter skłąda się najkrótsze imie pracownika.
SELECT MIN(LENGTH(imie)) FROM pracownicy;

Średnia pensja.
SELECT AVG(wynagrodznie) FROM pracownicy;

Policz średnią, minimalną i maksymalną wysokość pęsji pracownika oddzialu IT.
SELECT AVG(wynagrodzenie) AS srednia, MIN(wynagrodzenie) AS minimalne, MAX(wynagrodzenie) AS maksymalne

Wyświetl wszystkie unikatowe wysokości płac w firmie.
SELECT DISTINCT wynagrodzenie FROM pracownicy;
SELECT wynagrodzenie FROM pracownicy GROUP BY wynagrodzenie;

Wyświetl dla wszystkich pracowników wynagrodzenie rosnąco.
SELECT * FROM pracownicy ORDER BY wynagrodzenie ASC;

Wyświetl dla wszystkich pracowników wynagrodzenie malejąco.
SELECT * FROM pracownicy ORDER BY wynagrodzenie DESC;

Wyświetl ilu pracowników pracuje w poszczególnych działach.
SELECT COUNT(*) AS ile, nazwaOddzialu FROM pracownicy, oddzialy WHERE pracownicy.oddzial=oddzialy.id_oddziau GROUP BY nazwaOddzialu;

ZŁĄCZENIA TABELI:

01. Dla każdego pracownika wpisz jego imie, nazwisko i nazwę działu do każdego należy dany pracownik.
SELECT imię, nazwisko, nazwaOddzialu FROM pracownicy, oddzialy WHERE pracownicy.oddzial = oddzialy.id_oddzialu;

-- łączy tabele gdzie rekordy mająbie wartości
SELECT imie, nazwisko, nazwaOddzialu FROM pracownicy INNER JOIN oddzialy ON pracownicy.oddzial = oddzialy.id_oddzialu;

-- bierze rekord z lewej tabeli [pracownicy] i dopasowywuje od tabeli prawej [oddzialy]
SELECT imie, nazwisko, nazwaOddzialu FROM pracownicy LEFT OUTER JOIN oddzialy ON pracownicy.oddzial = oddzialy.id_oddzialu;

-- bierze rekord z prawej tabeli [oddzialy] i dopasowywuje od tabeli lewej [pracownicy]
SELECT imie, nazwisko, nazwaOddzialu FROM pracownicy RIGHT OUTER JOIN oddzialy ON pracownicy.oddzial = oddzialy.id_oddzialu;

-- bierze rekord z lewej tabeli [pracownicy] i dopasowywuje od tabeli prawej [oddzialy]
SELECT imie, nazwisko, nazwaOddzialu FROM pracownicy FULL JOIN oddzialy ON pracownicy.oddzial = oddzialy.id_oddzialu;


SELECT imie, nazwisko, nazwaOddzialu FROM pracownicy CROSS JOIN oddzialy ON pracownicy.oddzial = oddzialy.id_oddzialu;

Znajdź pracowników których pierwsza litera nazwiska jest taka sama jak pierwsza litera nazwy miasta w którym pracują.
SELECT imie, nazwisko, nazwaMiasta FROM pracownicy INNER JOIN oddzialy ON oddzialy.id_oddzialu = pracownicy.oddzial INNER JOIN miasta ON oddzialy.miastoID = miasta.id_miasta WHERE SUBSTRING(nazwisko, 1, 1) = SUBSTRING(nazwaMiasta, 1, 1);

[] oznaczają jeden znak ze zdefiniowanego zbioru,
[C-J] litera od C do J,
[XYZ] litera X lub Y lub Z,
[^] oznacza jeden znak z poza zdefiniowanego zbioru,
[^A-K] oznacza literęL i następne,
[^FOP] oznacza dowolną litere różnąod F, O i P.
</body>
</html>