<?php
//
// Simple PHP Calendar schedule
//

$servername = 'localhost';
$username = 'motol';
$password = 'm0t0l_p455';

$con = new mysqli($servername, $username, $password);

if ($con->connect_error) {
	echo('Spojeni s databází selhalo.');
	exit;
}

// FUNC

function fetch_data($date_from, $date_until) {
	$sql = 'SELECT * FROM calendar WERE datum >=' . $date_from . ' AND datum <= ' . $date_until . ';';
	$ret = $con->query($sql);
	if ($ret) {
		while($row = $ret->fetch_row()) {
			echo('<tr><td>' . $row[0] . '</td><td>' . $row[1] . '</td><td>' . $row[2] . '</td></tr>');
		}
	} else {
		echo('<b>Žádná data.</b>');
	}	
}

function write_default($year) {
	for ($i = 0;$i < 12; $i++) {
		for ($j = 1; $j <= cal_days_in_month(0, $i, $year); $j++) {
			$sql = 'INSERT INTO calendar VALUES(' . $year . '-' . $i . '-' . $j. ') ON DUPLICATE KEYS UPDATE;';
			$ret = $con->query($sql);
		}
	}
}

function write_row($date, $name1, $name2) {
	$sql = 'INSERT INTO calendar VALUES(' . $date . ',' . $name1 . ',' . $name2 . ') ON DUPLICATE KEYS UPDATE;';
	$ret = $con->query($sql);
}

//STATIC HEADER

echo('<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="motol.css">
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
	<select id="from-month" onchange="update_day()"></select>
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

echo ('<script src="motol.js"></script>');
echo ('</div></body></html>');

?>

