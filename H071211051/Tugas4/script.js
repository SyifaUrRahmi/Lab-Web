// no 1
function myFunction() {
	let text;
	let person = prompt("Masukkan Nama Anda");
	if (person == null || person == "") {
		text = "Masukkan nama anda terlebih dahulu";
	} else if (/\d/.test(person)) {
		text = "Jangan masukkan angka";
	} else {
		let choice = prompt(
			"Sudah mengumpulkan tugas praktikum? YES or NO"
		).toLowerCase();
		if (choice == "yes") {
			let choice = prompt("Ikut asistensi? YES or NO").toLowerCase();
			if (choice == "yes") {
				let choice2 = prompt("Sudah berapa kali asistensi? 1 atau 2");
				if (choice2 == "1") {
					text = "Asistensi sekali lagi ya " + person;
				} else if (choice2 == "2") {
					text = "Hebat kamu " + person + " :)";
				} else {
					text = "Masukkan inputan yang benar yaitu YES or NO";
				}
			} else if (choice == "no") {
				text = "Asistensi dulu ya " + person;
			} else {
				text = "Masukkan inputan yang benar yaitu YES or NO";
			}
		} else if (choice == "no") {
			text = "Jangan lupa dikerja tugas praktikumnya " + person;
		} else {
			text = "Masukkan input yang benar yaitu YES or NO";
		}
	}
	document.getElementById("demo").innerHTML = text;
}

// no 2
function multipleFunction() {
	let total = 0;
	let text;
	let multiple = prompt("Perkalian berapa?");
	if ((multiple == null) | (multiple == "") || isNaN(multiple)) {
		text = "Masukkan inputan yang benar";
		document.getElementById("demo").innerHTML = text;
	} else {
		let times = prompt("Ingin dikalikan sampai berapa?");
		if (times == null || times == "") {
			text = "Masukkan inputan yang benar";
		} else {
			for (let i = 1; i <= times; i++) {
				const result = i * multiple;
				total += result;
				document.write("<p>" + i + " x " + multiple + " = " + result + "</p>");
			}
			document.write("Hasil seluruh perkalian :  " + total);
		}

		document.getElementById("demo").innerHTML = text;
	}
}

// no 3
function countChar() {
	let text;
	let input = prompt("Masukkan Kalimat...");
	let map = {};

	for (let i = 0; i < input.length; i++) {
		let index = input[i] === " " ? "space" : input[i];
		if (map[index]) {
			map[index] += 1;
		} else {
			map[index] = 1;
		}
	}
	for (const i in map) {
		document.write("<p>" + i + " = " + map[i] + "</p>");
	}
	document.getElementById("demo").innerHTML = text;
}
