<?php

echo('<html><head><meta charset="utf-8"></head><body style="background-color:palegoldenrod;">');

echo('
<br>
<p align="center"><font size="5"><b>SLUŽBY DENNÍ - Dětská - <font color="red">Laboranti</font> - obecná část, poliklinika</b></font></p>

<div align="center"><table width="60%">

<tr style="background-color:lightblue">
<td align="right">Zadejte termín od:</td>
<td>Den <select></select></td>
<td>Mesic <select></select></td>
<td>Rok <select></select></td>
<td><input type="checkbox">Upravy</input></td>
<td></td>
</tr>
<tr style="background-color:lightblue">
<td align="right">do:</td>
<td>Den <select>3</select></td>
<td>Měsíc <select>2</select></td>
<td>Rok <select>1</select></td>
<td><button>Zobraz</button></td>
<td><button>Tisk</button></td>
</tr>
</table>
<br>
<table width="60%">
<tr style="background-color:midnightblue">
	<td><font color="white">Datum</b></font></td>
	<td><font color="white">LABORANT OBECNÁ (K)</b></font></td>
	<td><font color="white">LABORANT POLIKLINIKA (L)</b></font></td>
</tr>

<tr style="background-color:lightblue;">
	<td>1.8. - Pátek</td>
	<td>Tomáš Roman</td>
	<td>Pavel Okurka</td>
</tr>

<tr style="background-color:gold;">
	<td>2.8. - Sobota</td>
	<td><select>
		<option></option>
		<option>Radek Hrouda</option>
		<option>Jana Novotná</option>
		<option>Zdenka Veselá</option>
	</select></td>
	<td>Filip Omáčka</td>
</tr>
</table></div>

<br><div align="center"><b>Vypsáno celkem: 31 dní (Maximum je 50 dní)</b></div>

');

echo ('</body></html>');


?>
