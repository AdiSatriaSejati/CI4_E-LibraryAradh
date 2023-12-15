<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Agama',
            ],
            [
                'name' => 'Alam',
            ],
            [
                'name' => 'Aliran & Gaya Bahasa',
            ],
            [
                'name' => 'Arsitektur',
            ],
            [
                'name' => 'Barang Antik & Koleksi',
            ],
            [
                'name' => 'Berkebun',
            ],
            [
                'name' => 'Biografi & Autobiografi',
            ],
            [
                'name' => 'Bisnis & Ekonomi',
            ],
            [
                'name' => 'Desain',
            ],
            [
                'name' => 'Fiksi',
            ],
            [
                'name' => 'Fiksi Anak & Remaja',
            ],
            [
                'name' => 'Fiksi Dewasa',
            ],
            [
                'name' => 'Filsafat',
            ],
            [
                'name' => 'Fotografi',
            ],
            [
                'name' => 'Game & Aktivitas',
            ],
            [
                'name' => 'Hukum',
            ],
            [
                'name' => 'Humor',
            ],
            [
                'name' => 'Ilmu Sosial',
            ],
            [
                'name' => 'Keluarga & Hubungan',
            ],
            [
                'name' => 'Kerajinan & Hobi',
            ],
            [
                'name' => 'Kesehatan & Kebugaran',
            ],
            [
                'name' => 'Komik & Novel Grafis',
            ],
            [
                'name' => 'Komputer',
            ],
            [
                'name' => 'Matematika',
            ],
            [
                'name' => 'Medis',
            ],
            [
                'name' => 'Musik',
            ],
            [
                'name' => 'Nonfiksi Anak & Remaja',
            ],
            [
                'name' => 'Nonfiksi Dewasa',
            ],
            [
                'name' => 'Olahraga & Rekreasi',
            ],
            [
                'name' => 'Pendidikan',
            ],
            [
                'name' => 'Pengembangan Diri',
            ],
            [
                'name' => 'Persiapan Ujian',
            ],
            [
                'name' => 'Pertunjukan Seni',
            ],
            [
                'name' => 'Psikologi',
            ],
            [
                'name' => 'Puisi',
            ],
            [
                'name' => 'Referensi',
            ],
            [
                'name' => 'Resep & Masakan',
            ],
            [
                'name' => 'Rumah',
            ],
            [
                'name' => 'Sains',
            ],
            [
                'name' => 'Sejarah',
            ],
            [
                'name' => 'Seni',
            ],
            [
                'name' => 'Studi Bahasa Asing',
            ],
            [
                'name' => 'Teknologi & Teknik',
            ],
            [
                'name' => 'Transportasi',
            ],
            [
                'name' => 'Travel',
            ],
            [
                'name' => 'Tubuh, Pikiran & Jiwa',
            ]
        ];

        $this->db->table('categories')->insertBatch($data);
    }
}
