<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        $programs = [
            [
                'nama' => 'Bimbingan Belajar SD',
                'deskripsi' => 'Program bimbingan belajar untuk siswa SD meliputi Matematika, Bahasa Indonesia, dan Bahasa Inggris.',
                'detail' => 'Program ini dirancang khusus untuk siswa Sekolah Dasar (SD) kelas 1-6. Materi pembelajaran disesuaikan dengan kurikulum terbaru dan dikembangkan oleh pengajar berpengalaman. Fokus utama adalah membangun fondasi yang kuat dalam Matematika, Bahasa Indonesia, dan Bahasa Inggris.',
                'image' => null,
            ],
            [
                'nama' => 'Bimbingan Belajar SMP',
                'deskripsi' => 'Program intensif untuk siswa SMP dengan metode belajar interaktif dan modul lengkap.',
                'detail' => 'Program untuk siswa SMP kelas 7-9 ini mencakup pelajaran utama seperti Matematika, IPA, IPS, Bahasa Indonesia, dan Bahasa Inggris. Metode belajar interaktif dengan pendekatan problem-based learning membantu siswa memahami konsep secara mendalam.',
                'image' => null,
            ],
            [
                'nama' => 'Bimbingan Belajar SMA',
                'deskripsi' => 'Persiapan ujian nasional dan ujian masuk perguruan tinggi untuk siswa SMA.',
                'detail' => 'Program persiapan intensif untuk siswa SMA kelas 10-12. Tersedia program persiapan UN, SBMPTN, dan seleksi mandiri. Materi mencakup Matematika, Fisika, Kimia, Biologi, Ekonomi, dan Bahasa Inggris dengan pembahasan soal-soal tahun sebelumnya.',
                'image' => null,
            ],
            [
                'nama' => 'Les Privat',
                'deskripsi' => 'Program les privat satu lawan satu dengan pengajar profesional sesuai kebutuhan siswa.',
                'detail' => 'Program les privat memberikan pengalaman belajar personal dengan rasio 1:1. Siswa dapat memilih mata pelajaran, jadwal, dan lokasi belajar. Pengajar kami adalah lulusan universitas terkemuka yang telah berpengalaman mengajar minimal 3 tahun.',
                'image' => null,
            ],
            [
                'nama' => 'Persiapan UTBK-SNBT',
                'deskripsi' => 'Program khusus persiapan ujian UTBK-SNBT dengan simulasi dan tryout berkala.',
                'detail' => 'Program persiapan UTBK-SNBT dirancang untuk calon mahasiswa yang ingin masuk perguruan tinggi negeri. Program ini mencakup persiapan Tes Skolastik (Potensi Kognitif, Penalaran Umum, Pengetahuan dan Pemahaman Umum, Pemahaman Bacaan dan Menulis) dan Tes Kearahawanan (Literasi, Pemahaman Umum Sains dan Teknologi). Tersedia 10 kali tryout simulasi dengan pembahasan detail.',
                'image' => null,
            ],
        ];

        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}
