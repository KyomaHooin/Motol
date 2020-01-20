<?php

// SQL CONNECTION

$servername = 'localhost';
$username = 'motol';
$password = 'm0t0l_p455';

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//TODO
//
// PHP: update_db()
// PHP: fetch_from_to() max 40
// PHP: print_on_click()
// PHP: gen_calendar_selection()
// JS: edit on check()
// JS: write_db_on_select()
// JS: 
//

//STATIC HEADER

echo('<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="motol.css">
<script src="motol.js"></script>
</head>
<body>
<br>
<p align="center"><font size="5"><b>SLUŽBY DENNÍ - Dětská - <font color="red">Laboranti</font> - lůžková část, poliklinika</b></font></p>
<div align="center">
');

// DATE SELECT

echo('
<table id="top_table">
	<tr style="background-color:lightblue">
	<td align="right">Zadejte termín od:</td>
	<td>Den
	<select id="from-day"></select>
	</td>
	<td>Mesic
	<select id="from-month"></select>
	</td>
	<td>Rok
	<select id="from-year"></select>
	</td>
	<td><input type="checkbox">Úpravy</td>
	<td></td>
	</tr>
	<tr style="background-color:lightblue">
	<td align="right">do:</td>
	<td>Den
	<select id="until-day"></select>
	</td>
	<td>Měsíc
	<select id="until-month"></select>
	</td>
	<td>Rok
	<select id="until-year"></select>
	</td>
	<td><button>Zobraz</button></td>
	<td><button>Tisk</button></td>
	</tr>
</table><br>
');

// CALENDAR

echo('
<table id="bottom_table">
	<tr style="background-color:midnightblue">
	<td><font color="white">Datum</font></td>
	<td><font color="white">LABORANT LŮŽKOVÁ</font></td>
	<td><font color="white">LABORANT POLIKLINIKA</font></td>
	</tr>

	<tr style="background-color:lightblue;">
	<td>1.8. - Pátek</td>
	<td>Tomáš Roman</td>
	<td>Pavel Okurka</td>
	</tr>

	<tr style="background-color:gold;">
	<td>2.8. - Sobota</td>
	<td>
	<select>
		<option>Radek Hrouda</option>
		<option>Jana Novotná</option>
		<option>Zdenka Veselá</option>
	</select>
	</td>
	<td>Filip Omáčka</td>
	</tr>
</table>

');

//STATIC FOOTER

echo ('</div></body></html>');

?>

