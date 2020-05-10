<?xml version="1.0" encoding="iso-8859-2"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
<head>
  <meta http-equiv="Content-type" content="application/xhtml+xml; charset=iso-8859-2" />
  <meta name="Description" content=" [wstaw tu opis strony] " />
  <meta name="Keywords" content=" [wstaw tu slowa kluczowe] " />
  <meta name="Author" content=" [dane autora] " />
  <meta name="Generator" content="kED" />

  <title> [tytu� strony] </title>

  <link rel="stylesheet" href=" [nazwa_arkusza_stylow.css] " type="text/css" />
</head>
<body>
<?php
$constr="host=localhost user=  password=";
$conn=pg_connect($constr);
if (!$conn )
 {
     print "B��d: nie uda�o si� po��czy� z baz�<br>" ;
     exit;
 };
$sprawdz="SELECT Godzina FROM rezerwacja where Data = '2016-11-02' AND Tor ='1' AND Godzina='15:00';";
$wpisz=pg_query($conn,$sprawdz);
$liczba=pg_NumRows($wpisz);
  $wyswietl= pg_fetch_array($wpisz, $i); 
  echo $wyswietl[0];
	

?>
</body>
</html>
