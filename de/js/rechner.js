function rechnen(f){

	//var mq = window.matchMedia( "(min-width: 750px)" )

	var teilkosten = 16875
	var kosten = 270000
	var stand = 7500

	var spende = +document.getElementById('spendeinput').value+0
	var betrag = +spende+stand

	var spendenbalkenp = Math.round(betrag / kosten * 100) / 100
	if (spendenbalkenp > 1) {
		spendenbalkenp = 1
	}

	var spendenbalken = spendenbalkenp*300

	if (spendenbalken > 260) {
		geldbalken = 260
	} else {
		geldbalken = spendenbalken
	}

	var ziels = '0'

	if (betrag > kosten) {
		ziels = '1'
	}

	var zielb = '0'

	if (spende > kosten) {
		zielb = '1'
	}

	if (ziels == '1') {
		standtext = '&gt;' + Math.round(kosten/1000 * 10) / 10+ ' Tsd. €'
	}
	else {
		standtext = Math.round(betrag/1000 * 10) / 10+ ' Tsd. €'
	}

	var texterror = 'none'
	var textok = 'none'
	var textschiffsteilkomplett = 'none'
	var textschiffsteilprozent = 'none'
	var textschiffmeter = 'none'
	var textschiffkomplett = 'none'
	var textschiffsteilmehr = 'none'
	var button = 'none'

	//document.getElementById("amount").value = spende

	function setbalken(){
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

	if (spende == '' || spende <= 0 || isNaN(spende)) {
		textok = 'none'
		textschiffsteilkomplett = 'none'
		textschiffsteilprozent = 'none'
		textschiffmeter = 'none'
		textschiffkomplett = 'none'
		textschiffsteilmehr = 'none'
		button = 'none'

		spendenbalken = stand/kosten
		geldbalken = stand/kosten
		standtext = Math.round(stand/1000 * 10) / 10+ ' Tsd. €'

		setbalken();
		settexte();
		//if (mq.matches) {
		// window width is at least 500px

		//}
		//else {
			// window width is less than 500px
		//}
		return false;
	}

	if (zielb == '1') {
		eurotext = 'mehr als ' + kosten
	}
	else {
		eurotext = spende
	}

	var euros = document.getElementsByClassName("EUR"),
		i = euros.length;
	while(i--) {
		euros[i].innerHTML = eurotext;
	}

	textok = 'inherit'
	textschiffsteilprozent = 'inherit'
	textschiffmeter = 'inherit'
	textschiffsteilmehr = 'none'
	button = 'inherit'

	if (betrag >= teilkosten) {
		textschiffsteilprozent = 'none'
		textschiffsteilkomplett = 'inherit'
		button = 'inherit'
	}

	if (betrag > teilkosten) {
		textschiffsteilmehr = 'inherit'
		button = 'inherit'
	}

	if (betrag >= kosten) {
		textschiffsteilkomplett = 'none'
		textschiffsteilprozent = 'none'
		textschiffsteilmehr = 'none'
		textschiffmeter = 'none'
		textschiffkomplett = 'inherit'
		button = 'inherit'
	}

	var nprozent = spende / teilkosten * 100
	document.getElementById("prozent").innerHTML = Math.round(nprozent * 100) / 100
	var nmeter = betrag / kosten * 32

	document.getElementById("unitmeter").innerHTML = "m"
	if (nmeter <= 0.01) {
		nmeter = nmeter * 100
		document.getElementById("unitmeter").innerHTML = "cm"
	}

	document.getElementById("meter").innerHTML = Math.round(nmeter * 100) / 100
	var nqmeter = betrag / kosten * 32 * 5

	document.getElementById("unitqmeter").innerHTML = "m²"
	if (nqmeter <= 0.01) {
		nqmeter = nqmeter * 100
		document.getElementById("unitqmeter").innerHTML = "cm²"
	}

	document.getElementById("qmeter").innerHTML = Math.round(nqmeter * 100) / 100
	//if (mq.matches) {
	// window width is at least 500px

	//}
	//else {
		// window width is less than 500px
	//}

	setbalken();
	settexte();

}
