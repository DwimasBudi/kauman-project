<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\VisiMisi;
use App\Models\Sambutan;
use App\Models\Kontak;
use App\Models\Comment;
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
        Kontak::create([
            'slug' => 'kontak',
            'email' => 'sdnegerikauman@gmail.com',
            'alamat' => 'Jl. Bimoseno, Kidal, Kauman, Kec. Karangrejo, Kabupaten Magetan, Jawa Timur 63395',
            'hp' => '0812334569',
            'fax' => '2133 - 213213',
        ]);
        VisiMisi::create([
            'slug' => 'visi-misi',
            'visi' => '<p>Terwujudnya Sekolah Dalam Prestasi Berdasarkan Iman dan Takwa</p>',
            'Misi' => '<ol>
                        <li>Meningkatkan dan menguatkan Iman dan Taqwa</li>
                        <li>Meningkatkan Kualitas Sumber Daya Manusia</li>
                        <li>Unggul Dalam Bidang Akademik dan Non-Akademik</li>
                        <li>Membentuk kerjasama yang menguasai ilmu pengetahuan, teknologi dan seni serta kacakapan hidup</li>
                        <li>Melaksanakan Pembelajaran Bernuansa PAKEM</li>
                        <li>Menjalin kerjasama yang harmonis antara warga sekolah, komite dan lingkungan</li>
                        </ol>',
            'image' => 'post-images/7.jpg'
        ]);
        Sambutan::create([
            'slug' => 'sambutan',
            'sambutan' => 'Assalamualaikum warahmatullahi wabarakaatuh Alhamdulillahirobbil aalamiin. Kita panjatkan puji syukur ke hadirat Allah SWT Tuhan Yang Maha Kuasa atas limpahan rahmat dan karunia-Nya yang selalu diberikan kepada kita semua. Selamat datang di website SD Negeri Kauman Magetan, media informasi sekolah yang dapat diakses dengan mudah oleh siswa, orang tua/wali, alumni dan stake holder secara luas . Pendidikan sebagai kunci kemajuan dan keunggulan bangsa, sekolah memiliki tanggung jawab menyiapkan sumber daya manusia yang tangguh, adaptif terhadap perubahan yang begitu cepat. SD Negeri Kauman Magetan melaksanakan proses pendidikan untuk membekali dan mengantarkan lulusannya berprestasi unggul, mampu bersaing di tingkat global, berbudaya, peduli lingkungan, berwawasan Ilmu',
            'image' => 'post-images/presiden.png'
        ]);
        Post::factory(100)->create();
        Comment::factory(500)->create();
        

    }
}
