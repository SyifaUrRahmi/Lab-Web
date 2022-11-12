 const nama = prompt("Masukkan Nama Anda");
    if (nama ? (nama.trim().length == 0 ? null : nama) : null) {
      const tuprak = prompt("apakah sudah mengumpulkan Tugas Praktikum? YES atau NO");
      if (tuprak === "YES" || tuprak === "yes") {
        const asistensi = prompt("apakah sudah mengikuti asistensi? YES atau NO");
        if (asistensi === "YES" || asistensi === "yes") {
        const brpasistensi = prompt("Sudah berapa kali asistensi? 1 atau 2");
        if (brpasistensi == 2) {
          alert("Wahhh anda sangat gg " + nama + " ! ! !"); 
        } else if (brpasistensi == 1){
          alert("Asistensi sekali lagi ya " + nama);
        } else {
          alert("Input hanya 1 atau 2")
        }
      } else if (asistensi === "NO" || asistensi === "no"){
        alert("Asistensi dulu ya " + nama);
      } 
    } else if (tuprak === "NO" || tuprak === "no") {
      alert("Jangan lupa dikerja tugas praktikumnya " + nama);
    } else {
      alert("Masukkan inputan yang benar yaitu Yes atau No");
    }
    } else {
      alert("Masukkan nama anda terlebih dahulu!")
    }
  