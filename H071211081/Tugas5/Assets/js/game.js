// tangkap ketikakalah
const ketikakalah = document.querySelector("#ketikakalah");
const ketikaUanghabis = document.querySelector("#ketikaUanghabis");
const ketikamenang = document.querySelector("#ketikamenang");

// buat putar suara
window.onload = function () {
	document.getElementById("audio").play();
	document.getElementById("audio2").play();
	audio3.play();
};

// buat kasih berhenti suara dan pindah halaman
const bagian2 = document.querySelector(`.bagian2`);
function next2() {
	bagian2.style.display = `none`;
	audio2.pause();
	audio3.play();
}
const bagian3 = document.querySelector(`.bagian3`);
// nilai input
var total = 0;

const take = document.getElementById("take");
const bet2222 = document.getElementById("summu");
var tempatkartu = [];
var sum = [];
function start2() {
	let inputValue = document.getElementById("bet").value;
	if (inputValue > 0) {
		bagian3.style.display = `none`;

		for (var aalll = 0; aalll < 2; aalll++) {
			var orang2 = Math.random() * 52;
			if (orang2 < 1 && orang2 > 0) {
				tempatkartu.push(card1);
				sum.push(2);
			} else if (orang2 > 1 && orang2 < 2) {
				tempatkartu.push(card2);
				sum.push(3);
			} else if (orang2 > 2 && orang2 < 3) {
				tempatkartu.push(card3);
				sum.push(4);
			} else if (orang2 > 3 && orang2 < 4) {
				tempatkartu.push(card4);
				sum.push(5);
			} else if (orang2 > 4 && orang2 < 5) {
				tempatkartu.push(card5);
				sum.push(6);
			} else if (orang2 > 5 && orang2 < 6) {
				tempatkartu.push(card6);
				sum.push(7);
			} else if (orang2 > 6 && orang2 < 7) {
				tempatkartu.push(card7);
				sum.push(8);
			} else if (orang2 > 7 && orang2 < 8) {
				tempatkartu.push(card8);
				sum.push(9);
			} else if (orang2 > 8 && orang2 < 9) {
				tempatkartu.push(card9);
				sum.push(10);
			} else if (orang2 > 9 && orang2 < 10) {
				tempatkartu.push(card10);
				sum.push(10);
			} else if (orang2 > 10 && orang2 < 11) {
				tempatkartu.push(card11);
				sum.push(10);
			} else if (orang2 > 11 && orang2 < 12) {
				tempatkartu.push(card12);
				sum.push(10);
			} else if (orang2 > 12 && orang2 < 13) {
				tempatkartu.push(card13);
				sum.push(11);

				/////////////////////////////////////////
			} else if (orang2 > 13 && orang2 < 14) {
				tempatkartu.push(card14);
				sum.push(2);
			} else if (orang2 > 14 && orang2 < 15) {
				tempatkartu.push(card15);
				sum.push(3);
			} else if (orang2 > 15 && orang2 < 16) {
				tempatkartu.push(card16);
				sum.push(4);
			} else if (orang2 > 16 && orang2 < 17) {
				tempatkartu.push(card17);
				sum.push(5);
			} else if (orang2 > 17 && orang2 < 18) {
				tempatkartu.push(card18);
				sum.push(6);
			} else if (orang2 > 18 && orang2 < 19) {
				tempatkartu.push(card19);
				sum.push(7);
			} else if (orang2 > 19 && orang2 < 20) {
				tempatkartu.push(card20);
				sum.push(8);
			} else if (orang2 > 20 && orang2 < 21) {
				tempatkartu.push(card21);
				sum.push(9);
			} else if (orang2 > 21 && orang2 < 22) {
				tempatkartu.push(card22);
				sum.push(10);
			} else if (orang2 > 22 && orang2 < 23) {
				tempatkartu.push(card23);
				sum.push(10);
			} else if (orang2 > 23 && orang2 < 24) {
				tempatkartu.push(card24);
				sum.push(10);
			} else if (orang2 > 24 && orang2 < 25) {
				tempatkartu.push(card25);
				sum.push(10);
			} else if (orang2 > 25 && orang2 < 26) {
				tempatkartu.push(card26);
				sum.push(11);
				/////
			} else if (orang2 > 26 && orang2 < 27) {
				tempatkartu.push(card27);
				sum.push(2);
			} else if (orang2 > 27 && orang2 < 28) {
				tempatkartu.push(card28);
				sum.push(3);
			} else if (orang2 > 28 && orang2 < 29) {
				tempatkartu.push(card29);
				sum.push(4);
			} else if (orang2 > 29 && orang2 < 30) {
				tempatkartu.push(card30);
				sum.push(5);
			} else if (orang2 > 30 && orang2 < 31) {
				tempatkartu.push(card31);
				sum.push(6);
			} else if (orang2 > 31 && orang2 < 32) {
				tempatkartu.push(card32);
				sum.push(7);
			} else if (orang2 > 32 && orang2 < 33) {
				tempatkartu.push(card33);
				sum.push(8);
			} else if (orang2 > 33 && orang2 < 34) {
				tempatkartu.push(card34);
				sum.push(9);
			} else if (orang2 > 34 && orang2 < 35) {
				tempatkartu.push(card35);
				sum.push(10);
			} else if (orang2 > 35 && orang2 < 36) {
				tempatkartu.push(card36);
				sum.push(10);
			} else if (orang2 > 36 && orang2 < 37) {
				tempatkartu.push(card37);
				sum.push(10);
			} else if (orang2 > 37 && orang2 < 38) {
				tempatkartu.push(card38);
				sum.push(10);
			} else if (orang2 > 38 && orang2 < 39) {
				tempatkartu.push(card39);
				sum.push(11);
				//////////////////////////
			} else if (orang2 > 39 && orang2 < 40) {
				tempatkartu.push(card40);
				sum.push(2);
			} else if (orang2 > 40 && orang2 < 41) {
				tempatkartu.push(card41);
				sum.push(3);
			} else if (orang2 > 41 && orang2 < 42) {
				tempatkartu.push(card42);
				sum.push(4);
			} else if (orang2 > 42 && orang2 < 43) {
				tempatkartu.push(card43);
				sum.push(5);
			} else if (orang2 > 43 && orang2 < 44) {
				tempatkartu.push(card44);
				sum.push(6);
			} else if (orang2 > 44 && orang2 < 45) {
				tempatkartu.push(card45);
				sum.push(7);
			} else if (orang2 > 45 && orang2 < 46) {
				tempatkartu.push(card46);
				sum.push(8);
			} else if (orang2 > 46 && orang2 < 47) {
				tempatkartu.push(card47);
				sum.push(9);
			} else if (orang2 > 47 && orang2 < 48) {
				tempatkartu.push(card48);
				sum.push(10);
			} else if (orang2 > 48 && orang2 < 49) {
				tempatkartu.push(card49);
				sum.push(10);
				/////
			} else if (orang2 > 49 && orang2 < 50) {
				tempatkartu.push(card50);
				sum.push(10);
			} else if (orang2 > 50 && orang2 < 51) {
				tempatkartu.push(card51);
				sum.push(10);
			} else if (orang2 > 51 && orang2 < 52) {
				tempatkartu.push(card52);
				sum.push(11);
			}

			// looping untuk mengeser kartu
		}
		for (var i = 0; i < sum.length; i++) {
			total += sum[i];
		}
		bet2222.innerHTML = total;
		tempatkartu[0].style.transform =
			"rotatex(0deg) scale(1.6) scaley(1.2) rotate(-7deg) translatex(12em) translateY(18em)";

		tempatkartu[1].style.transform =
			"rotatex(0deg) scale(1.6) scaley(1.2) rotate(-7deg) translatex(22em) translateY(18em)";
		bet2222.innerHTML = total;
		// if (total > 21) {
		// 	setTimeout(function () {
		// 		if (uangku > 0) {
		// 			ketikakalah.style.display = `flex`;
		// 			tempatkartu[0].style.transform =
		// 				"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
		// 			tempatkartu[1].style.transform =
		// 				"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
		// 			tempatkartu[2].style.transform =
		// 				"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
		// 			tempatkartu[3].style.transform =
		// 				"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
		// 			tempatkartu[4].style.transform =
		// 				"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
		// 		} else {
		// 			ketikaUanghabis.style.display = `flex`;
		// 		}
		// 	}, 2000);
		audio3.play();
	} else {
		alert2.innerHTML = "Masukan bet taruhan terlebih dahulu bang";
	}
}

