<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Datepicker - Default functionality</title>
	  <link rel="stylesheet" href="1.css" type="text/css" />
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( ".datepicker" ).datepicker();
  });
  </script>
</head>
<body>
<script>
  ( function( factory ) {
    if ( typeof define === "function" && define.amd ) {
 
        define( [ "../widgets/datepicker" ], factory );
    } else {

        factory( jQuery.datepicker );
    }
}( function( datepicker ) {
 
datepicker.regional.pl = {
    closeText: "Zamknij",
    prevText: "&#x3C;Poprzedni",
    nextText: "Następny&#x3E;",
    currentText: "Dziś",
    monthNames: [ "Styczeń","Luty","Marzec","Kwiecień","Maj","Czerwiec",
    "Lipiec","Sierpień","Wrzesień","Październik","Listopad","Grudzień" ],
    monthNamesShort: [ "Sty","Lu","Mar","Kw","Maj","Cze",
    "Lip","Sie","Wrz","Pa","Lis","Gru" ],
    dayNames: [ "Niedziela","Poniedziałek","Wtorek","Środa","Czwartek","Piątek","Sobota" ],
    dayNamesShort: [ "Nie","Pn","Wt","Śr","Czw","Pt","So" ],
    dayNamesMin: [ "N","Pn","Wt","Śr","Cz","Pt","So" ],
    weekHeader: "Tydz",
    dateFormat: "yy-mm-dd",
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: "" };
datepicker.setDefaults( datepicker.regional.pl );
 
return datepicker.regional.pl;
 
} ) );
      $(function() {
        $( ".datepicker" ).datepicker();
      });
  </script>
<form method="post" action="skrypt.php">
<h2> Formularz rezerwacyjny</h2>
  <p>Imie: <input type="text" name="imie"></p>
    <p>Nazwisko: <input type="text" name="nazwisko" ></p>
	<p>E-mail: <input type="text" name="email"></p>
    <p>Telefon <input type="text" name="telefon"></p>
	 <p>Numer toru: <select name="tor">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
	</select>
</p>
<p>Data: <input type="text" class="datepicker" name="data" value='kliknij, aby wybrać datę'></p>
 <p>Godzina rezerwacji<select name="godzina">
  <option value="10:00:00">10:00</option>
  <option value="11:00:00">11:00</option>
  <option value="12:00:00">12:00</option>
  <option value="13:00:00">13:00</option>
	<option value="14:00:00">14:00</option>
	<option value="15:00:00">15:00</option>
	<option value="16:00:00">16:00</option>
	<option value="17:00:00">17:00</option>
	<option value="18:00:00">18:00</option>
	<option value="19:00:00">19:00</option>
	<option value="20:00:00">20:00</option>
	<option value="21:00:00">21:00</option>
	</select>
</p>
<input type="submit" value="wyslij"  name="wyslij"/>
</form>
</select>

</body>
</html>
