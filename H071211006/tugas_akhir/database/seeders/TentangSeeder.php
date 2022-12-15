<?php

namespace Database\Seeders;

use App\Models\Tentang;
use Illuminate\Database\Seeder;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tentang::create([
            'konten' => '<b>We love hearing from our readers!
            <p>if you...</p>
            <p>
            <li>Have any comments, questions, or suggestions about Food Escape, food, and beyond</li>
            <li>Want to invite us to your food tasting, grand opening, and any other events</li>
            <li>Are Interested in sponsorship or advertising opportunities with Food Escape</li>
            </p><p>No need to worry about contacting us!</p>
            <p>You are very welcome to leave comments on the blog, but we will never tolerate any unproductively negative comments, incluiding those with racism, pornography or social remaks.</p>',
            'facebook' => 'https://id-id.facebook.com/kfcindonesia/',
            'instagram' => 'https://www.instagram.com/hikmanrrr_/',
            'twitter' => 'https://twitter.com/KFCINDONESIA?'
        ]);
    }
}