var alert2 = document.getElementById("alert1");
// default tanpa ada input
function alertDeafult() {
	alert2.innerHTML = "Masukan bet taruhan terlebih dahulu bang";
}

const next = document.querySelector(`.next`);
next.onclick = next2;
const start = document.querySelector(`.start`);
// default
start.onclick = alertDeafult;
// money bet
var uangkita;
var uangku = 5000;
var uangmu = document.getElementById("uangmu");
var uangmuingame = document.getElementById("uangmuingame");
///bet
start.disabled = false;
var uangmu2 = document.getElementById("uangmu2");
///akhir bet
document.getElementById("bet").onchange = function () {
	//event listener

	if (this.value < 0) {
		this.value = 1;
		uangkita = uangku - this.value;
		start.disabled = false;
		start.onclick = start2;
		alert2.innerHTML = "";
	}
	// batas maksimum dan minimum bet
	if (this.value > uangku) {
		uangkita = uangku;
		start.disabled = true;
		alert2.innerHTML = "UANG MU TIDAK CUKUP";
	}
	if (this.value > 0 && this.value < uangku) {
		uangkita = uangku - this.value;
		start.disabled = false;
		start.onclick = start2;
		alert2.innerHTML = "";
	}
	if (this.value == 0) {
		uangkita = uangku;
		alert2.innerHTML = "Nilai tidak boleh 0 atau kosong";
	}
	if (!/^\S{1,}$/.test(this.value)) {
		uangkita = uangku;
	}
	// if (this.value.length == 0) {
	// 	uangkita = uangku;
	// }
	//bet
	uangmu2.innerHTML = " " + this.value;
	//uang kita
	uangmu.innerHTML = " " + uangkita;
	uangmuingame.innerHTML = uangkita;
};

