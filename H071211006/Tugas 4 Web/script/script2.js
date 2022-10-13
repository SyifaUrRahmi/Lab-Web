let hasil = 0;
let a = prompt("Mau lihat perkalian berapa?");
if (isNaN(a)) {
	console.log("Input bukan angka");
} else if (a == " " || !a) {
	console.log("Masukkan Angka");
} else {
	let b = prompt("Ingin dikalikan sampai berapa?");
	if (isNaN(b)) {
		console.log("Input bukan angka");
	} else if (b == " " || !b) {
		console.log("Masukkan Angka");
	} else {
		for (let i = 1; i <= b; i++) {
			const result = i * a;
			hasil += result;
			console.log(i + " x " + a + " = " + result);
		}
		console.log("Hasil seluruh perkalian : " + hasil);
	}
}
