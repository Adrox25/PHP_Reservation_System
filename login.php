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
$login = $_POST['login'];
$haslo = $_POST['haslo'];
$dostep='student';
$dostep1='student';
if ($haslo==$dostep1)
{
if($login==$dostep)
{
include ("panel.php");

} 
else
{
echo "Wpisałeś błędne dane. Spróbój ponownie";
include ("login.html");
}
}
else
{
echo "Wpisałeś błędne dane. Spróbój ponownie";
include ("login.html");
}
?>

</body>
</html>