// pick kartu
// tangkap semua variable kartu
const card1 = document.querySelector(`.kartu img:nth-child(1)`);
const card2 = document.querySelector(`.kartu img:nth-child(2)`);
const card3 = document.querySelector(`.kartu img:nth-child(3)`);
const card4 = document.querySelector(`.kartu img:nth-child(4)`);
const card5 = document.querySelector(`.kartu img:nth-child(5)`);
const card6 = document.querySelector(`.kartu img:nth-child(6)`);
const card7 = document.querySelector(`.kartu img:nth-child(7)`);
const card8 = document.querySelector(`.kartu img:nth-child(8)`);
const card9 = document.querySelector(`.kartu img:nth-child(9)`);
const card10 = document.querySelector(`.kartu img:nth-child(10)`);
const card11 = document.querySelector(`.kartu img:nth-child(11)`);
const card12 = document.querySelector(`.kartu img:nth-child(12)`);
const card13 = document.querySelector(`.kartu img:nth-child(13)`);
const card14 = document.querySelector(`.kartu img:nth-child(14)`);
const card15 = document.querySelector(`.kartu img:nth-child(15)`);
const card16 = document.querySelector(`.kartu img:nth-child(16)`);
const card17 = document.querySelector(`.kartu img:nth-child(17)`);
const card18 = document.querySelector(`.kartu img:nth-child(18)`);
const card19 = document.querySelector(`.kartu img:nth-child(19)`);
const card20 = document.querySelector(`.kartu img:nth-child(20)`);
const card21 = document.querySelector(`.kartu img:nth-child(21)`);
const card22 = document.querySelector(`.kartu img:nth-child(22)`);
const card23 = document.querySelector(`.kartu img:nth-child(23)`);
const card24 = document.querySelector(`.kartu img:nth-child(24)`);
const card25 = document.querySelector(`.kartu img:nth-child(25)`);
const card26 = document.querySelector(`.kartu img:nth-child(26)`);
const card27 = document.querySelector(`.kartu img:nth-child(27)`);
const card28 = document.querySelector(`.kartu img:nth-child(28)`);
const card29 = document.querySelector(`.kartu img:nth-child(29)`);
const card30 = document.querySelector(`.kartu img:nth-child(30)`);
const card31 = document.querySelector(`.kartu img:nth-child(31)`);
const card32 = document.querySelector(`.kartu img:nth-child(32)`);
const card33 = document.querySelector(`.kartu img:nth-child(33)`);
const card34 = document.querySelector(`.kartu img:nth-child(34)`);
const card35 = document.querySelector(`.kartu img:nth-child(35)`);
const card36 = document.querySelector(`.kartu img:nth-child(36)`);
const card37 = document.querySelector(`.kartu img:nth-child(37)`);
const card38 = document.querySelector(`.kartu img:nth-child(38)`);
const card39 = document.querySelector(`.kartu img:nth-child(39)`);
const card40 = document.querySelector(`.kartu img:nth-child(40)`);
const card41 = document.querySelector(`.kartu img:nth-child(41)`);
const card42 = document.querySelector(`.kartu img:nth-child(42)`);
const card43 = document.querySelector(`.kartu img:nth-child(43)`);
const card44 = document.querySelector(`.kartu img:nth-child(44)`);
const card45 = document.querySelector(`.kartu img:nth-child(45)`);
const card46 = document.querySelector(`.kartu img:nth-child(46)`);
const card47 = document.querySelector(`.kartu img:nth-child(47)`);
const card48 = document.querySelector(`.kartu img:nth-child(48)`);
const card49 = document.querySelector(`.kartu img:nth-child(49)`);
const card50 = document.querySelector(`.kartu img:nth-child(50)`);
const card51 = document.querySelector(`.kartu img:nth-child(51)`);
const card52 = document.querySelector(`.kartu img:nth-child(52)`);
/////////////////////////////////////////////////////////////////

