<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Absen;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\MatakuliahDosen;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\KelasDosen;
use App\Models\Kelas;
use App\Models\KelasMahasiswa;
use App\Models\Matakuliah;
use App\Models\TahunAjaran;
use App\Models\Tugas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Dosen::factory(5)->create();
        // User::factory(5)->create();

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming',
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);

        // Category::create([
        //     'name' => 'Design',
        //     'slug' => 'design',
        // ]);

        // Category::create([
        //     'name' => 'Device',
        //     'slug' => 'device',
        // ]);

        // Post::factory(20)->create();

        // Post::create([
        //     'title' => 'First title',
        //     'slug' => 'first-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et earum, delectus illo unde',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, reiciendis ab! Non odio laudantium facere id, delectus minus error veritatis possimus ipsum, rerum doloremque labore corporis reiciendis modi nulla autem, expedita itaque quam tempore quo culpa dolores minima accusantium nisi? Quo quia doloribus a soluta consequuntur similique minus aperiam dolore molestiae, ipsa aliquid eos earum error, laborum deleniti quas aut est totam. Ducimus est explicabo, nobis soluta obcaecati aspernatur id dignissimos, blanditiis natus rerum optio. Incidunt, enim aspernatur aliquam maiores laborum ipsum deleniti exercitationem quia quae, saepe, dolores dolore. Ipsam error, dolorum eveniet quasi delectus vitae quidem veritatis maxime facere?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Second title',
        //     'slug' => 'second-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et earum, delectus illo unde',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, reiciendis ab! Non odio laudantium facere id, delectus minus error veritatis possimus ipsum, rerum doloremque labore corporis reiciendis modi nulla autem, expedita itaque quam tempore quo culpa dolores minima accusantium nisi? Quo quia doloribus a soluta consequuntur similique minus aperiam dolore molestiae, ipsa aliquid eos earum error, laborum deleniti quas aut est totam. Ducimus est explicabo, nobis soluta obcaecati aspernatur id dignissimos, blanditiis natus rerum optio. Incidunt, enim aspernatur aliquam maiores laborum ipsum deleniti exercitationem quia quae, saepe, dolores dolore. Ipsam error, dolorum eveniet quasi delectus vitae quidem veritatis maxime facere?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Third title',
        //     'slug' => 'third-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et earum, delectus illo unde',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, reiciendis ab! Non odio laudantium facere id, delectus minus error veritatis possimus ipsum, rerum doloremque labore corporis reiciendis modi nulla autem, expedita itaque quam tempore quo culpa dolores minima accusantium nisi? Quo quia doloribus a soluta consequuntur similique minus aperiam dolore molestiae, ipsa aliquid eos earum error, laborum deleniti quas aut est totam. Ducimus est explicabo, nobis soluta obcaecati aspernatur id dignissimos, blanditiis natus rerum optio. Incidunt, enim aspernatur aliquam maiores laborum ipsum deleniti exercitationem quia quae, saepe, dolores dolore. Ipsam error, dolorum eveniet quasi delectus vitae quidem veritatis maxime facere?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Fourth title',
        //     'slug' => 'fourth-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et earum, delectus illo unde',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, reiciendis ab! Non odio laudantium facere id, delectus minus error veritatis possimus ipsum, rerum doloremque labore corporis reiciendis modi nulla autem, expedita itaque quam tempore quo culpa dolores minima accusantium nisi? Quo quia doloribus a soluta consequuntur similique minus aperiam dolore molestiae, ipsa aliquid eos earum error, laborum deleniti quas aut est totam. Ducimus est explicabo, nobis soluta obcaecati aspernatur id dignissimos, blanditiis natus rerum optio. Incidunt, enim aspernatur aliquam maiores laborum ipsum deleniti exercitationem quia quae, saepe, dolores dolore. Ipsam error, dolorum eveniet quasi delectus vitae quidem veritatis maxime facere?</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        User::create([
            'username' => 'Syifa',
            'password' => bcrypt('12345'),
            'is_admin' => '1'
        ]);

        User::create([
            'username' => '199101042014032014',
            'password' => bcrypt('12345'),
            'is_dosen' => '1'
        ]);

        User::create([
            'username' => '199001042014032014',
            'password' => bcrypt('12345'),
            'is_dosen' => '1'
        ]);

        User::create([
            'username' => '198701042014032014',
            'password' => bcrypt('12345'),
            'is_dosen' => '1'
        ]);

        User::create([
            'username' => '198001042014032014',
            'password' => bcrypt('12345'),
            'is_dosen' => '1'
        ]);

        User::create([
            'username' => '200301042014032022',
            'password' => bcrypt('12345'),
            'is_dosen' => '1'
        ]);

        User::create([
            'username' => 'H071211001',
            'password' => bcrypt('12345'),
            'is_mahasiswa' => '1'
        ]);

        User::create([
            'username' => 'H071201002',
            'password' => bcrypt('12345'),
            'is_mahasiswa' => '1'
        ]);

        User::create([
            'username' => 'H071211003',
            'password' => bcrypt('12345'),
            'is_mahasiswa' => '1'
        ]);
        
        User::create([
            'username' => 'H071211004',
            'password' => bcrypt('12345'),
            'is_mahasiswa' => '1'
        ]);

        User::create([
            'username' => 'H071211005',
            'password' => bcrypt('12345'),
            'is_mahasiswa' => '1'
        ]);

        User::create([
            'username' => 'H071201006',
            'password' => bcrypt('12345'),
            'is_mahasiswa' => '1'
        ]);

        User::create([
            'username' => 'H071211007',
            'password' => bcrypt('12345'),
            'is_mahasiswa' => '1'
        ]);

        User::create([
            'username' => 'H071211008',
            'password' => bcrypt('12345'),
            'is_mahasiswa' => '1'
        ]);

        Dosen::create([
            'nama_dosen' => 'Supriadi' ,
            'nip' => '199101042014032014',
            'alamat' => '-',
            'no_telp' => '-',
            'user_id' => '2'
        ]);

        Dosen::create([
            'nama_dosen' => 'Vikyani' ,
            'nip' => '199001042014032014',
            'alamat' => '-',
            'no_telp' => '-',
            'user_id' => '3'
        ]);

        Dosen::create([
            'nama_dosen' => 'Marnasiah' ,
            'nip' => '198701042014032014',
            'alamat' => '-',
            'no_telp' => '-',
            'user_id' => '4'
        ]);

        Dosen::create([
            'nama_dosen' => 'Kasmawati' ,
            'nip' => '198001042014032014',
            'alamat' => '-',
            'no_telp' => '-',
            'user_id' => '5'
        ]);

        Dosen::create([
            'nama_dosen' => 'Aisyah Az-zikra' ,
            'nip' => '200301042014032022',
            'alamat' => '-',
            'no_telp' => '-',
            'user_id' => '6'
        ]);

        Mahasiswa::create([
            'nama' => 'Syifa Ur Rahmi',
            'nim' => 'H071211001',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => '-',
            'angkatan' => '2021',
            'user_id' => '7'
        ]);

        Mahasiswa::create([
            'nama' => 'Zakiah Fitri',
            'nim' => 'H071201002',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => '-',
            'angkatan' => '2020',
            'user_id' => '8'
        ]);

        Mahasiswa::create([
            'nama' => 'Dzul Fadli',
            'nim' => 'H071211003',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => '-',
            'angkatan' => '2021',
            'user_id' => '9'
        ]);

        Mahasiswa::create([
            'nama' => 'Marlina',
            'nim' => 'H071211004',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => '-',
            'angkatan' => '2021',
            'user_id' => '10'
        ]);

        Mahasiswa::create([
            'nama' => 'Syaikul Rajab',
            'nim' => 'H071211005',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => '-',
            'angkatan' => '2021',
            'user_id' => '11'
        ]);

        Mahasiswa::create([
            'nama' => 'Aifa anugerah',
            'nim' => 'H071201006',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => '-',
            'angkatan' => '2020',
            'user_id' => '12'
        ]);

        Mahasiswa::create([
            'nama' => 'Ayusnawati',
            'nim' => 'H071211007',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => '-',
            'angkatan' => '2021',
            'user_id' => '13'
        ]);

        Mahasiswa::create([
            'nama' => 'Alfian',
            'nim' => 'H071211008',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => '-',
            'angkatan' => '2021',
            'user_id' => '14'
        ]);

        TahunAjaran::create([
            'tahunajaran' => '2021/2022'
        ]);

        Matakuliah::create([
            'nama_matakuliah' => 'Pemrograman Web',
            'deskripsi_matakuliah' => 'none',
            'tahunajaran_id' => '1'
        ]);

        Matakuliah::create([
            'nama_matakuliah' => 'Sistem Basis Data',
            'deskripsi_matakuliah' => 'none',
            'tahunajaran_id' => '1'
        ]);

        Matakuliah::create([
            'nama_matakuliah' => 'Struktur Data',
            'deskripsi_matakuliah' => 'none',
            'tahunajaran_id' => '1'
        ]);

        Kelas::create([
            'nama_kelas' => 'Pemrograman Web B',
            'deskripsi_kelas' => 'none',
            'matakuliah_id' => '1'
        ]);

        Kelas::create([
            'nama_kelas' => 'Pemrograman Web A',
            'deskripsi_kelas' => 'none',
            'matakuliah_id' => '1'
        ]);

        Kelas::create([
            'nama_kelas' => 'Struktur Data A',
            'deskripsi_kelas' => 'none',
            'matakuliah_id' => '3'
        ]);

        Kelas::create([
            'nama_kelas' => 'Sistem Basis Data B',
            'deskripsi_kelas' => 'none',
            'matakuliah_id' => '2'
        ]);

        Kelas::create([
            'nama_kelas' => 'Sistem Basis Data A',
            'deskripsi_kelas' => 'none',
            'matakuliah_id' => '2'
        ]);

        MatakuliahDosen::create([
            'matakuliah_id' => '1',
            'dosen_id' => '1'
        ]);

        MatakuliahDosen::create([
            'matakuliah_id' => '1',
            'dosen_id' => '2'
        ]);

        MatakuliahDosen::create([
            'matakuliah_id' => '1',
            'dosen_id' => '4'
        ]);

        MatakuliahDosen::create([
            'matakuliah_id' => '2',
            'dosen_id' => '1'
        ]);

        MatakuliahDosen::create([
            'matakuliah_id' => '2',
            'dosen_id' => '5'
        ]);

        MatakuliahDosen::create([
            'matakuliah_id' => '3',
            'dosen_id' => '3'
        ]);

        KelasDosen::create([
            'kelas_id' => '1',
            'dosen_id' => '1'
        ]);

        KelasDosen::create([
            'kelas_id' => '1',
            'dosen_id' => '2'
        ]);

        KelasDosen::create([
            'kelas_id' => '2',
            'dosen_id' => '4'
        ]);

        KelasDosen::create([
            'kelas_id' => '3',
            'dosen_id' => '3'
        ]);

        KelasDosen::create([
            'kelas_id' => '4',
            'dosen_id' => '1'
        ]);

        KelasDosen::create([
            'kelas_id' => '5',
            'dosen_id' => '5'
        ]);

        KelasMahasiswa::create([
            'kelas_id' => '1',
            'mahasiswa_id' => '1'
        ]);
        KelasMahasiswa::create([
            'kelas_id' => '4',
            'mahasiswa_id' => '1'
        ]);
        KelasMahasiswa::create([
            'kelas_id' => '1',
            'mahasiswa_id' => '3'
        ]);
        KelasMahasiswa::create([
            'kelas_id' => '4',
            'mahasiswa_id' => '3'
        ]);
        KelasMahasiswa::create([
            'kelas_id' => '1',
            'mahasiswa_id' => '4'
        ]);
        KelasMahasiswa::create([
            'kelas_id' => '4',
            'mahasiswa_id' => '4'
        ]);
        KelasMahasiswa::create([
            'kelas_id' => '3',
            'mahasiswa_id' => '2'
        ]);
        KelasMahasiswa::create([
            'kelas_id' => '3',
            'mahasiswa_id' => '6'
        ]);
        KelasMahasiswa::create([
            'kelas_id' => '2',
            'mahasiswa_id' => '5'
        ]);
        KelasMahasiswa::create([
            'kelas_id' => '2',
            'mahasiswa_id' => '7'
        ]);
        KelasMahasiswa::create([
            'kelas_id' => '2',
            'mahasiswa_id' => '8'
        ]);
        KelasMahasiswa::create([
            'kelas_id' => '5',
            'mahasiswa_id' => '5'
        ]);
        KelasMahasiswa::create([
            'kelas_id' => '5',
            'mahasiswa_id' => '7'
        ]);
        KelasMahasiswa::create([
            'kelas_id' => '5',
            'mahasiswa_id' => '8'
        ]);

        Tugas::create([
            'kelas_id' => '1',
            'dosen_id' => '1',
            'nama_tugas' => 'Tugas makalah individu',
            'deskripsi_tugas' => 'Buatlah makalah dengan materi html'
        ]);

        Absen::create([
            'kelas_id' => '1'
        ]);

        Absen::create([
            'kelas_id' => '2'
        ]);

        Absen::create([
            'kelas_id' => '3'
        ]);

        Absen::create([
            'kelas_id' => '4'
        ]);

        Absen::create([
            'kelas_id' => '5'
        ]);
    }
}
