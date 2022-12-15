@extends('layouts.main')

@section('container')

    <div class="mt-3 text-center">
        <h3>
            Learning Management System
        </h3>
        <p class="mt-3 text-light bg-secondary rounded p-3">
            Website LMS ini harusnya dapat digunakan untuk mahasiswa dan dosen dalam proses pembelajaran.
            Website ini dapat dikelola oleh admin. Admin dapat menambah dan menghapus mahasiswa, dosen, dan matakuliah.
            Dosen dapat membuat kelas, memberikan tugas, harusnya memeriksa tugas dan mengabsen mahasiswa.
            Dalam website website ini mahasiswa dapat melihat kelas yang telah didaftar, melihat tugas yang diberikan,
            dan harusnya dapat mendaftarkan diri ke kelas, dapat melakukan absensi. Dosen dan mahasiswa harusnya dapat
            mengubah profil masing-masing.
        </p>

        <b>
            *Catatan
        </b>
        <p>
            Tambah tugas sudah bisa, tapi akan error. Untuk edit, dan hapusnya sudah saya buat codenya
            tapi tidak berhasil karena error (Route pattern  cannot reference variable name "kelas" more than once).
            Saya sudah coba juga membuat fitur daftar kelas, tapi tidak berhasil karena error yang sama, saya juga mencoba buat
            edit profile tapi tidak bisa karena error yang sama. Saya tidak menemukan permasalahan dari erronya.
        </p>

        <b>Terima Kasih Banyak Kak :)</b>
    </div>
    
@endsection
