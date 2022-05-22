var obrazki = new Array();
var nr = 0;
var timer1 = 0;
var timer2 = 0;

	obrazki[0] = new Image();
	obrazki[0].src = "img/zdjecie1.png";

	obrazki[1] = new Image();
	obrazki[1].src = "img/zdjecie2.png";

	obrazki[2] = new Image();
	obrazki[2].src = "img/zdjecie3.png";

	obrazki[3] = new Image();
	obrazki[3].src = "img/zdjecie4.png";

	obrazki[4] = new Image();
	obrazki[4].src = "img/zdjecie5.png";

	obrazki[5] = new Image();
	obrazki[5].src = "img/zdjecie6.png";

	function schowaj(){
		$("#glowna").fadeOut(500);
	}
	
	function blysk(){
		$("#glowna").fadeIn(500);
	}

function zmienslajd(){
	nr++;
		if(nr == obrazki.length)nr = 0;
		var obraz = document.getElementById("zdjecia")
		obraz.src = obrazki [nr].src;
		blysk();
		timer1 = setTimeout("zmienslajd()", 5000);
		timer2 = setTimeout("schowaj()", 4500);
	}

function nastepny(){
	clearTimeout(timer1);
	clearTimeout(timer2);
	nr++;
		if(nr == obrazki.length)nr = 0;
			var obraz = document.getElementById("zdjecia")
		obraz.src = obrazki [nr].src;
		timer1 = setTimeout("zmienslajd()", 5000);
		timer2 = setTimeout("schowaj()", 4500);
	}

function poprzedni(){
	clearTimeout(timer1);
	clearTimeout(timer2);
	nr--;
		if(nr == obrazki.length)nr = 0;
		var obraz = document.getElementById("zdjecia")
		obraz.src = obrazki [nr].src;
	}
	