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

  <link rel="stylesheet" href=" [nazwa_arkusza_stylow.css] " type="text/css" />
</head>
<body>

<?php
  $email = $_POST['email'];
	$tor = $_POST['tor'];
	$data = $_POST['data'];
	$godzina = $_POST['godzina'];
	
	if(isset($_POST['email']))
{
 $email =$_POST['email'];
}

if(empty($email))
{ 
exit('<p>Wpisz email</p>');
}

if(isset($_POST['data']))
{
$data = $_POST['data'];
}

if(empty($data))
{ 
exit('<p>Wpisz datę.</p>');
}

if (!preg_match('/^[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]$/', $data)) {
exit('<p>Podaj poprawną datę.</p>');
}

if (strlen($email) > 20) 
{
exit('<p>Zbyt długi adres email spróbój ponownie.</p>');
}

$constr="host=localhost user=  password=";
$conn=pg_connect($constr);

$sprawdz="SELECT email FROM rezerwacja where email='$email' AND tor='$tor' AND data='$data' AND godzina='$godzina' ;";
$wpisz=pg_query($conn,$sprawdz);
$liczba=pg_NumRows($wpisz);
$wyswietl= pg_fetch_array($wpisz, $i); 
if ($wyswietl[0]=='')
{
exit('<p>Nie ma takiej rezerwacji. Wprowadź poprawne dane.</p>');
}

$sql="DELETE FROM rezerwacja where email='$email' AND tor='$tor' AND data='$data' AND godzina='$godzina' ;";
$wynik=pg_query($conn,$sql);
if (!$wynik) 
{ 
print "błąd w dostępie do tabeli rezerwacja";
exit;
}
echo "<h2>Rezerwacja pomyślnie została usunięta z bazy</h2>";
include ("panel.php");

?>

</body>
</html>