function takecard() {
	audio3.play();

	var orang = Math.random() * 52;
	var al = tempatkartu.length;
	var total = 0;

	if (al < 5) {
		if (orang < 1 && orang > 0) {
			tempatkartu.push(card1);
			sum.push(2);
		} else if (orang > 1 && orang < 2) {
			tempatkartu.push(card2);
			sum.push(3);
		} else if (orang > 2 && orang < 3) {
			tempatkartu.push(card3);
			sum.push(4);
		} else if (orang > 3 && orang < 4) {
			tempatkartu.push(card4);
			sum.push(5);
		} else if (orang > 4 && orang < 5) {
			tempatkartu.push(card5);
			sum.push(6);
		} else if (orang > 5 && orang < 6) {
			tempatkartu.push(card6);
			sum.push(7);
		} else if (orang > 6 && orang < 7) {
			tempatkartu.push(card7);
			sum.push(8);
		} else if (orang > 7 && orang < 8) {
			tempatkartu.push(card8);
			sum.push(9);
		} else if (orang > 8 && orang < 9) {
			tempatkartu.push(card9);
			sum.push(10);
		} else if (orang > 9 && orang < 10) {
			tempatkartu.push(card10);
			sum.push(10);
		} else if (orang > 10 && orang < 11) {
			tempatkartu.push(card11);
			sum.push(10);
		} else if (orang > 11 && orang < 12) {
			tempatkartu.push(card12);
			sum.push(10);
		} else if (orang > 12 && orang < 13) {
			tempatkartu.push(card13);
			sum.push(11);

			/////////////////////////////////////////
		} else if (orang > 13 && orang < 14) {
			tempatkartu.push(card14);
			sum.push(2);
		} else if (orang > 14 && orang < 15) {
			tempatkartu.push(card15);
			sum.push(3);
		} else if (orang > 15 && orang < 16) {
			tempatkartu.push(card16);
			sum.push(4);
		} else if (orang > 16 && orang < 17) {
			tempatkartu.push(card17);
			sum.push(5);
		} else if (orang > 17 && orang < 18) {
			tempatkartu.push(card18);
			sum.push(6);
		} else if (orang > 18 && orang < 19) {
			tempatkartu.push(card19);
			sum.push(7);
		} else if (orang > 19 && orang < 20) {
			tempatkartu.push(card20);
			sum.push(8);
		} else if (orang > 20 && orang < 21) {
			tempatkartu.push(card21);
			sum.push(9);
		} else if (orang > 21 && orang < 22) {
			tempatkartu.push(card22);
			sum.push(10);
		} else if (orang > 22 && orang < 23) {
			tempatkartu.push(card23);
			sum.push(10);
		} else if (orang > 23 && orang < 24) {
			tempatkartu.push(card24);
			sum.push(10);
		} else if (orang > 24 && orang < 25) {
			tempatkartu.push(card25);
			sum.push(10);
		} else if (orang > 25 && orang < 26) {
			tempatkartu.push(card26);
			sum.push(11);
			/////
		} else if (orang > 26 && orang < 27) {
			tempatkartu.push(card27);
			sum.push(2);
		} else if (orang > 27 && orang < 28) {
			tempatkartu.push(card28);
			sum.push(3);
		} else if (orang > 28 && orang < 29) {
			tempatkartu.push(card29);
			sum.push(4);
		} else if (orang > 29 && orang < 30) {
			tempatkartu.push(card30);
			sum.push(5);
		} else if (orang > 30 && orang < 31) {
			tempatkartu.push(card31);
			sum.push(6);
		} else if (orang > 31 && orang < 32) {
			tempatkartu.push(card32);
			sum.push(7);
		} else if (orang > 32 && orang < 33) {
			tempatkartu.push(card33);
			sum.push(8);
		} else if (orang > 33 && orang < 34) {
			tempatkartu.push(card34);
			sum.push(9);
		} else if (orang > 34 && orang < 35) {
			tempatkartu.push(card35);
			sum.push(10);
		} else if (orang > 35 && orang < 36) {
			tempatkartu.push(card36);
			sum.push(10);
		} else if (orang > 36 && orang < 37) {
			tempatkartu.push(card37);
			sum.push(10);
		} else if (orang > 37 && orang < 38) {
			tempatkartu.push(card38);
			sum.push(10);
		} else if (orang > 38 && orang < 39) {
			tempatkartu.push(card39);
			sum.push(11);
			//////////////////////////
		} else if (orang > 39 && orang < 40) {
			tempatkartu.push(card40);
			sum.push(2);
		} else if (orang > 40 && orang < 41) {
			tempatkartu.push(card41);
			sum.push(3);
		} else if (orang > 41 && orang < 42) {
			tempatkartu.push(card42);
			sum.push(4);
		} else if (orang > 42 && orang < 43) {
			tempatkartu.push(card43);
			sum.push(5);
		} else if (orang > 43 && orang < 44) {
			tempatkartu.push(card44);
			sum.push(6);
		} else if (orang > 44 && orang < 45) {
			tempatkartu.push(card45);
			sum.push(7);
		} else if (orang > 45 && orang < 46) {
			tempatkartu.push(card46);
			sum.push(8);
		} else if (orang > 46 && orang < 47) {
			tempatkartu.push(card47);
			sum.push(9);
		} else if (orang > 47 && orang < 48) {
			tempatkartu.push(card48);
			sum.push(10);
		} else if (orang > 48 && orang < 49) {
			tempatkartu.push(card49);
			sum.push(10);
			/////
		} else if (orang > 49 && orang < 50) {
			tempatkartu.push(card50);
			sum.push(10);
		} else if (orang > 50 && orang < 51) {
			tempatkartu.push(card51);
			sum.push(10);
		} else if (orang > 51 && orang < 52) {
			tempatkartu.push(card52);
			sum.push(11);
		}

		// looping untuk mengeser kartu
		for (var i = 0; i < sum.length; i++) {
			total += sum[i];
		}

		tempatkartu[2].style.transform =
			"rotatex(0deg) scale(1.6) scaley(1.2) rotate(-7deg) translatex(32em) translateY(18em)";
		bet2222.innerHTML = total;
		if (total > 21) {
			setTimeout(function () {
				if (uangkita > 0) {
					document.getElementById("audiokalah22").play();
					ketikakalah.style.display = `flex`;
					tempatkartu[0].style.transform =
						"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
					tempatkartu[1].style.transform =
						"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
					tempatkartu[2].style.transform =
						"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
					tempatkartu[3].style.transform =
						"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
					tempatkartu[4].style.transform =
						"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
				} else {
					document.getElementById("audiomati").play();
					ketikaUanghabis.style.display = `flex`;
				}
			}, 2000);
		}

		tempatkartu[3].style.transform =
			"rotatex(0deg) scale(1.6) scaley(1.2) rotate(-7deg) translatex(42em) translateY(18em)";
		bet2222.innerHTML = total;
		if (total > 21) {
			setTimeout(function () {
				if (uangkita > 0) {
					document.getElementById("audiokalah22").play();
					ketikakalah.style.display = `flex`;
					tempatkartu[0].style.transform =
						"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
					tempatkartu[1].style.transform =
						"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
					tempatkartu[2].style.transform =
						"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
					tempatkartu[3].style.transform =
						"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
					tempatkartu[4].style.transform =
						"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
				} else {
					document.getElementById("audiomati").play();
					ketikaUanghabis.style.display = `flex`;
				}
			}, 2000);
		}
		tempatkartu[4].style.transform =
			"rotatex(0deg) scale(1.6) scaley(1.2) rotate(-7deg) translatex(52em) translateY(18em)";
		bet2222.innerHTML = total;
		if (total > 21) {
			setTimeout(function () {
				if (uangkita > 0) {
					document.getElementById("audiokalah22").play();
					ketikakalah.style.display = `flex`;
					tempatkartu[0].style.transform =
						"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
					tempatkartu[1].style.transform =
						"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
					tempatkartu[2].style.transform =
						"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
					tempatkartu[3].style.transform =
						"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
					tempatkartu[4].style.transform =
						"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
				} else {
					document.getElementById("audiomati").play();
					ketikaUanghabis.style.display = `flex`;
				}
			}, 2000);
		}

		return total;
	}
}
///proses 2 kartu awal

