<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
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
        User::create([
            'name' => 'Dwimas Budi Sulistyo',
            'username' => 'dwimasbudi',
            'email' => 'dwimasbudi@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'Wisnu Aryo Putro',
            'username' => 'admin',
            'email' => 'wisnuaryo@gmail.com',
            'password' => bcrypt('admin')
        ]);
        Category::create([
            'name' => 'Berita',
            'slug' => 'berita'
        ]);
        Category::create([
            'name' => 'Prestasi',
            'slug' => 'prestasi'
        ]);
        Category::create([
            'name' => 'Pengumuman',
            'slug' => 'pengumuman'
        ]);
        Post::factory(100)->create();

    }
}
