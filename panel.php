<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
<head>
  <meta http-equiv="Content-type" content="application/xhtml+xml; charset=utf-8" />
  <meta name="Description" content=" [wstaw tu opis strony] " />
  <meta name="Keywords" content=" [wstaw tu slowa kluczowe] " />
  <meta name="Author" content=" [dane autora] " />
  <meta name="Generator" content="kED" />

  <title> [tytuł strony] </title>

  <link rel="stylesheet" href="1.css" type="text/css" />
</head>
<body>

<div id='usun'>
<form method="post" action="usun.php">
<?php
$constr="host=localhost user=  password=";
$conn=pg_connect($constr);
$sql="SELECT * FROM rezerwacja
ORDER BY data;";
$wynik=pg_query($conn,$sql);
if (!$wynik) 
{ 
print "błąd w dostępie do tabeli rezerwacja";
exit;
}
$lPoz=pg_NumRows($wynik);
echo "<h2>Usuwanie Rezerwacji</h2>";
echo "<table><tr><td>Email</td><td>Tor</td><td>Data</td><td>Godzina</td></tr>";
for ($i=0; $i<$lPoz; $i++){
  $wiersz= pg_fetch_array($wynik, $i); 
  echo "<tr><td>".$wiersz[0]."</td><td>".$wiersz[1]."</td><td>".$wiersz[2]."</td><td>".$wiersz[3]."</td></tr>";
}
?>

	<p>E-mail: <input type="text" name="email" value=''></p>
	 <p>Numer toru: <select name="tor">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
	</select>
</p>
<p>Data: <input type="text" name="data" ></p>
 <p>Godzina rezerwacji<select name="godzina">
  <option value="10:00">10:00</option>
  <option value="11:00">11:00</option>
  <option value="12:00">12:00</option>
  <option value="13:00">13:00</option>
	<option value="14:00">14:00</option>
	<option value="15:00">15:00</option>
	<option value="16:00">16:00</option>
	<option value="17:00">17:00</option>
	<option value="18:00">18:00</option>
	<option value="19:00">19:00</option>
	<option value="20:00">20:00</option>
	<option value="21:00">21:00</option>
	</select>
	<input type="submit" value="Usuń" />
	
	<h2>Baza Rezerwacji </h2>
	</form>
	</div>
</body>
</html>
