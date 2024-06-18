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
                'description' => 'Belajar fokus dan menyenangkan, di dampingi oleh tutor2 yg perpengalaman dari Perguruan tinggi negeri maupun swasta yang ternama',
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
                'description' => 'Yayasan ini berkomitmen penuh untuk dapat terus berkontribusi aktif dalam mengembangkan kompetensi serta potensi yang dimiliki oleh masyarakat guna mewujudkan masyarakat yang mandiri dan sejahtera melalui program belajar dan pelatihan yang bermanfaat',
                'link' => 'Rusun Cinta Kasih Tzu Chi Blok tomat B2 no 1a. Cengkareng, Jakarta Barat',
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
                'description' => 'Teman belajar kita merupakan Platform Tempat Bimbingan Belajar berbasis offline yang relatif bisa dimana saja dan kapan saja bimbingan belajar dengan mentor berpengalaman dan bersertifikat mengasyikkan bermodulkan materi pelajaran kurikulum terbaru',
                'link' => 'https://www.studytogether.com/ ',
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
            [
                'img' => 'sigma.png',
                'title' => 'Sigma Bimbel',
                'description' => 'SIGMA adalah Bimbingan Belajar EKSAKTA dan Pengembangan Diri anak TERBAIK spesialis pada bidang matematika segera daftarkan putra-putri anda sekarang juga',
                'link' => 'J4MX+F6P, Dusun Krajan, Genteng Kulon, Kec. Genteng, Kabupaten Banyuwangi, Jawa Timur 68465',
                'status' => 'Offline',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'dicoding.jpeg',
                'title' => 'Dicoding Indonesia',
                'description' => 'Sebagai platform edukasi teknologi, pengembangan skill para developer adalah fokus Dicoding. Untuk mencapainya, tersedia berbagai kelas online, program pelatihan, dan sertifikasi pemrograman dengan kualitas yang terjamin serta 2 layanan utama: Code Review & Forum Diskusi.',
                'link' => 'https://www.dicoding.com/',
                'status' => 'Online',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'alamprivat.jpeg',
                'title' => 'Alam Privat',
                'description' => 'Bimbingan Belajar Alam Privat Dengan Gerakan Semangat Berkarakter, Berprestasi Dan Sukses Dibentuk Dari Keinginan Sebuah Tim Tutor Yang Sudah 10 Tahun Bekerja Sama Untuk Memberikan Layanan Terbaik Bagi Siswa Yang Dibimbing Dan Masyarakat Luas Melalui Program Bimbingan Privat.',
                'link' => 'Jalan KH Wahid Hasyim 101, Dsn Kopen, Genteng Kulon, Genteng, Banyuwangi Banyuwangi Kesilir Pesanggaran Banyuwangi Kecamatan Genteng, Pedotan, Dusun Kopen, Kec. Bangorejo, Kabupaten Banyuwangi, Jawa Timur 68465',
                'status' => 'Offline',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'lavender.png',
                'title' => 'Bimbel Lavender',
                'description' => 'Bimbel Online UTBK Lavender merupakan tempat bimbel online persiapan UTBK dan Ujian Mandiri PTN 2024 untuk kamu siswa gapyear/alumni maupun kelas XII yang ingin mempersiapkan diri menghadapi ujian masuk PTN seperti UTBK, SIMAK UI, IUP UGM, dll. dengan sistem online.',
                'link' => 'https://bimbellavender.com/bimbel/bimbel-online/',
                'status' => 'Online',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'studyhouse.jpeg',
                'title' => 'Study house',
                'description' => 'StudyHouse mengedepankan mutu kualitas dengan menghadirkan pengajar terbaik dari Perguruan Tinggi Ternama. Proses seleksi penerimaan pengajar melalui sistem Berlapis, demi mendapatkan kualitas pengajar terbaik. Delapan tahun sudah Studyhouse dengan tentor tentor handal mendampingi peserta didik agar mendapatkan hasil optimal dalam menghadapi PAS, UKK, UN, atau meraih cita-cita diterima di sekolah dan perguruan tinggi favorit.',
                'link' => 'Jl. Mojopahit 32, Surabaya (Belakang St. Louis Surabaya)',
                'status' => 'Offline',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'studiobelajar.png',
                'title' => 'Studio Belajar',
                'description' => 'Les privat dengan guru terbaik dari seluruh Indonesia. Topik dan jam belajar kamu sendiri yang menentukan. Belajar via Google Hangout atau Zoom Meeting. Biaya: Rp250rb per sesi @ 2 jam atau Rp950rb per bulan untuk 4 sesi @ 2 jam.',
                'link' => 'https://www.studiobelajar.com/bimbel-online/',
                'status' => 'Online',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'rycourse.jpeg',
                'title' => 'RY Course',
                'description' => 'Merupakan tempat bimbingan belajar mata pelajaran kimia dengan tenaga ahli khusus yang dipersiapkan untuk masuk perguruan tinggi negeri pilihan dengan jurusan tujuan Teknik Kimia, Kimia Murni dan Jurusan selinier lainnya',
                'link' => 'RT.06/RW.08, Baranangsiang, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16143',
                'status' => 'Offline',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
