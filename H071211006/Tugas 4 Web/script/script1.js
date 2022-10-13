let nama = prompt("Masukkan nama kamu").toLowerCase().trim();

if (nama == " " || !nama) {
	console.log("Masukan nama terlebih dahulu!");
} else {
	let pesan = prompt("Apakah kamu sudah memesan? (sudah/belum)").toLowerCase();

	if (pesan == "belum") {
		console.log("Silahkan memesan terlebih dahulu!, ayo cek menunya " + nama);
	} else if (pesan == "sudah") {
		let disini = prompt("Mau makan di sini? (yes/no)").toLowerCase();
		if (disini == "yes") {
			let bayar = prompt(
				"Apakah " + nama + " sudah membayar? (sudah/belum)"
			).toLowerCase();
			if (bayar == "belum") {
				console.log("Bayar dulu yh " + nama);
			} else if (bayar == "sudah") {
				console.log("Oke " + nama + " pesanan kamu akan segera diproses");
			} else {
				console.log("Masukkan input yang benar, yaitu sudah atau belum");
			}
		} else if (disini == "no") {
			let pulang = prompt("Mau dibawa pulang? (yes/no)").toLowerCase();
			if (pulang == "yes") {
				let bayar = prompt(
					"Apakah " + nama + " sudah membayar? (sudah/belum)"
				).toLowerCase();
				if (bayar == "belum") {
					console.log("Bayar dulu yh " + nama);
				} else if (bayar == "sudah") {
					console.log("Oke " + nama + " pesanan kamu akan segera diproses");
				} else {
					console.log("Masukkan input yang benar, sudah atau belum");
				}
			} else if (pulang == "no") {
				let bayar = prompt(
					"Oke berarti makan di sini ya, apakah " +
						nama +
						" sudah membayar? (sudah/belum)"
				);
				if (bayar == "belum") {
					console.log("Bayar dulu yh " + nama);
				} else if (bayar == "sudah") {
					console.log("Oke " + nama + " pesanan kamu akan segera diproses");
				} else {
					console.log("Masukkan input yang benar, sudah atau belum");
				}
			} else {
				console.log("Masukkan input yang benar, yaitu yes atau no");
			}
		} else {
			console.log("Masukkan input yang benar, yaitu yes atau no");
		}
	} else {
		console.log("Masukkan input yang benar, sudah atau belum");
	}
}
