<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'sampul' => '1670730654-banner1.jpg',
            'judul' => 'Memasak daging agar tidak alot',
            'konten' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?',
            'slug' => Str::slug('memasak-daging-agar-tidak-alot')
        ]);

        Banner::create([
            'sampul' => '1670730721-banner2.jpg',
            'judul' => 'Alasan Harus Vaksin Saat Kuliner dan Traveling',
            'konten' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?',
            'slug' => Str::slug('alasan-harus-vaksin-saat-kuliner-dan-traveling')
        ]);

        Banner::create([
            'sampul' => '1670730776-banner3.jpg',
            'judul' => 'Sate Taichan, Makassar',
            'konten' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?',
            'slug' => Str::slug('sate-taichan-makassar')
        ]);
    }
}
