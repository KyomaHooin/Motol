
var laborant = ['Tomas Okurka', 'Petr Kletecka', 'Marte Vesela', 'Jindra Hojer', 'Lida Barova', 'Martin Marecek'];

function daysInMonth(month, year) {
	return new Date(year, month, 0).getDate();
}

function populateDates(daydrop, monthdrop, yeardrop) {
	var today = new Date(),
	day = today.getUTCDate(),
	month = today.getUTCMonth(),
	year = today.getUTCFullYear(),
	daysInCurrMonth = daysInMonth(month, year);

	// Year
	for(var i = 0; i < 3; i++){
		var opt = document.createElement('option');
		opt.value = i + year;
		opt.text = i + year;
		yeardrop.appendChild(opt);
	}

	// Month
	for(var i = 0; i < 12; i++){
		var opt = document.createElement('option');
		opt.value = i + 1;
		opt.text = i + 1;
		monthdrop.appendChild(opt);
	}

	// Day
	for(var i = 0; i < daysInCurrMonth; i++){
		var opt = document.createElement('option');
		opt.value = i + 1;
		opt.text = i + 1;
		daydrop.appendChild(opt);
	}
}

function update_day() {
	var newMonth = months.indexOf(monthdropdown.value) + 1,
	newYear = yeardropdown.value;

	daysInCurrMonth = daysInMonth(newMonth, newYear);
	daydropdown.innerHTML = '';

	for(var i = 0; i < daysInCurrMonth; i++){
		var opt = document.createElement('option');
		opt.value = i + 1;
		opt.text = i + 1;
		daydropdown.appendChild(opt);
	}        
}

var dayfromdrop = document.getElementById('from-day');
var monthfromdrop = document.getElementById('from-month');
var yearfromdrop = document.getElementById('from-year');

populateDates(dayfromdrop, monthfromdrop, yearfromdrop)

var dayuntildrop = document.getElementById('until-day');
var monthuntildrop = document.getElementById('until-month');
var yearuntildrop = document.getElementById('until-year');

populateDates(dayuntildrop, monthuntildrop, yearuntildrop)

function switch_text_to_dropdown(item) {
	name =	document.getElementById(item).text;
	document.getElementById(item).innerHTML='<select id="name-select">';
	for (var i = 0; i < laborant.legth; i++) {
		document.getElementById(item).innerHTML+='<option>'.concat(laborant[$i],'</option>');
	}
	document.getElementById(item).innerHTML='</select>';
	document.getElementById('name-select').selectedIndex=laborant.indexOf(name);
}

function transpose_dropdown() {
	('.name-td').each(switch_to_dropdown());
}

