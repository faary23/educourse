<?php

namespace Database\Seeders;

use App\Models\Bimbel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BimbelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bimbel')->insert([
            [
                'img' => 'sinotif.jpg',
                'title' => 'Sinotif',
                'description' => 'Bimbingan Kursus Matematika, Fisika & Kimia
                                Layanan 24 jam nonstop!
                                Siswa bisa bertanya soal 24jam melalui aplikasi Tanya Jawab Soal dan mengulang pelajaran di situs Seratusinstitute.com.
                                Belajar langsung dari ahlinya!
                                Guru kami spesialis di bidangnya dan telah melalui pelatihan serta bersertifikasi khusus.',
                'link' => 'https://campaign.sinotif.com/',
                'status' => 'Online',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'owl.jpg',
                'title' => 'Owl Bimbel',
                'description' => 'Bimbel ini berada di Surabaya Barat tepatnya di Sukolilo',
                'link' => 'Surabaya Barat Sukolilo Cluster Residence no 34',
                'status' => 'Offline',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'nurulfikri.png',
                'title' => 'Bimbel Nurul Fikri',
                'description' => 'Bimbel Terbaik di Indonesia untuk Siswa SD, SMP, SMA, dan GAP YEAR.
                                Partner belajar terbaik sejak 1985! Kami adalah pilihan utama bagi mereka yang memiliki semangat mencapai prestasi akademik tertinggi.
                                Aplikasi online Bimbel NF yang menyediakan ribuan video pembelajaran, ribuan latihan soal, modul digital interaktif yang terkoneksi dengan zuperbook, portofolio hasil belajar siswa, serta monitoring kehadiran dan tugas',
                'link' => 'https://www.bimbelnurulfikri.id/',
                'status' => 'Online',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'inklusif.jpeg',
                'title' => 'Inklusif',
                'description' => 'Inklusif merupakan bimbingan belajar online yang dapat diikuti dari manapun',
                'link' => 'Banyuwangi Genteng GPM Maron',
                'status' => 'Offline',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'sky.png',
                'title' => 'Sky',
                'description' => 'Pertama kali memulai kegiatannya sebagai lembaga kursus pada bulan Mei 2006 di kawasan Citra 3, Kalideres, Jakarta Barat. 
                                Hingga saat ini Bimbingan Belajar SKY masih terus beroperasi dan terus berusaha mengembangkan diri, antara lain dengan proses seleksi tenaga pengajar, peningkatan kualitas pengajar, uji coba metode-metode terbaru, dan berbagai upaya lainnya untuk menjadikan seluruh Siswa Bimbingan Belajar SKY mendapatkan layanan yang terbaik.',
                'link' => 'https://bimbelsky.com/',
                'status' => 'Online',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'polisi.jpeg',
                'title' => 'Bimbel Polisi',
                'description' => 'Tempat berkumpulnya para calon abdi negara untuk berproses berlokasi di Jawa Timur tepatnya di Banyuwangi',
                'link' => 'Banyuwangi Kota Glagah Utara SMAN 1 Glagah',
                'status' => 'Offline',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'bintangpelajar.png',
                'title' => 'Bintang pelajar',
                'description' => '1 Soal 1 Menit, Logic 5 LT, Fokus Materi Penalaran dan skolastik UTBK SNBT, 1 Siswa 1 Guru Pembimbing Bid Studi (Kedokteran), Guru Ahli UTBK, Harga hanya 1 juta-an per bulan
                                Sinkronisasi dengan kurikulum sekolah, Program Anak Emas (PAES), Math clinic dan konsultasi akademik
                                Desain program dan TO selalu update, TO berbasis CAT (Labschool), Bimbingan, Psikotest dan wawancara tahap akhir, Bahan Ajar khusus yang prediktif sesuai seklan',
                'link' => 'https://www.bintangpelajar.com/',
                'status' => 'Online',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'teman.png',
                'title' => 'Teman Belajar',
                'description' => 'Teman belajar kita menyediakan fitur bimbingan belajar dengan mentor mentor berpengalaman dan bersertifikat mengasyikkan bermodulkan materi pelajaran kurikulum terbaru',
                'link' => 'Menyesuaikan Lokasi dari para customer ',
                'status' => 'Offline',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'tridaya.png',
                'title' => 'Tridaya Course',
                'description' => 'Tridaya Digital Learning (TDL) merupakan salah satu layanan pendidikan yang disediakan oleh Lembaga Pendidikan Tridaya bagi siswa yang ingin merasakan belajar bersama Tridaya tanpa harus datang ke lokasi unit Tridaya karena semua layanan yang ada di TDL menggunakan sistem online.
                                Mulai dari proses pendaftaran, pembayaran, layanan belajar, evaluasi, konsultasi serta lainnya dilaksanakan secara online.
                                Proses belajar online menggunakan aplikasi zoom yang interaktif, menggunakan Sistem Pendekatan Individu (SPI) untuk siswa jenjang SD, SMP dan SMA dimana pun berada. Bergabung dan belajar bersama Tridaya Digital Learning (TDL) untuk belajar online yang interaktif, siswa cepat paham materi belajar.',
                'link' => 'https://tridayaonline.com/',
                'status' => 'Online',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
