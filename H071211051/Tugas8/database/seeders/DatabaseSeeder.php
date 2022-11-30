<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

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

        User::create([
            'name'=> 'Febi Fiantika',
            'username' => 'febiii',
            'email' => 'febifian23@gmail.com',
            'password' => bcrypt('1234')
        ]);

        User::factory(3)->create();

        // User::create([
        //     'name' => 'Bulqis Ramadani',
        //     'email' => 'bulqiss@gmail.com',
        //     'password' => bcrypt('5678')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, veritatis!',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae molestias nesciunt nemo ab iste vel velit. Assumenda, iure repellat vitae eaque ut et voluptatum sed reiciendis hic voluptatem distinctio dignissimos, quos eveniet perspiciatis blanditiis repudiandae laudantium iusto voluptatibus possimus! Atque, eveniet. Itaque ipsum quae, rem quam repellendus sit deleniti! Dolore fugiat hic esse quod alias sed quia incidunt magni repellat reiciendis mollitia distinctio, ab obcaecati omnis, repellendus officia quibusdam aut? Harum eum aliquid odit animi aperiam tempore hic totam, ipsam eligendi assumenda doloribus rerum facere quo perspiciatis incidunt sit recusandae exercitationem sint fuga numquam ullam quisquam magnam.</p>  <p>Eligendi, velit quae?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, veritatis!',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae molestias nesciunt nemo ab iste vel velit. Assumenda, iure repellat vitae eaque ut et voluptatum sed reiciendis hic voluptatem distinctio dignissimos, quos eveniet perspiciatis blanditiis repudiandae laudantium iusto voluptatibus possimus! Atque, eveniet. Itaque ipsum quae, rem quam repellendus sit deleniti! Dolore fugiat hic esse quod alias sed quia incidunt magni repellat reiciendis mollitia distinctio, ab obcaecati omnis, repellendus officia quibusdam aut? Harum eum aliquid odit animi aperiam tempore hic totam, ipsam eligendi assumenda doloribus rerum facere quo perspiciatis incidunt sit recusandae exercitationem sint fuga numquam ullam quisquam magnam.</p>  <p>Eligendi, velit quae?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, veritatis!',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae molestias nesciunt nemo ab iste vel velit. Assumenda, iure repellat vitae eaque ut et voluptatum sed reiciendis hic voluptatem distinctio dignissimos, quos eveniet perspiciatis blanditiis repudiandae laudantium iusto voluptatibus possimus! Atque, eveniet. Itaque ipsum quae, rem quam repellendus sit deleniti! Dolore fugiat hic esse quod alias sed quia incidunt magni repellat reiciendis mollitia distinctio, ab obcaecati omnis, repellendus officia quibusdam aut? Harum eum aliquid odit animi aperiam tempore hic totam, ipsam eligendi assumenda doloribus rerum facere quo perspiciatis incidunt sit recusandae exercitationem sint fuga numquam ullam quisquam magnam.</p>  <p>Eligendi, velit quae?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
