<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            [
                'nama' => 'Andi Pratama, S.Pd.',
                'jabatan' => 'Kepala Lembaga',
                'deskripsi' => 'Lulusan Universitas Pendidikan Indonesia dengan pengalaman mengajar lebih dari 10 tahun di bidang bimbingan belajar.',
                'image' => null,
            ],
            [
                'nama' => 'Rina Susanti, M.Pd.',
                'jabatan' => 'Koordinator Kurikulum',
                'deskripsi' => 'Ahli kurikulum pendidikan dengan pengalaman mengembangkan modul pembelajaran inovatif untuk jenjang SD hingga SMA.',
                'image' => null,
            ],
            [
                'nama' => 'Budi Santoso, S.Si.',
                'jabatan' => 'Pengajar Matematika & IPA',
                'deskripsi' => 'Lulusan Institut Teknologi Bandung dengan metode pengajaran yang menyenangkan dan mudah dipahami siswa.',
                'image' => null,
            ],
            [
                'nama' => 'Dewi Lestari, S.Pd., M.Hum.',
                'jabatan' => 'Pengajar Bahasa',
                'deskripsi' => 'Spesialis pengajaran Bahasa Indonesia dan Bahasa Inggris dengan sertifikasi internasional TOEFL ITP score 600+.',
                'image' => null,
            ],
            [
                'nama' => 'Farhan Maulana, S.Kom.',
                'jabatan' => 'Admin & Marketing',
                'deskripsi' => 'Bertanggung jawab atas pengelolaan administrasi lembaga dan strategi pemasaran digital.',
                'image' => null,
            ],
        ];

        foreach ($members as $member) {
            TeamMember::create($member);
        }
    }
}
