<?php

namespace Database\Seeders;

use App\Models\Like;
use App\Models\Post;
use App\Models\Rekomendasi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // post 1
        
        $post = Post::create([
            'id_kategori' => '1',
            'id_user' => 1,
            'sampul' => '1670732866-30 makanan tradisional Indo.jpg',
            'judul' => '9 Nama Makanan Asli Indonesia Ini Aneh Banget, Tapi Enak Lho!',
            'konten' => '<p>Masakan-masakan Indonesia telah dikenal hingga di seluruh penjuru dunia. Beberapa d antaranya bahkan diakui sebagai makanan terenak di dunia. Seperti sate, nasi goreng, nasi Padang, dan sebagainya.</p>

            <p>Kekayaan makanan khas Indonesia tak ada habisnya. Bahkan, ada beragam masakan yang diberi nama aneh dan nyeleneh. Apa saja ya?</p>
            
            <br><p><b>1. Nasi Kentut</b></p>
            
            <p>Nasi kentut merupakan makanan khas Medan yang dimasak dengan daun kentut (paederia scandens) atau biasa dikenal orang Jawa dengan nama daun kesembukan. Meskipun daun ini berbau tidak sedap seperti kentut manusia, tetapi daun ini banyak khasiatnya lho.</p>
            
            <p>Di antaranya mengobati sariawan, mengatasi perut kembung, mengobati mata dan radang telinga. Biasanya nasi ini disajikan dengan ikan pepes, ayam gulung, tahu dan tempe sesuai selera. Sudah pernah coba?</p>
            
            <br><p><b>2. Kerupuk Melarat</b></p>
            
            <p>Makanan khas Cirebon ini biasa disajikan dengan sambal asam. Kerupuk ini disebut melarat karena tidak digoreng dengan minyak, tetapi dimasak dengan pasir yang telah dibersihkan terlebih dahulu.</p>
            
            <p>Kerupuk ini tersedia dalam beraneka ragam warna yang menarik, yaitu hijau, putih, kuning, dan merah muda. Kamu paling suka warna apa?</p>
            
            <br><p><b>3. Kue Onde-onde Ketawa</b></p>
            
            <p>Kue ini pertama kali dibuat pada masa dinasti Zhou untuk para tukang kayu dan tukang batu yang membangun istana kekaisaran. Kue ini melambangkan keselamatan dan kebersamaan. Mungkin saking enaknya bikin kita jadi ketawa saat menyantapnya. Hehehe...</p>
            
            <br><p><b>4. Ketela Bajingan</b></p>
            
            <p>Makanan ini berupa ketela yang dimasak dengan gula Jawa dan santan, lalu disajikan dengan kuah manis yang kental. Karena disajikan utuh tanpa dipotong terlebih dahulu, makanan ini terlihat mirip dengan bajing rebus sehingga disebut ketela bajingan.</p>
            
            <br><p><b>5. Kue Dollar</b></p>
            <p>Kue ini berbentuk bulat pipih mirip koin dan rasanya mirip kue semprong. Dulu hanya ada rasa gula palem, tetapi sekarang sudah memiliki berbagai varian rasa. Seperti rasa jahe, wijen, dan keju.</p>
            
            <br><p><b>6. Kuku Macan</b></p>
            <p>Kuku macan merupakan kerupuk ikan tengiri, salah satu camilan khas Balikpapan. Bentuknya mirip dengan kuku jari yang runcing. Karena ukuranya agak besar, sehingga disebut kuku macan.</p>
            
            <br><p><b>7. Kue Cubit</b></p>
            <p>Kue berukuran sekitar 4 sentimeter ini populer di Jakarta. Ketika matang, kue ini biasa diangkat dengan capit makanan, seperti dicubit. Sekilas mirip kue lumpur tetapi lebih banyak taburan topping di atasnya.</p>
            
            <br><p><b>8. Sate kere</b></p>
            <p>Kudapan salah satu makanan khas Solo. Kere dalam bahasa Jawa artinya melarat atau miskin. Sate ini terbuat dari tempe gambus, yaitu tempe yang terbuat dari ampas tahu dan tetap dilengkapi bumbu kacang seperti sate pada umumnya.</p>
            
            <br><p><b>9. Endog Bulus (Telur Kura-kura)</b></p>
            <p>Endog bulus mirip kue Nopia yang sempat dipopulerkan etnis Tionghoa di Banyumas. Kue ini sendiri berasal dari Magelang dan ukurannya sebesar telur kura-kura. Kulitnya agak keras dan terdapat gula merah yang manis di dalamnya.</p>',
            'slug' => Str::slug('9 Nama Makanan Asli Indonesia Ini Aneh Banget, Tapi Enak Lho!')
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 1
        ]);
      
        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 3
        ]);

        Rekomendasi::create([
            'id_post' => $post->id
        ]);
       
        // post 2

        $post = Post::create([
            'id_kategori' => '2',
            'id_user' => 2,
            'sampul' => '1671034753-ayam-palekko-foto-resep-utama.jpg',
            'judul' => '3 Resep Ayam Palekko Khas Bugis Enak dan Mudah Dibuat, Dijamin Bikin Ketagihan',
            'konten' => '<p>Resep ayam palekko khas Bugis, Sulawesi Selatan ini bisa menjadi teman makan siang Anda bersama keluarga dan orang-orang terdekat. Ya, sajian ayam memang tak ada habisnya. Bahkan, sepertinya masing-masing wilayah di Indonesia memiliki resep olahan ayam yang khas, sesuai dengan bumbu dan cita rasa daerahnya.</p>
            <p>Tak terkecuali dengan resep ayam palekko ini. Memiliki tampilan seperti ayam bumbu rempah, resep ayam palekko memang dibuat dengan campuran aneka bumbu seperti serai, lengkuas, jahe, bawang, daun jeruk, dan masih banyak lagi. Tak heran resep ayam palekko ini memiliki rasa yang khas.</p>
            <p>Disajikan bersama dengan nasi hangat, resep ayam palekko sangat cocok untuk dijadikan selingan dalam menu harian Anda. Tak perlu khawatir karena cara membuat resep ayam palekko ini mudah saja. ini dia beberapa resep ayam palekko yang telah kami pilih khusus untuk Anda. Selamat mencoba!</p>
            
            <br><b><p>1. Ayam Palekko Khas Bugis</b></p>
            <p>Bahan-bahan:</p>
            <p>1/2 ekor ayam bagian atas</p>
            <p>1 batang serai, geprek</p>
            <p>Seruas lengkuas, geprek</p>
            <p>2 lembar daun jeruk</p>
            <p>250 ml air</p>
            <p>Secukupnya garam, lada bubuk, kaldu ayam dana gula</p>
            
            <br><p>Bumbu dihaluskan:</p>
            <p>6 butir bawang merah</p>
            <p>4 siung bawang putih</p>
            <p>5 buah cabai merah</p>
            <p>Sedikit kunyit</p>
            
            <br><p>Cara membuat resep ayam palekko:</p>
            <p>1. Siapkan bahan-bahan.</p> 
            <p>2. Tumis bumbu halus, serai, daun jeruk, dan lengkuas sampai harum. Kemudian tuangkan air.</p>
            <p>3. Selanjutnya masukkan ayam, dan bumbu penyedap.</p>
            <p>4. Masak dengan api kecil sampai kuah menyusut. Jangan lupa koreksi rasa.</p>
            <p>5. Sajikan selagi hangat.</p>
            
            <br><b><p>2. Ayam Palekko Bugis Spesial</b></p>
            <p>Bahan utama:</p>
            <p>250 gram ayam</p>
            
            <br><p>Bumbu halus:</p>
            <p>10 siung bawang merah</p>
            <p>4 siung bawang putih</p>
            <p>3 buah cabai merah</p>
            <p>35 buah cabai rawit</p>
            <p>1 cm jahe</p>
            <p>1 cm lengkuas</p>
            <p>1 cm kunyit</p>
            
            <br><p>Bumbu pelengkap:</p>
            <p>Air asam</p>
            <p>Lada bubuk</p>
            <p>secukupnya gula, garam, kaldu jamur</p>
            <p>Minyak secukupnya buat numis</p>
            <p>2 lembar daun jeruk buang tulang</p>
            <p>1 batang sereh geprek</p>
            
            <br><p>Cara membuat resep ayam palekko:</p>
            <p>1. Potong kecil-kecil ayam lalu cuci hingga bersih dan rendam dengan air asam+lada+garam diamkan selama 30 menit.</p>
            <p>2. Haluskan semua bahan bumbu halus.</p>
            <p>3. Tumis bumbu halus lalu masukkan sereh dan daun jeruk aduk lalu tumis hingga harum.</p>
            <p>4. Masukkan ayam dan air asam tadi lalu masukkan semua bahan bumbu pelengkap aduk hingga tercampur rata.</p>
            <p>5. Tutup diamkan sampai air menyusut agar bumbu meresap.</p>
            <p>6. Koreksi rasa, jika sudah enak angkat lalu sajikan.</p>
            
            <br><p><b>3. Ayam Palekko ala Rumahan</b></p>
            <p>Bahan-bahan:</p>
            <p>1 ekor ayam dipotong kecil-kecil</p>
            <p>10 siung bawang merah</p>
            <p>3 siung bawang putih</p>
            <p>3 buah cabe merah</p>
            <p>2 cm jahe</p>
            <p>3 cm lengkuas</p>
            <p>2 batang serei (geprek)</p>
            <p>2 lembar daun jeruk</p>
            <p>Air asam</p>
            <p>Secukupnya kunyit bubuk</p>
            <p>Secukupnya merica bubuk</p>
            <p>Sesuai selera cabai rawit</p>
            <p>Secukupnya garam dan penyedap</p>
            <p>Minyak untuk menumis</p>
            
            <br><p>Cara membuat resep ayam palekko:</p>
            <p>1. Cuci bersih ayam, potong kecil-kecil, rendam dengan air asam, garam dan merica, diamkan sekitar 10 menit.</p>
            <p>2. Untuk bumbu halus blender bawang merah, bawang putih, cabai merah, cabai rawit, lengkuas, jahe, kunyit dan serai.</p>
            <p>3. Panaskan minyak goreng sekitar 2 sendok makan, tumis bumbu halus dan masukkan daun jeruk serta bagian atas serai yg di geprek, biarkan hingga aroma bumbunya tercium.</p>
            <p>4. Setelah tumisan agak kering masukkan ayam beserta air perendamnya beri garam dan penyedap.</p>
            <p>5. Tambahkan air secukupnya dan biarkan hingga airnya kembali menyusut dan ayamnya matang sempurna.</p>
            <p>6. Koreksi rasa lalu hidangkan.</p>',
            'slug' => Str::slug('3 Resep Ayam Palekko Khas Bugis Enak dan Mudah Dibuat, Dijamin Bikin Ketagihan')
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 3
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 3
        ]);
     
        // post 3

        $post = Post::create([
            'id_kategori' => '1',
            'id_user' => 2,
            'sampul' => '1671034497-sambel.jpg',
            'judul' => '5 Masakan Terpedas Diakui Sedunia, Nomor 1 Dari Indonesia, Lho!',
            'konten' => '<p>Kamu pecinta makanan pedas? Nggak sah kalau belum mencicipi 5 kuliner pedas sejagat ini. Banyak warga dunia yang mencoba makanan ini mengakui kepedasannya yang maut dan bikin mereka sampai tobat-tobat!</p>
            <p>Seluruh masakan ini menggunakan cabai sebagai bahannya. Cabai hingga saat ini masih diakui sebagai makanan yang rasanya pedas meski ada tingkatannya. Gak banyak basa-basi, mau tahu makanan apa saja yang terpedas di dunia?</p>
            
            <br><p><b>1. Sambal Ulek - Indonesia.</b></p>
            <p>Buat orang Indonesia, makan gak pakai sambal rasanya kayak ada yang hilang separuh jiwa. Itulah kenapa sambal yang diulek dengan cobek ini jadi menu wajib saat menyantap hidangan. Mulai dari bakso, mie ayam, ayam bakar, dendeng, semua pakai sambal. Banyak orang di dunia mengakui, masakan ini jadi nomor satu yang paling pedas sedunia. Apalagi jika komposisinya murni cabai rawit merah yang punya nama lain rawit galak, rawit gila, atau rawit setan. Dijamin mulutmu terbakar habis!</p>
            
            <br><p><b>2. Suicide Chicken - Amerika Serikat</b></p>
            <p>Judulnya sih agak-agak serem saat dilafalkan dalam bahasa Inggris. Tapi pas di-Indonesia-in, jadi ayam bunuh diri, hihihi. Anyway, ini makanan katanya pedes banget gak ketulungan. Sausnya berasal dari perpaduan saus tabasco, potongan cabai kering, dan cabai segar cincang sebelum akhirnya digoreng kering juga. Tuh, lihat tampilan Suicide Chicken, membuat liurmu sudah hampir tumpah.<p>
            
            <br><p><b>3. Jerk Chicken - Karibia</b></p>
            <p>Lagi-lagi hidangan ini bernama aneh. Kalau di-Indonesia-in jadinya, ayam brengsek, hihihi. Jerk Chicken ini dimasak bersama rempah-rempah yang memang kuat seperti cengke, kayu manus, dan pala. Rempah ini dipadu dengan daun bawang, timi, bawang putih, serta cabai jenis scotch bonnet, salah satu yang terpedas di dunia. Jadi kalau kamu menyantap ini pastikan ada 8 gelas air untuk memadamkan rasa pedasnya, ya.<p>
            
            <br><p><b>4. Vindaloo - India</b></p>
            <p>Hidangan asal India ini terbuat dari ayam yang juga dipadu bersama rempah-rempah berasa kuat mulai dari adas, biji mostar, ketumbar, dan jahe. Gak lupa cabe kering. Pedasnya makanan ini sampai ke tulang-tulang ayamnya segala. Mesti nyobain, nih. Ada juga Vandaloo kambing yang jadi alternatif kalau kamu bosan hidangan ayam.<p>
            
            <br><p><b>5. Wot - Ethiopia</b></p>
            <p>Meski negerinya gersang, Ethiopia ternyata menyimpan kuliner yang pedasnya nauzubilah. Cabai kering dan barbere, dua bahan yang ditenggarai bikin makanan ini jadi pedes abis. Kalau kamu menyantap ini, siap-siap banjir keringat dan panas dalam.<p>',
            'slug' => Str::slug('5 Masakan Terpedas Diakui Sedunia, Nomor 1 Dari Indonesia, Lho!')
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 1
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 3
        ]);

        Like::create([
            'id_post' => $post->id,
            'id_user' => 3
        ]);
      
        // post 4

        $post = Post::create([
            'id_kategori' => '2',
            'id_user' => 1,
            'sampul' => '1671080412-labuana.jpg',
            'judul' => 'Kentang Goreng La Buana Cafe Kualitasnya Patut Diacungi Jempol',
            'konten' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?',
            'slug' => Str::slug('Kentang Goreng La Buana Cafe Kualitasnya Patut Diacungi Jempol')
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 1
        ]);

        DB::table('post_tag')->insert([
            'id_post' => $post->id,
            'id_tag' => 3
        ]);

        Rekomendasi::create([
            'id_post' => $post->id
        ]);
    }
}
