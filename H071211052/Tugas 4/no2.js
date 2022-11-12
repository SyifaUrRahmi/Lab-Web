
  let angka = prompt("Perkalian berapa?");
  let perkalian = prompt("Ingin dikalikan sampai berapa?");
  let hasil;
  let hasil_perkalian = 0;

  if (isNaN(angka)) {
      console.log("Input bukan angka!")
  } else {
      for (i = 1; i <= perkalian; i++){
          hasil = angka * i;
          hasil_perkalian += hasil;
          console.log(i + " x " + angka + " = " + hasil);
      }
          console.log("Hasil seluruh perkalian = " + hasil_perkalian);
  }
