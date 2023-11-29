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
            'nama' => 'Dwimas Budi Sulistyo',
            'username' => 'dwimasbudi',
            // 'email' => 'dwimasbudi@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::create([
            'nama' => 'Admin SDN Kauman',
            'username' => 'sdnkauman',
            // 'email' => 'wisnuaryo@gmail.com',
            'password' => bcrypt('kaumanmagetan')
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
            'email' => 'sdnegerikauman@gmail.com',
            'alamat' => 'Jl. Bimoseno, Kidal, Kauman, Kec. Karangrejo, Kabupaten Magetan, Jawa Timur 63395',
            'hp' => '0812334569',
            // 'fax' => '2133 - 213213',
        ]);
        VisiMisi::create([
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
            'sambutan' => 'Assalamualaikum warahmatullahi wabarakaatuh Alhamdulillahirobbil aalamiin. Kita panjatkan puji syukur ke hadirat Allah SWT Tuhan Yang Maha Kuasa atas limpahan rahmat dan karunia-Nya yang selalu diberikan kepada kita semua. Selamat datang di website SD Negeri Kauman Magetan, media informasi sekolah yang dapat diakses dengan mudah oleh siswa, orang tua/wali, alumni dan stake holder secara luas . Pendidikan sebagai kunci kemajuan dan keunggulan bangsa, sekolah memiliki tanggung jawab menyiapkan sumber daya manusia yang tangguh, adaptif terhadap perubahan yang begitu cepat. SD Negeri Kauman Magetan melaksanakan proses pendidikan untuk membekali dan mengantarkan lulusannya berprestasi unggul, mampu bersaing di tingkat global, berbudaya, peduli lingkungan, berwawasan Ilmu',
            'image' => 'post-images/xXeTjIG8X4xS2pZK46fZ9PWXtKHvZBbNaNDJRdWq.jpg'
        ]);
        // Post::factory(100)->create();
        // Comment::factory(500)->create();
        Post::create([
            'category_id' => 1,
            'title' => 'Guru dan Staf Sekolah Dasar Negeri Kauman Magetan : Penggerak Kesuksesan Pendidikan Anak Bangsa',
            'published_at' => now()->format('Y-m-d'),
            'slug' => 'guru-dan-staf-sekolah-dasar-negeri-kauman-magetan-penggerak-kesuksesan-pendidikan-anak-bangsa',
            'image' => 'post-images/5bOscsb9ZQDVFlKVhJQpDjrvQn5OZOBKWJH3Aq3I.jpg',
            'excerpt' => 'Guru dan staf sekolah dasar negeri merupakan sosok yang sangat penting dalam menciptakan kesuksesan...',
            'body' => '<p style="text-align: justify;">Guru dan staf sekolah dasar negeri merupakan sosok yang sangat penting dalam menciptakan kesuksesan pendidikan di Indonesia. Mereka adalah penggerak utama dalam membentuk karakter, pengetahuan, dan keterampilan siswa-siswi di tingkat dasar.Guru adalah sosok yang memiliki peran sentral dalam proses pembelajaran di sekolah dasar. Mereka bertanggung jawab untuk mengajar dan membimbing siswa-siswi agar dapat mencapai potensi terbaik mereka.</p>
<p style="text-align: justify;">Guru-guru ini memiliki pengetahuan yang luas dalam berbagai mata pelajaran, mulai dari matematika, bahasa Indonesia, bahasa Inggris, ilmu pengetahuan alam, hingga seni dan olahraga.Selain itu, guru juga memiliki peran penting dalam membentuk karakter siswa-siswi. Mereka mengajarkan nilai-nilai moral, etika, dan sikap positif kepada siswa-siswi. Guru-guru ini juga menjadi panutan bagi siswa-siswi dalam hal disiplin, kerja keras, dan tanggung jawab.</p>
<p style="text-align: justify;">Dengan adanya guru yang baik, siswa-siswi dapat tumbuh menjadi individu yang berintegritas dan memiliki sikap yang baik.Tidak hanya guru, staf sekolah dasar negeri juga memiliki peran yang tidak kalah penting dalam menciptakan kesuksesan pendidikan.</p>
<p style="text-align: justify;">Staf sekolah, seperti kepala sekolah, wakil kepala sekolah, dan petugas administrasi, bertanggung jawab untuk mengelola dan mengatur berbagai kegiatan di sekolah. Mereka bekerja keras untuk memastikan bahwa semua proses administrasi berjalan dengan lancar, mulai dari penerimaan siswa baru, jadwal pelajaran, hingga pengelolaan dana sekolah.Selain itu, staf sekolah juga berperan dalam menciptakan lingkungan yang aman dan nyaman bagi siswa-siswi. Mereka bertanggung jawab untuk menjaga kebersihan sekolah, memastikan keamanan siswa-siswi di dalam dan di luar kelas, serta mengatur kegiatan ekstrakurikuler yang bermanfaat bagi perkembangan siswa-siswi.</p>
<p style="text-align: justify;">Guru dan staf sekolah dasar negeri adalah tim yang bekerja sama untuk mencapai kesuksesan pendidikan. Mereka saling mendukung dan bekerja sama dalam menciptakan lingkungan belajar yang kondusif dan menyenangkan. Guru dan staf sekolah juga berkomunikasi dengan orang tua siswa-siswi untuk memastikan bahwa pendidikan yang diberikan sesuai dengan kebutuhan dan harapan mereka.</p>
<p style="text-align: justify;">Kesuksesan pendidikan tidak dapat tercapai tanpa peran aktif dan dedikasi dari guru dan staf sekolah dasar negeri. Mereka adalah pilar utama dalam menciptakan generasi muda yang cerdas, berintegritas, dan siap menghadapi tantangan masa depan. Oleh karena itu, perlu diapresiasi dan dihargai upaya mereka dalam menciptakan kesuksesan pendidikan di Indonesia.</p>',
        ]);
        
        Post::create([
            'category_id' => 1,
            'published_at' => now()->format('Y-m-d'),
            'title' => 'Cerdas Cermat: Mengembangkan Kemampuan Anak SD Kelas 1-3',
            'slug' => 'cerdas-cermat-mengembangkan-kemampuan-anak-sd-kelas-1-3',
            'image' => 'post-images/wTS1RUxOGOfuFT8EGJg1MKNdCsxqvfNhejQEXdBx.jpg',
            'excerpt' => 'Cerdas cermat adalah salah satu kegiatan yang sangat penting untuk dikembangkan pada anak-anak di se...',
            'body' => '<p class="MsoNormal">Cerdas cermat adalah salah satu kegiatan yang sangat penting untuk dikembangkan pada anak-anak di sekolah dasar (SD) kelas 1 hingga 6. Kegiatan ini membantu mereka mengasah kemampuan berpikir kritis, analitis, dan memecahkan masalah. Di bawah ini, kita akan membahas bagaimana cerdas cermat bisa diajarkan dan ditingkatkan di setiap jenjang kelas SD.</p>
<p class="MsoNormal"><img title="WhatsApp Image 2023-11-03 at 09.21.33.jpeg" src="../../../storage/post-images/16989781710.png" alt="" width="500" height="281"></p>
<p class="MsoNormal"><strong>Kelas 1, 2, dan 3 SD</strong></p>
<p class="MsoNormal">1. Kegiatan Perbandingan</p>
<p class="MsoNormal">Di kelas 1 hingga 3, anak-anak bisa diajarkan untuk membandingkan berbagai hal, seperti ukuran, bentuk, warna, dan jumlah. Contohnya, mereka dapat membandingkan ukuran buah-buahan atau memilih benda yang memiliki warna yang sama. Ini membantu mereka mengembangkan kemampuan berpikir visual dan memahami konsep perbandingan.</p>
<p class="MsoNormal">2. Pertanyaan Terbuka</p>
<p class="MsoNormal">Guru dapat mendorong pertanyaan yang mendorong pemikiran kritis. Misalnya, setelah membaca cerita, guru dapat bertanya kepada siswa, "Mengapa karakter utama melakukan tindakan ini?" Ini membantu anak-anak memahami narasi dan mengembangkan pemikiran kritis mereka.</p>
<p class="MsoNormal">3. Permainan Matematika Sederhana</p>
<p class="MsoNormal">Permainan matematika sederhana, seperti bingo penjumlahan atau pengurangan, bisa menjadi cara yang menyenangkan untuk mengajarkan anak-anak kelas 1 hingga 3 tentang matematika. Ini juga melatih fokus dan pemecahan masalah.</p>',
        ]);
        Post::create([
            'category_id' => 1,
            'published_at' => now()->format('Y-m-d'),
            'title' => 'Cerdas Cermat: Mengembangkan Kemampuan Anak SD Kelas 4-6',
            'slug' => 'cerdas-cermat-mengembangkan-kemampuan-anak-sd-kelas-4-6',
            'image' => 'post-images/Qmke99rIOpzDAYEf95cpY34eKl4b8pv5FXJHqIl1.jpg',
            'excerpt' => 'Cerdas cermat adalah salah satu kegiatan yang sangat penting untuk dikembangkan pada anak-anak di se...',
            'body' => '<p class="MsoNormal" style="text-align: justify;">Cerdas cermat adalah salah satu kegiatan yang sangat penting untuk dikembangkan pada anak-anak di sekolah dasar (SD) kelas 1 hingga 6. Kegiatan ini membantu mereka mengasah kemampuan berpikir kritis, analitis, dan memecahkan masalah. Di bawah ini, kita akan membahas bagaimana cerdas cermat bisa diajarkan dan ditingkatkan di setiap jenjang kelas SD.</p>
<p class="MsoNormal" style="text-align: justify;"><img title="WhatsApp Image 2023-11-03 at 09.25.30 (1).jpeg" alt="" width="500" height="281" src="/storage/post-images/16989787310.png"></p>
<p class="MsoNormal" style="text-align: justify;"><img title="WhatsApp Image 2023-11-03 at 09.21.32.jpeg" alt="" width="500" height="281" src="/storage/post-images/16989787311.png"></p>
<p class="MsoNormal"><strong>Kelas 4, 5, dan 6 SD</strong></p>
<p class="MsoNormal">1. Pertandingan Cerdas Cermat</p>
<p class="MsoNormal">Pertandingan cerdas cermat di antara siswa kelas 4 hingga 6 adalah cara yang menyenangkan untuk mendorong kompetisi sehat dan belajar bersama. Pertanyaan cerdas cermat dapat mencakup berbagai topik, termasuk matematika, sains, budaya, dan sejarah.</p>
<p class="MsoNormal">2. Literasi Kritis</p>
<p class="MsoNormal">Mengajarkan anak-anak untuk membaca dan mengevaluasi informasi dengan kritis sangat penting di era informasi digital. Mereka dapat diajarkan untuk mengidentifikasi sumber yang dapat dipercaya, memahami bias dalam berita, dan mengembangkan literasi media yang kuat</p>
<p class="MsoNormal">Penting untuk diingat bahwa pendekatan cerdas cermat harus disesuaikan dengan tingkat perkembangan anak dan diintegrasikan ke dalam kurikulum. Dengan mengajarkan cerdas cermat sejak dini, kita membantu anak-anak mengembangkan keterampilan berpikir yang akan membantu mereka dalam kehidupan sehari-hari dan di masa depan<span lang="IN" style="mso-ansi-language: IN;">.</span></p>',
        ]);
        Post::create([
            'category_id' => 1,
            'published_at' => now()->format('Y-m-d'),
            'title' => 'Kegiatan Literasi Membaca Peserta Didik SDN Kauman Magetan',
            'slug' => 'kegiatan-literasi-membaca-peserta-didik-sdn-kauman-magetan',
            'image' => 'post-images/dZpxOhrEbiEZYxEmRlFVAw2gYOoD6RIci2ftmVUe.jpg',
            'excerpt' => 'Literasi membaca adalah keterampilan penting yang harus dikembangkan sejak usia dini. Di SDN Kauman...',
            'body' => '<p class="MsoNormal">Literasi membaca adalah keterampilan penting yang harus dikembangkan sejak usia dini. Di SDN Kauman Magetan, guru dan siswa bekerja sama untuk menciptakan lingkungan yang mendukung pengembangan literasi membaca. Salah satu pendekatan yang menarik adalah menggabungkan kegiatan literasi dengan pengalaman outdoor. Kegiatan outdoor ini tidak hanya menyenangkan, tetapi juga memberikan kesempatan bagi siswa untuk meningkatkan keterampilan membaca mereka. Inilah mengapa kegiatan literasi membaca di luar ruangan sangat penting di SDN Kauman Magetan.</p>
<p class="MsoNormal"><strong>Manfaat Kegiatan Literasi Membaca di Luar Ruangan</strong></p>
<ol style="margin-top: 0cm;" start="1" type="1">
<li class="MsoNormal" style="mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;"><strong>Menghubungkan dengan Dunia Nyata</strong>: Dalam kegiatan literasi membaca di luar ruangan, siswa dapat mempraktikkan keterampilan membaca dalam konteks dunia nyata. Mereka dapat membaca tanda-tanda, petunjuk, atau informasi di alam terbuka, yang memungkinkan mereka untuk menghubungkan literasi dengan situasi kehidupan sehari-hari.</li>
<li class="MsoNormal" style="mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;"><strong>Meningkatkan Kreativitas</strong>: Berada di alam terbuka seringkali memicu kreativitas. Kegiatan literasi outdoor dapat melibatkan siswa dalam menulis cerita, puisi, atau jurnal tentang pengalaman mereka di alam bebas. Ini mendorong mereka untuk menjadi lebih kreatif dalam mengekspresikan ide dan perasaan mereka.</li>
<li class="MsoNormal" style="mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;"><strong>Meningkatkan Keterampilan Pengamatan</strong>: Berbagai bentuk kehidupan alam dapat menjadi bahan bacaan yang menarik. Siswa dapat mempelajari tentang tumbuhan, hewan, dan lingkungan mereka sambil memperkuat keterampilan pengamatan mereka.</li>
<li class="MsoNormal" style="mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;"><strong>Mengembangkan Keterampilan Sosial</strong>: Kegiatan luar ruangan sering melibatkan kerja sama dalam kelompok. Siswa belajar berinteraksi satu sama lain, berbagi pengetahuan, dan berkolaborasi dalam menyelesaikan tugas literasi. Hal ini juga membangun keterampilan sosial yang sangat diperlukan.</li>
</ol>',
        ]);
        Post::create([
            'category_id' => 1,
            'published_at' => now()->format('Y-m-d'),
            'title' => 'Peringatan Hari Kesaktian Pancasila: Memahami dan Menghargai Nilai-nilai Pancasila di SDN Kauman Magetan',
            'slug' => 'peringatan-hari-kesaktian-pancasila-memahami-dan-menghargai-nilai-nilai-pancasila-di-sdn-kauman-magetan',
            'image' => 'post-images/FypShYcUsTgWTmq5U29sny8t38s9QSyf1QUqTRtS.jpg',
            'excerpt' => 'Setiap tanggal 1 Oktober, rakyat Indonesia memperingati Hari Kesaktian Pancasila. Hari ini adalah mo...',
            'body' => '<p class="MsoNormal" style="text-align: justify;">Setiap tanggal 1 Oktober, rakyat Indonesia memperingati Hari Kesaktian Pancasila. Hari ini adalah momentum penting yang mengingatkan kita semua tentang pentingnya nilai-nilai dasar Pancasila dalam pembentukan negara Indonesia. Di SDN Kauman Magetan, peringatan Hari Kesaktian Pancasila adalah saat yang spesial untuk memberikan pemahaman mendalam kepada para siswa tentang makna, sejarah, dan pentingnya Pancasila.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Mengapa Hari Kesaktian Pancasila Penting?</strong></p>
<p class="MsoNormal" style="text-align: justify;">Pancasila adalah ideologi dasar negara Indonesia yang berfungsi sebagai panduan bagi seluruh rakyat Indonesia. Hari Kesaktian Pancasila diperingati untuk menghormati para pahlawan yang telah berjuang dan mengorbankan hidup mereka demi menjaga Pancasila sebagai dasar negara. Nilai-nilai Pancasila, yaitu Ketuhanan Yang Maha Esa, Kemanusiaan yang Adil dan Beradab, Persatuan Indonesia, Kerakyatan yang Dipimpin oleh Hikmat Kebijaksanaan dalam Permusyawaratan/Perwakilan, dan Keadilan Sosial bagi Seluruh Rakyat Indonesia, adalah landasan utama untuk menjaga persatuan, kesatuan, dan keadilan di negara ini.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Kegiatan Peringatan Hari Kesaktian Pancasila di SDN Kauman Magetan</strong></p>
<ol style="margin-top: 0cm; text-align: justify;" start="1" type="1">
<li class="MsoNormal" style="mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;"><strong>Upacara Bendera</strong>: Peringatan dimulai dengan upacara bendera yang diikuti oleh seluruh siswa, guru, dan staf sekolah. Upacara ini mengingatkan kita akan pentingnya semangat patriotisme dan cinta tanah air.</li>
<li class="MsoNormal" style="mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;"><strong>Ceramah dan Diskusi</strong>: Setelah upacara, siswa mengikuti ceramah dan diskusi tentang sejarah Pancasila, makna setiap sila, serta peran Pancasila dalam kehidupan sehari-hari. Diskusi ini membantu siswa untuk memahami lebih dalam nilai-nilai dasar Pancasila.</li>
<li class="MsoNormal" style="mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;"><strong>Kegiatan Seni dan Kreativitas</strong>: Para siswa juga terlibat dalam berbagai kegiatan seni dan kreativitas, seperti menggambar, menulis puisi, atau menyanyikan lagu-lagu patriotik yang menggambarkan makna Pancasila dan semangat persatuan.</li>
<li class="MsoNormal" style="mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;"><strong>Penghargaan kepada Pahlawan Lokal</strong>: SDN Kauman Magetan juga memberikan penghargaan kepada pahlawan lokal yang telah berkontribusi dalam masyarakat. Ini bertujuan untuk menginspirasi siswa dengan contoh nyata dari individu yang menerapkan nilai-nilai Pancasila dalam kehidupan mereka.</li>
<li class="MsoNormal" style="mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;"><strong>Lomba Penulisan Esai</strong>: Sebuah lomba penulisan esai diadakan untuk siswa. Topik esai ini berkaitan dengan nilai-nilai Pancasila dan bagaimana siswa dapat menerapkannya dalam kehidupan mereka sehari-hari. Ini memberikan kesempatan bagi siswa untuk mengembangkan pemahaman mereka tentang Pancasila.</li>
</ol>
<p class="MsoNormal" style="text-align: justify;"><strong>Pesan Hari Kesaktian Pancasila di SDN Kauman Magetan</strong></p>
<p class="MsoNormal" style="text-align: justify;">Peringatan Hari Kesaktian Pancasila di SDN Kauman Magetan adalah saat yang sangat penting untuk mengajarkan kepada siswa tentang nilai-nilai dasar Pancasila. Melalui berbagai kegiatan, diskusi, dan penghargaan kepada pahlawan lokal, siswa diharapkan dapat memahami dan menginternalisasi nilai-nilai Pancasila, sehingga mereka dapat menjadi warga negara yang bertanggung jawab dan penuh rasa cinta tanah air.</p>
<p class="MsoNormal" style="text-align: justify;">Sebagai sekolah yang mendidik generasi muda, SDN Kauman Magetan berkomitmen untuk terus mempromosikan semangat Pancasila dan menjaga kesatuan dan persatuan bangsa. Peringatan Hari Kesaktian Pancasila adalah salah satu cara yang efektif untuk mencapai tujuan tersebut dan memastikan bahwa generasi muda memiliki pemahaman yang kuat tentang nilai-nilai Pancasila sebagai landasan negara.</p>',
        ]);
        Post::create([
            'category_id' => 3,
            'published_at' => now()->format('Y-m-d'),
            'title' => 'Menggali Potensi Siswa: Persiapan Menghadapi ANBK di SDN Kauman Magetan Tahun Ajaran 2023/2024',
            'slug' => 'menggali-potensi-siswa-persiapan-menghadapi-anbk-di-sdn-kauman-magetan-tahun-ajaran-2023-2024',
            'image' => 'post-images/MFLm8m87RuODZn8o2RYamejvg5l8JUpKojyeqt1t.jpg',
            'excerpt' => 'Tahun ajaran baru telah tiba, dan di SDN Kauman Magetan, persiapan untuk menghadapi ANBK (Asesmen Na...',
            'body' => '<p class="MsoNormal" style="text-align: justify;">Tahun ajaran baru telah tiba, dan di SDN Kauman Magetan, persiapan untuk menghadapi ANBK (Asesmen Nasional Berbasis Komputer) di tahun ajaran 2023/2024 sedang dalam jalur penuh. ANBK adalah ujian nasional yang digunakan untuk mengukur pemahaman siswa terhadap berbagai mata pelajaran dan keterampilan esensial. Sebagai sekolah yang berkomitmen untuk memberikan pendidikan berkualitas, persiapan ANBK adalah langkah penting untuk memastikan kesuksesan siswa.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Apa Itu ANBK?</strong></p>
<p class="MsoNormal" style="text-align: justify;">ANBK adalah Asesmen Nasional Berbasis Komputer, yang merupakan ujian standar nasional di Indonesia. Tujuan utama dari ANBK adalah untuk mengukur pemahaman siswa terhadap berbagai mata pelajaran, memastikan bahwa standar pendidikan nasional tercapai, dan memberikan data untuk perbaikan pendidikan di masa depan. ANBK mencakup berbagai mata pelajaran, seperti Matematika, Bahasa Indonesia, Ilmu Pengetahuan Alam, dan Bahasa Inggris.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Persiapan Intensif di SDN Kauman Magetan</strong></p>
<p class="MsoNormal" style="text-align: justify;">Persiapan untuk ANBK di SDN Kauman Magetan adalah proses yang intensif dan berkelanjutan. Beberapa langkah yang diambil untuk memastikan kesuksesan siswa dalam ANBK termasuk:</p>
<ol style="margin-top: 0cm; text-align: justify;" start="1" type="1">
<li class="MsoNormal" style="mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;"><strong>Pembelajaran Berkualitas</strong>: Guru-guru di SDN Kauman Magetan terus berupaya memberikan pembelajaran berkualitas dalam persiapan ANBK. Mereka menggunakan materi pelajaran yang relevan dan efektif, serta mengadakan ujian latihan secara berkala.</li>
<li class="MsoNormal" style="mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;"><strong>Sumber Daya Pendukung</strong>: Sekolah telah memastikan bahwa siswa memiliki akses ke sumber daya pendukung, termasuk buku pelajaran, perangkat komputer, dan perangkat lunak pembelajaran yang diperlukan.</li>
<li class="MsoNormal" style="mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;"><strong>Ujian Latihan</strong>: Ujian latihan reguler diadakan untuk membantu siswa memahami format ANBK dan mengukur kemajuan mereka. Ini membantu mengidentifikasi area yang memerlukan perbaikan.</li>
<li class="MsoNormal" style="mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;"><strong>Pemantauan Kemajuan Siswa</strong>: Guru dan staf sekolah secara rutin memantau kemajuan siswa. Jika ada siswa yang menghadapi kesulitan, bantuan tambahan akan diberikan untuk memastikan bahwa mereka siap menghadapi ANBK.</li>
<li class="MsoNormal" style="mso-list: l0 level1 lfo1; tab-stops: list 36.0pt;"><strong>Pendekatan Holistik</strong>: Persiapan ANBK di SDN Kauman Magetan tidak hanya fokus pada ujian itu sendiri. Siswa juga diberikan dukungan dalam pengembangan keterampilan penting, seperti berpikir kritis, komunikasi, dan kerja sama.</li>
</ol>
<p class="MsoNormal" style="text-align: justify;"><strong>Harapan dari Persiapan ANBK di SDN Kauman Magetan</strong></p>
<p class="MsoNormal" style="text-align: justify;">Persiapan ANBK di SDN Kauman Magetan adalah tentang memberikan siswa peluang terbaik untuk meraih kesuksesan dalam ujian nasional dan, yang lebih penting, dalam pendidikan mereka secara keseluruhan. Harapannya adalah bahwa melalui persiapan yang cermat, siswa akan memiliki pemahaman yang kuat tentang mata pelajaran yang diuji dan keterampilan yang mereka butuhkan untuk meraih sukses di masa depan.</p>
<p style="text-align: justify;"><span>Di SDN Kauman Magetan, kami yakin bahwa dengan kerja keras, dukungan guru dan staf sekolah, serta komitmen siswa, ANBK di tahun ajaran 2023/2024 akan menjadi langkah penting dalam menggali potensi siswa dan mempersiapkan mereka untuk masa depan yang cerah. Semoga hasilnya akan mencerminkan dedikasi dan kerja keras yang telah ditanamkan dalam proses persiapan ini.</span></p>',
        ]);
        Post::create([
            'category_id' => 1,
            'published_at' => now()->format('Y-m-d'),
            'title' => 'Percikan Kenangan dan Terima Kasih: Perpisahan dengan Guru Ibu Nanik di SDN Kauman Magetan',
            'slug' => 'percikan-kenangan-dan-terima-kasih-perpisahan-dengan-guru-ibu-nanik-di-sdn-kauman-magetan',
            'image' => 'post-images/P9HyTY2WPUKwonHOS4qesNnS4zggeE9D7p2BUx6C.jpg',
            'excerpt' => 'Perpisahan selalu datang dengan perasaan campuran, di mana kita merasakan kegembiraan untuk perjalan...',
            'body' => '<p class="MsoNormal" style="text-align: justify;">Perpisahan selalu datang dengan perasaan campuran, di mana kita merasakan kegembiraan untuk perjalanan yang baru dan juga kekhawatiran atas kehilangan sosok yang telah lama berada di sisipan hati kita. Di SDN Kauman Magetan, perpisahan dengan Guru Ibu Nanik adalah momen yang penuh emosi, di mana kita mengenang jejak panjangnya dalam mendidik dan membentuk generasi muda.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Jejak Panjang Guru Ibu Nanik</strong></p>
<p class="MsoNormal" style="text-align: justify;">Guru Ibu Nanik adalah sosok yang luar biasa dalam komunitas sekolah ini. Ia telah mendedikasikan tahun-tahun terbaiknya dalam memberikan pendidikan berkualitas dan mendukung perkembangan karakter siswa. Guru Ibu Nanik dikenal dengan pendekatan yang hangat dan penuh kasih kepada siswa-siswanya. Ia bukan hanya mengajarkan pelajaran, tetapi juga memberikan inspirasi dan dorongan bagi mereka untuk mencapai potensi terbaik mereka.</p>
<p class="MsoNormal" style="text-align: justify;">Dalam karirnya yang panjang, Guru Ibu Nanik telah membimbing ratusan siswa dan menjadi panutan bagi banyak guru lainnya. Ia selalu memberikan contoh tentang bagaimana menjadi pendidik yang baik, yang tidak hanya mengajar, tetapi juga menciptakan lingkungan yang mendukung pertumbuhan dan perkembangan siswa.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Moments of Appreciation and Farewell</strong></p>
<p class="MsoNormal" style="text-align: justify;">Perpisahan dengan Guru Ibu Nanik di SDN Kauman Magetan diwarnai dengan momen-momen penghargaan dan ucapan terima kasih. Siswa-siswa, rekan guru, dan orang tua mengungkapkan rasa terima kasih dan apresiasi mereka atas kontribusi Guru Ibu Nanik selama bertahun-tahun. Kata-kata terima kasih dan ucapan selamat jadi teman dekat dan keluarga guru ini.</p>
<p class="MsoNormal" style="text-align: justify;">Momen perpisahan ini juga diisi dengan kenangan indah, di mana siswa mengenang pelajaran berharga yang telah mereka terima dari Guru Ibu Nanik. Mereka merasa terinspirasi untuk melanjutkan perjuangan mereka dalam dunia pendidikan dan berusaha menjadi individu yang baik, seperti yang telah dicontohkan oleh Guru Ibu Nanik.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Pesan untuk Masa Depan</strong></p>
<p class="MsoNormal" style="text-align: justify;">Saat kita melepas Guru Ibu Nanik, kita juga menyampaikan pesan terbaik untuk masa depannya. Meskipun Ibu Nanik akan meninggalkan ruang kelas, pengaruh dan jejaknya akan tetap ada dalam hati dan pikiran siswa yang telah diajarinya.</p>
<p class="MsoNormal" style="text-align: justify;">Selanjutnya, di SDN Kauman Magetan, kami berkomitmen untuk melanjutkan warisan yang telah ditetapkan oleh Guru Ibu Nanik. Kami akan terus memberikan pendidikan berkualitas dan mendukung perkembangan siswa secara holistik. Semoga kebaikan yang telah dia bawa ke sekolah ini akan terus mengalir ke generasi-generasi berikutnya.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Mengucapkan Selamat Jalan dengan Hati Penuh Haru</strong></p>
<p class="MsoNormal" style="text-align: justify;">Perpisahan dengan Guru Ibu Nanik adalah momen yang penuh haru, tetapi juga merupakan peluang untuk menghormati dan merayakan dedikasinya dalam dunia pendidikan. Kami mengucapkan selamat jalan kepada Guru Ibu Nanik dengan penuh rasa hormat dan haru, dan kami berterima kasih atas semua yang telah dia berikan kepada kami. Semoga perjalanan berikutnya penuh dengan kebahagiaan dan keberhasilan, dan semoga kenangan kami bersama akan selalu menghangatkan hati kita. Terima kasih, Guru Ibu Nanik.</p>',
        ]);
        Post::create([
            'category_id' => 2,
            'published_at' => now()->format('Y-m-d'),
            'title' => 'Ananda Mahfudz: Bintang Terang dari SDN Kauman Magetan yang Maju ke Tingkat Provinsi Jawa Timur O2SN Cabang Kids Athletic Putra',
            'slug' => 'ananda-mahfudz-bintang-terang-dari-sdn-kauman-magetan-yang-maju-ke-tingkat-provinsi-jawa-timur-o2sn-cabang-kids-athletic-putra',
            'image' => 'post-images/pMrVhdGp9w7GiTigLLr3ZFANzgS9eDdWGvgTOY1x.jpg',
            'excerpt' => 'Jawa Timur O2SN Cabang Kids Athletic Putra\r\nKeberhasilan dan prestasi seorang siswa adalah cermin da...',
            'body' => '<p class="MsoNormal" style="text-align: justify;"><strong>Jawa Timur O2SN Cabang Kids Athletic Putra</strong></p>
<p class="MsoNormal" style="text-align: justify;">Keberhasilan dan prestasi seorang siswa adalah cermin dari dedikasi, kerja keras, dan bakat yang dimilikinya. Di SDN Kauman Magetan, satu nama telah bersinar terang dalam cabang olahraga Kids Athletic Putra pada ajang O2SN tingkat Provinsi Jawa Timur: Ananda Mahfudz. Ananda Mahfudz telah memenangkan hati kita semua dengan dedikasinya untuk olahraga dan kemampuan atletik yang luar biasa.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Perjalanan Keberhasilan Ananda Mahfudz</strong></p>
<p class="MsoNormal" style="text-align: justify;">Ananda Mahfudz, seorang siswa dari SDN Kauman Magetan, telah menjadi sorotan di dunia olahraga setelah prestasinya yang mengesankan dalam cabang Kids Athletic Putra. Dengan semangat dan latihan yang gigih, Ananda Mahfudz berhasil mengatasi berbagai rintangan dalam kompetisi tingkat kabupaten hingga mencapai tingkat provinsi.</p>
<p class="MsoNormal" style="text-align: justify;">Dalam ajang O2SN tingkat provinsi Jawa Timur, Ananda Mahfudz telah menunjukkan keterampilan yang luar biasa dalam berbagai cabang atletik, termasuk lompat jauh, lari cepat, dan lempar lembing. Keberhasilan ini adalah buah dari kerja kerasnya, tekad untuk meraih prestasi terbaik, dan dukungan dari sekolah, guru, dan keluarga.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Dukungan SDN Kauman Magetan</strong></p>
<p class="MsoNormal" style="text-align: justify;">Prestasi Ananda Mahfudz adalah hasil dari kerjasama yang solid antara siswa, sekolah, dan komunitas. SDN Kauman Magetan telah memberikan dukungan yang tak tergantikan dalam persiapan dan partisipasi Ananda Mahfudz dalam O2SN. Guru-guru yang berpengalaman memberikan bimbingan dan pelatihan kepada Ananda Mahfudz, dan siswa-siswa lain juga memberikan dukungan moral yang kuat.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Harapan Untuk Masa Depan</strong></p>
<p class="MsoNormal" style="text-align: justify;">Ananda Mahfudz telah menunjukkan kepada kita semua bahwa dengan tekad dan kerja keras, kita dapat mencapai prestasi luar biasa. Ini adalah awal yang cerah untuk masa depannya dalam dunia olahraga. Kami berharap bahwa prestasinya ini akan memberikan inspirasi kepada siswa lain di SDN Kauman Magetan untuk mengejar impian mereka dan berusaha menjadi yang terbaik dalam bidang yang mereka pilih.</p>
<p class="MsoNormal" style="text-align: justify;">Prestasi Ananda Mahfudz juga merupakan alasan untuk merayakan di SDN Kauman Magetan. Semangat persatuan dan dukungan di sekolah ini adalah kunci bagi keberhasilan siswa, dan kami berharap bahwa prestasi-prestasi luar biasa seperti ini akan terus menjadi bagian dari sejarah sekolah kami.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Selamat dan Semangat Terus, Ananda Mahfudz!</strong></p>
<p class="MsoNormal" style="text-align: justify;">Kami ingin mengucapkan selamat kepada Ananda Mahfudz atas prestasinya yang luar biasa dalam cabang Kids Athletic Putra pada ajang O2SN tingkat Provinsi Jawa Timur. Semoga prestasi ini hanya menjadi awal dari perjalanan yang panjang dalam dunia olahraga. Semangat terus untuk terus berkembang dan meraih prestasi yang lebih besar di masa depan. Terima kasih atas kebanggaan dan inspirasi yang telah Ananda Mahfudz berikan kepada kita semua di SDN Kauman Magetan.</p>',
        ]);
        Post::create([
            'category_id' => 2,
            'published_at' => now()->format('Y-m-d'),
            'title' => 'Ananda Mahfudz Meraih Juara 1 dalam O2SN Cabor Kids Athletic Putra Kabupaten Magetan',
            'slug' => 'ananda-mahfudz-meraih-juara-1-dalam-o2sn-cabor-kids-athletic-putra-kabupaten-magetan',
            'image' => 'post-images/WYELIKSK5HZSSo2ciKOUoLUkH3h6drRnwHpJeu8I.jpg',
            'excerpt' => 'Keberhasilan seorang siswa dalam dunia olahraga adalah bukti nyata dari kerja keras, dedikasi, dan b...',
            'body' => '<p class="MsoNormal" style="text-align: justify;">Keberhasilan seorang siswa dalam dunia olahraga adalah bukti nyata dari kerja keras, dedikasi, dan bakat yang dimilikinya. Di SDN Kauman Magetan, satu nama telah mencuri perhatian dengan prestasi luar biasa di ajang O2SN Cabang Kids Athletic Putra di tingkat Kabupaten Magetan: Ananda Mahfudz. Ia meraih juara 1 dalam kompetisi ini dan menjadi sumber inspirasi bagi seluruh komunitas sekolah.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Jejak Prestasi Ananda Mahfudz</strong></p>
<p class="MsoNormal" style="text-align: justify;">Ananda Mahfudz, seorang siswa yang berbakat dan berdedikasi di SDN Kauman Magetan, telah membuktikan kemampuannya di cabang olahraga Kids Athletic Putra. Dengan semangat dan latihan yang tekun, ia berhasil melewati berbagai babak kompetisi, mulai dari tingkat sekolah hingga mencapai tingkat kabupaten.</p>
<p class="MsoNormal" style="text-align: justify;">Di ajang O2SN Kabupaten Magetan, Ananda Mahfudz tampil dengan gemilang dalam berbagai cabang atletik. Ia menampilkan kemampuan unggulnya dalam lompat jauh, lari cepat, lempar lembing, dan berbagai komponen olahraga lainnya. Prestasi ini merupakan hasil dari kerja keras dan komitmen tinggi yang telah ia tanamkan dalam latihan olahraga.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Dukungan Penuh dari SDN Kauman Magetan</strong></p>
<p class="MsoNormal" style="text-align: justify;">Prestasi luar biasa Ananda Mahfudz tidak lepas dari dukungan luar biasa yang diberikan oleh sekolahnya, SDN Kauman Magetan. Guru-guru dan pelatih olahraga telah memberikan bimbingan yang berharga dan pelatihan yang intensif untuk mempersiapkan Ananda Mahfudz untuk kompetisi tingkat kabupaten. Selain itu, siswa-siswa dan komunitas sekolah memberikan dukungan moral yang kuat, yang menjadikan atmosfer sekolah ini penuh semangat dan persatuan.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Harapan untuk Masa Depan</strong></p>
<p class="MsoNormal" style="text-align: justify;">Ananda Mahfudz adalah contoh nyata bahwa dengan kerja keras, disiplin, dan tekad kuat, seseorang dapat mencapai prestasi yang luar biasa. Prestasinya dalam O2SN Cabang Kids Athletic Putra merupakan langkah awal yang menjanjikan untuk masa depannya dalam dunia olahraga. Semoga ia terus mengembangkan bakat dan kemampuannya serta meraih prestasi yang lebih besar di tingkat yang lebih tinggi.</p>
<p class="MsoNormal" style="text-align: justify;">Prestasi Ananda Mahfudz juga menjadi kebanggaan bagi SDN Kauman Magetan. Ini adalah bukti nyata dari komitmen sekolah untuk mendukung pengembangan siswa dalam segala aspek kehidupan, termasuk dalam olahraga. Semoga keberhasilan seperti ini terus menjadi inspirasi bagi siswa-siswa lain di sekolah ini untuk mengejar impian mereka dan berusaha menjadi yang terbaik dalam bidang yang mereka pilih.</p>
<p class="MsoNormal" style="text-align: justify;"><strong>Selamat dan Semangat Terus, Ananda Mahfudz!</strong></p>
<p class="MsoNormal" style="text-align: justify;">Seluruh komunitas SDN Kauman Magetan ingin mengucapkan selamat kepada Ananda Mahfudz atas prestasinya yang mengagumkan dalam O2SN Cabang Kids Athletic Putra di tingkat Kabupaten Magetan. Semoga prestasi ini hanya menjadi awal dari banyak pencapaian luar biasa di masa depan. Teruskan semangat dan kerja kerasmu, dan kami semua berharap untuk melihatmu meraih kesuksesan yang lebih besar lagi. Terima kasih atas kebanggaan dan inspirasi yang telah Ananda Mahfudz berikan kepada kita semua di SDN Kauman Magetan.</p>',
        ]);
        Post::create([
            'category_id' => 1,
            'published_at' => now()->format('Y-m-d'),
            'title' => 'Pembentukan Karakter: Nilai-nilai Etika di SD Negeri Kauman Magetan',
            'slug' => 'pembentukan-karakter-nilai-nilai-etika-di-sd-negeri-kauman-magetan',
            'image' => 'post-images/lyZGsUkQJlmkuVwTKxguTsCylH1HehzZeYtO9fFm.webp',
            'excerpt' => 'Pembentukan karakter adalah salah satu aspek penting dalam pendidikan anak-anak di sekolah. SD Neger...',
            'body' => '<p>Pembentukan karakter adalah salah satu aspek penting dalam pendidikan anak-anak di sekolah. SD Negeri Kauman Magetan merupakan salah satu sekolah yang memiliki komitmen kuat dalam membentuk karakter siswa melalui penerapan nilai-nilai etika. Nilai-nilai etika ini menjadi dasar dalam membentuk pribadi yang baik, bertanggung jawab, dan memiliki integritas tinggi.</p>
<p>Salah satu nilai etika yang diterapkan di SD Negeri Kauman Magetan adalah kejujuran. Kejujuran diajarkan kepada siswa sebagai prinsip dasar dalam berinteraksi dengan orang lain. Siswa diajarkan untuk selalu berkata jujur, mengakui kesalahan, dan tidak melakukan tindakan curang. Dengan mengajarkan nilai kejujuran, sekolah ini berharap siswa dapat menjadi individu yang dapat dipercaya dan memiliki integritas tinggi.Selain kejujuran, nilai etika lain yang ditekankan di SD Negeri Kauman Magetan adalah disiplin. Siswa diajarkan untuk memiliki kedisiplinan dalam menjalankan tugas-tugas sekolah, mengikuti aturan, dan menghormati waktu. </p>
<p>Dengan mengajarkan nilai disiplin, sekolah ini berharap siswa dapat menjadi individu yang bertanggung jawab dan memiliki kemampuan untuk mengatur diri sendiri.Selanjutnya, nilai etika yang juga ditekankan di SD Negeri Kauman Magetan adalah kerjasama. Siswa diajarkan untuk bekerja sama dalam kelompok, saling membantu, dan menghargai kontribusi setiap individu. Melalui pembelajaran kerjasama, sekolah ini berharap siswa dapat menjadi individu yang mampu bekerja dalam tim, menghargai perbedaan, dan memiliki sikap empati terhadap orang lain.Selain itu, nilai etika yang ditekankan di SD Negeri Kauman Magetan adalah tanggung jawab.</p>
<p>Siswa diajarkan untuk bertanggung jawab terhadap tugas-tugas sekolah, lingkungan, dan diri sendiri. Dengan mengajarkan nilai tanggung jawab, sekolah ini berharap siswa dapat menjadi individu yang dapat diandalkan, memiliki rasa memiliki terhadap tugas-tugasnya, dan mampu mengambil keputusan yang baik.Penerapan nilai-nilai etika di SD Negeri Kauman Magetan tidak hanya dilakukan melalui pembelajaran di kelas, tetapi juga melalui kegiatan ekstrakurikuler, seperti kegiatan sosial, kegiatan lingkungan, dan kegiatan keagamaan. Melalui kegiatan-kegiatan ini, siswa diajarkan untuk mengaplikasikan nilai-nilai etika dalam kehidupan sehari-hari.Dengan adanya penerapan nilai-nilai etika di SD Negeri Kauman Magetan, diharapkan siswa dapat tumbuh menjadi individu yang memiliki karakter yang baik, bertanggung jawab, dan memiliki integritas tinggi. Pembentukan karakter yang baik ini akan membantu siswa dalam menghadapi tantangan di masa depan dan menjadi individu yang berkontribusi positif bagi masyarakat.</p>',
        ]);
        Post::create([
            'category_id' => 3,
            'published_at' => now()->format('Y-m-d'),
            'title' => 'Sekilas Tentang SD Negeri Kauman Magetan : Sejarah, Visi, dan Misi',
            'slug' => 'sekilas-tentang-sd-negeri-kauman-magetan-sejarah-visi-dan-misi',
            'image' => 'post-images/gJr5FfpU6kMSRRvvKx6VRmppXVcviKt2TJVV98y4.webp',
            'excerpt' => 'Visi: Terwujudnya Sekolah Dalam Prestasi Berdasarkan Iman dan Takwa\r\nVisi kami, \"Terwujudnya Sekolah...',
            'body' => '<p style="text-align: justify;"><strong>Visi: Terwujudnya Sekolah Dalam Prestasi Berdasarkan Iman dan Takwa</strong></p>
<p style="text-align: justify;">Visi kami, "Terwujudnya Sekolah Dalam Prestasi Berdasarkan Iman dan Takwa," menjadi sumber inspirasi dan arah perjalanan kami. Kami percaya bahwa keberhasilan sejati tidak hanya terletak pada pencapaian akademik, tetapi juga pada pembentukan karakter yang kokoh berlandaskan iman dan takwa.</p>
<p style="text-align: justify;"><strong>Misi Sekolah Dasar Negeri Kami</strong></p>
<ol style="text-align: justify;">
<li>
<p><strong>Meningkatkan dan menguatkan Iman dan Taqwa</strong>: Kami berkomitmen untuk mengembangkan nilai-nilai iman dan takwa di antara siswa kami melalui pendidikan agama, pembinaan karakter, dan praktik-praktik yang mempromosikan moralitas dan etika yang baik.</p>
</li>
<li>
<p><strong>Meningkatkan Kualitas Sumber Daya Manusia</strong>: Kami percaya bahwa sumber daya manusia adalah aset berharga dalam pencapaian visi kami. Melalui pelatihan dan pengembangan berkelanjutan, kami berusaha untuk memiliki staf pendidik dan karyawan yang terampil dan berkualitas.</p>
</li>
<li>
<p><strong>Unggul Dalam Bidang Akademik dan Non-Akademik</strong>: Sekolah kami berupaya untuk mencapai prestasi tinggi dalam berbagai aspek pendidikan, termasuk akademik dan non-akademik. Kami mendorong siswa kami untuk mengejar pengetahuan dan keterampilan yang holistik.</p>
</li>
<li>
<p><strong>Membentuk kerjasama yang menguasai ilmu pengetahuan, teknologi, dan seni serta kacakapan hidup</strong>: Kami mempersiapkan siswa kami dengan pengetahuan yang komprehensif, teknologi, seni, dan keterampilan hidup yang akan membantu mereka sukses dalam dunia yang terus berubah.</p>
</li>
<li>
<p><strong>Melaksanakan Pembelajaran Bernuansa PAKEM</strong>: Pembelajaran di sekolah kami diarahkan dengan metode PAKEM (Pendekatan, Aktivitas, Komunikasi, Evaluasi, dan Media), yang mempromosikan pembelajaran yang efektif, interaktif, dan menyenangkan.</p>
</li>
<li>
<p><strong>Menjalin kerjasama yang harmonis antara warga sekolah, komite, dan lingkungan</strong>: Kami menghargai kerjasama yang erat antara semua pihak terkait dengan sekolah. Dalam semangat harmoni, kami bekerja bersama untuk mencapai visi dan misi kami.</p>
</li>
</ol>
<p style="text-align: justify;">Sekolah Dasar Negeri Kauman berkomitmen untuk terus mewujudkan visi dan misi ini dalam praktik sehari-hari, menciptakan lingkungan pendidikan yang mempromosikan prestasi akademik dan moralitas, serta mempersiapkan siswa untuk menjadi pemimpin masa depan yang berintegritas dan sukses. Dengan pendekatan yang kokoh dan tujuan yang jelas, kami siap menghadapi masa depan dengan keyakinan dan harapan.</p>',
        ]);
    }
}
