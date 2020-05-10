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
<?php
error_reporting(0);

if($_POST["wyslij"])
{


date_default_timezone_set('Europe/Warsaw');
$date = date('Y-m-d');

$s="";
	$wr='/[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/';


  $imie = $_POST['imie'];
  $nazwisko = $_POST['nazwisko'];
  $email = $_POST['email'];
  $telefon = $_POST['telefon'];
	$tor = $_POST['tor'];
	$data = $_POST['data'];
	$godzina = $_POST['godzina'];
	
	if(isset($_POST['imie']))
{
$imie = $_POST['imie'];
}

if(empty($imie))
{ 
exit('<p>Podaj imię.</p>');
}

if(isset($_POST['nazwisko']))
{
  $nazwisko = $_POST['nazwisko'];
}

if(empty($nazwisko))
{ 
exit('<p>Podaj nazwisko.</p>');
}

if(isset($_POST['email']))
{
 $email =$_POST['email'];
}

if(empty($email))
{ 
exit('<p>Podaj email</p>');
}

if(isset($_POST['telefon']))
{
 $telefon = $_POST['telefon'];
}

if(empty($telefon))
{ 
exit('<p>Podaj telefon</p>');
}

if(isset($_POST['tor']))
{
 $tor = $_POST['tor'];
}

if(empty($tor))
{ 
exit('<p>Podaj numer toru</p>');
}

if(isset($_POST['data']))
{
$data = $_POST['data'];
}

if(empty($data))
{ 
exit('<p>Wybierz datę.</p>');
}

if(isset($_POST['godzina']))
{
$godzina = $_POST['godzina'];
}

if(empty($godzina))
{ 
exit('<p>Podaj godzinę.</p>');
}

if (!preg_match('/^[a-zA-Z]*$/', $imie)) {
exit('<p>Podaj poprawne imie.</p>');
}

if (!preg_match('/^[a-zA-Z]*$/', $nazwisko)) {
exit('<p>Podaj poprawne nazwisko.</p>');
}

if (!preg_match('/^[0-9]*$/', $telefon)) {
exit('<p>Podaj poprawny telefon.</p>');
}

if (!preg_match('/^[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]$/', $data)) {
exit('<p>Podaj poprawną datę.</p>');
}
	
$constr="host=localhost user= password=";
$conn=pg_connect($constr);


$sprawdz="SELECT Godzina FROM rezerwacja where Data = '$data' AND Tor ='$tor' AND Godzina='$godzina';";
$wpisz=pg_query($conn,$sprawdz);
$liczba=pg_NumRows($wpisz);
  $wyswietl= pg_fetch_array($wpisz, $i); 
if ($wyswietl[0]==$godzina)
{
exit('<p>Tor w tym czasie jest zarezerwowany podaj inną godzinę.</p>');
}

if ($data<$date)
{
exit('<p>Nie można wynająć toru, ponieważ wybrana data jest datą z przeszłości. Spróbój ponownie.</p>');
}

if (strlen($imie) > 20) 
{
exit('<p>Zbyt długie imię spróbój ponownie.</p>');
}

if (strlen($nazwisko) > 20) 
{
exit('<p>Zbyt długie nazwisko spróbój ponownie.</p>');
}

if (strlen($email) > 20) 
{
exit('<p>Zbyt długi adres email spróbój ponownie.</p>');
}

if (strlen($telefon) > 20) 
{
exit('<p>Zbyt długi numer telefonu spróbój ponownie.</p>');
}

$sql="SELECT * FROM rezerwacja;";
$wynik=pg_query($conn,$sql);
if (!$wynik) 
{ 
print "błąd w dostępie do tabeli rezerwacja";
exit;
}
	
	
$klient = "INSERT INTO klient (Imie, Nazwisko, Email, Telefon)
VALUES ('$imie', '$nazwisko', '$email', '$telefon');";
$dodaj1=pg_query($conn,$klient);

$rezerwacja = "INSERT INTO rezerwacja (Email, Tor, Data, Godzina)
VALUES ('$email', '$tor', '$data', '$godzina');";
$dodaj1=pg_query($conn,$rezerwacja);

echo '<h1>Gratuluję, udało się Tobie zarezerwować tor bowlingowy!</h1>';
}
?>
</body>
</html>
