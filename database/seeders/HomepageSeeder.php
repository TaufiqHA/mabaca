<?php

namespace Database\Seeders;

use App\Models\Homepage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Homepage::firstOrCreate([],[
            'hero_image' => 'img/hero image.jpeg',
            'about' => 'Perpustakaan Mabaca Manennungeng UPT SPF SMP NEGERI 9 Makassar berdiri sejak tahun 1999, Dengan nomor pokok perpustakaan (NPP) 7371111D1000004 dan menempati gedung tersendiri seluas 359,12 m2. Perpustakaan di UPT SPF SMPN 9 Makassar memiliki fasilitas yang cukup memadai antara lain Ac, Televisi, Layar proyektor, Komputer, LCD, Kipas angin, Printer dan Foto copy. Adapun jenis koleksinya sebanyak 3.000 Judul dan 4.230 Eksemplar yaitu terdiri dari buku paket, buku fiksi dan non fiksi, referensi dan digital. Struktur organisasi perpustakaan UPT SPF SMPN 9 Makassar antara lain : terdiri dari Kepala sekolah, kepala perpustakaan, Pelayanan teknis, Pelayanan pemustaka, dan TIK.',
            'about_img_1' => 'img/gallery1',
            'about_img_2' => 'img/gallery2',
            'about_img_3' => 'img/gallery3',
            'about_img_4' => 'img/gallery4',
            'judul' => '3000',
            'eksempler' => '4230',
            'alamat' => 'Jl. Ir. Soetami No.26 Bulurokeng Makassar',
            'email' => 'perpussmpn9mks@gmail.com',
            'telepon' => '0822-9272-4200',
            'jam_buka' => '07:00-16:00'
        ]);
    }
}