// var total = 0;

function stay2() {
	audio3.play();
	if (total == 21) {
		ketikamenang.style.display = `flex`;
		tempatkartu[0].style.transform =
			"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
		tempatkartu[1].style.transform =
			"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
		tempatkartu[2].style.transform =
			"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
		tempatkartu[3].style.transform =
			"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
		tempatkartu[4].style.transform =
			"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
	} else if (total > 21 || total < 21) {
		if (uangkita > 0) {
			document.getElementById("audiokalah22").play();
			ketikakalah.style.display = `flex`;
			tempatkartu[0].style.transform =
				"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
			tempatkartu[1].style.transform =
				"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
			tempatkartu[2].style.transform =
				"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
			tempatkartu[3].style.transform =
				"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
			tempatkartu[4].style.transform =
				"rotatex(80deg) scale(0.5) scaley(1.2) rotate(10deg) translatex(0) translateY(0)";
		} else {
			ketikaUanghabis.style.display = `flex`;
			document.getElementById("audiomati").play();
		}
	}
}

take.onclick = takecard;
const stay = document.querySelector("#stay");
stay.onclick = stay2;
setTimeout(stay2, 800000);
// const playagain = document.getElementById("playagain");
// playagain.onclick = playagain2;
const form2 = document.querySelector("form");
// tombol play again ketika kalah
document.getElementById("playagain").onclick = function playagain2() {
	audio3.play();
	uangku = uangkita;
	sum.splice(0);
	total = 0;
	bet2222.innerHTML = total;
	form2.reset();
	ketikakalah.style.display = `none`;
	bagian3.style.display = ``;
	tempatkartu.splice(0);
	document.getElementById("audiokalah22").pause();
};
// tombol play again ketika menang
document.getElementById("playagain111").onclick = function playagain1111() {
	audio3.play();
	var inputValue2 = document.getElementById("bet").value;
	uangku = uangkita + inputValue2 * 5;
	sum.splice(0);
	total = 0;
	bet2222.innerHTML = total;
	form2.reset();
	ketikamenang.style.display = `none`;
	bagian3.style.display = ``;
	tempatkartu.splice(0);
};
// tombol restart game  ketika kalah dan uang tinggal o
document.getElementById("playagain222").onclick = function playagain2222() {
	audio3.play();
	window.location.reload(true);
};
