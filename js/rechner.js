function rechnen(f){

	//var mq = window.matchMedia( "(min-width: 750px)" )

	var teilkosten = 16875
	var kosten = 270000
	var stand = 17064

	var balkenwidth = 300
	var geldbalkenwidth = 260

	var laenge = 32
	var breite = 5
	// in m

	var spende = +document.getElementById('spendeinput').value+0
	var betrag = +spende+stand
// workaround to force number type

	var zielb = '0'
	if (spende > kosten) {
		zielb = '1'
	}
// we want to know if input money reached funding goal for later

	var ziels = '0'
	if (betrag > kosten) {
		ziels = '1'
	}
// we want to know if funded money+input money reached funding goal for later

	function setstandtext(standtextzahl){
		standtext = Math.round(standtextzahl/1000 * 10) / 10+ ' Tsd. €'
		if (zielb == '1') {
			standtext = '&gt;' + standtext
		} // if input money reached funding goal, we want to mark it in the text
	}

	if (zielb == '1') {
		setstandtext(kosten);
	} // if input money reached funding goal we want to show the funding goal
	  // on the marker as the upper limit
	else {
		setstandtext(betrag);
	}
	// else we want to show the input money on the marker
	// anyway: fire function setstandtext at least once

	var texterror = 'none'
	var textok = 'none'
	var textschiffsteilkomplett = 'none'
	var textschiffsteilprozent = 'none'
	var textschiffmeter = 'none'
	var textschiffkomplett = 'none'
	var textschiffsteilmehr = 'none'
	var button = 'none'

	function setbalken(standzahl){

		var spendenbalkenp = Math.round(standzahl / kosten * 100) / 100
		if (spendenbalkenp > 1) {
			spendenbalkenp = 1
		}
		// reached funding goal in percentage
		// make sure that it never goes above 1

		var spendenbalken = spendenbalkenp*balkenwidth
		// translate into pixels in width to cover. graphic is fixed to 300px right now

		if (spendenbalken > geldbalkenwidth) {
			geldbalken = geldbalkenwidth
		} else {
			geldbalken = spendenbalken
		}
		// marker for the reached funding in euros follows the bar
		// only when it reaches 260px it stops, to fit into the column

		document.getElementById("schiff-gespendet").style.width = spendenbalken + 'px'
		document.getElementById("stand").style.left = geldbalken + 'px'
		document.getElementById("stand").innerHTML = standtext
	}

	function settexte(){
		document.getElementById("spendentext-fehler").style.display= texterror

		document.getElementById("spendentext").style.display= textok

		document.getElementById("text-schiffsteil-komplett").style.display = textschiffsteilkomplett
		document.getElementById("text-schiffsteil-prozent").style.display = textschiffsteilprozent
		document.getElementById("text-schiffsteil-mehr").style.display = textschiffsteilmehr

		document.getElementById("text-schiff-meter").style.display = textschiffmeter
		document.getElementById("text-schiff-komplett").style.display = textschiffkomplett

		document.getElementById("button").style.display = button
	}

	if (isNaN(spende)) {
		texterror = 'inherit'
		textok = 'none'
		textschiffsteilkomplett = 'none'
		textschiffsteilprozent = 'none'
		textschiffmeter = 'none'
		textschiffkomplett = 'none'
		textschiffsteilmehr = 'none'
		button = 'none'
		// next if returns false
	}
	// if input is NaN, show errot-text and hide all others

	if (spende == '' || spende <= 0 || isNaN(spende)) {
		textok = 'none'
		textschiffsteilkomplett = 'none'
		textschiffsteilprozent = 'none'
		textschiffmeter = 'none'
		textschiffkomplett = 'none'
		textschiffsteilmehr = 'none'
		button = 'none'
		// hide all texts except error

		setstandtext(stand);
		// reset bar, moneymarker and text
		setbalken(stand);
		settexte();
		return false;
		// stop here
	}
	// if input is NaN, <=0 or empty

	if (ziels == '1') {
		eurotext = 'mehr als ' + kosten
	}
	else {
		eurotext = spende
	}
//	if funded money+input money reached funding goal, we want to mark it in the
// text and set the funding goal as the upper limit in the response text

	var euros = document.getElementsByClassName("EUR"),
		i = euros.length;
	while(i--) {
		euros[i].innerHTML = eurotext;
	}
	// cycle through all elements with class=EUR and set the new value

	textok = 'inherit'
	textschiffsteilprozent = 'inherit'
	textschiffmeter = 'inherit'
	textschiffsteilmehr = 'none'
	button = 'inherit'
	// texts shown or hidden in standard case (everthing goes right)

	if (betrag >= teilkosten) {
		textschiffsteilprozent = 'none'
		textschiffsteilkomplett = 'inherit'
		button = 'inherit'
	}
	// case: part of ship from current campaign would be funded

	if (betrag > teilkosten) {
		textschiffsteilmehr = 'inherit'
		button = 'inherit'
	}
	// case: part of ship from current campaign would be over-funded

	if (betrag >= kosten) {
		textschiffsteilkomplett = 'none'
		textschiffsteilprozent = 'none'
		textschiffsteilmehr = 'none'
		textschiffmeter = 'none'
		textschiffkomplett = 'inherit'
		button = 'inherit'
	}
	// case: whole ship would be funded

	var nprozent = spende / teilkosten * 100
	document.getElementById("prozent").innerHTML = Math.round(nprozent * 100) / 100
	var nmeter = betrag / kosten * laenge

	document.getElementById("unitmeter").innerHTML = "m"
	if (nmeter <= 0.01) {
		nmeter = nmeter * 100
		document.getElementById("unitmeter").innerHTML = "cm"
	}

	document.getElementById("meter").innerHTML = Math.round(nmeter * 100) / 100
	var nqmeter = betrag / kosten * laenge * breite

	document.getElementById("unitqmeter").innerHTML = "m²"
	if (nqmeter <= 0.01) {
		nqmeter = nqmeter * 100
		document.getElementById("unitqmeter").innerHTML = "cm²"
	}

	document.getElementById("qmeter").innerHTML = Math.round(nqmeter * 100) / 100

	// left over maths for the info text

	setbalken(betrag);
	settexte();
}
	//if (mq.matches) {
	// window width is at least 500px

	//}
	//else {
		// window width is less than 500px
	//}
