<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $galleries = [
            [
                'judul' => 'Kegiatan Belajar Kelas SD',
                'image' => 'gallery/kelas-sd.jpg',
            ],
            [
                'judul' => 'Sesi Les Privat',
                'image' => 'gallery/les-privat.jpg',
            ],
            [
                'judul' => 'Tryout UTBK-SNBT',
                'image' => 'gallery/tryout-utbk.jpg',
            ],
            [
                'judul' => 'Wisuda Siswa',
                'image' => 'gallery/wisuda.jpg',
            ],
            [
                'judul' => 'Classroom Session SMP',
                'image' => 'gallery/classroom-smp.jpg',
            ],
        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}
