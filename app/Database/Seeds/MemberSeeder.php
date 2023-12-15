<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\MemberModel;

class MemberSeeder extends Seeder
{
    public function run()
    {
        $memberModel = new MemberModel();

        // Masukkan data member secara manual
        $data = [
            [
                'uid'           => '1', // Ubah dengan UID yang diinginkan
                'first_name'    => 'Adi',
                'last_name'     => 'Satria Sejati',
                'email'         => '12221455@bsi.ac.id',
                'phone'         => '+6282136177589',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01', // Ubah dengan tanggal lahir yang diinginkan
                'gender'        => 1, // 1 untuk laki-laki, 2 untuk perempuan
            ],
            [
                'uid'           => '2',
                'first_name'    => 'Agung',
                'last_name'     => 'Pujianto',
                'email'         => '12221414@bsi.ac.id',
                'phone'         => '+6281211234081',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 1,
            ],
            [
                'uid'           => '3',
                'first_name'    => 'Albar',
                'last_name'     => 'Sanji',
                'email'         => '12220100@bsi.ac.id',
                'phone'         => '+6285722046805',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 1,
            ],
            [
                'uid'           => '4',
                'first_name'    => 'Annisa',
                'last_name'     => 'Rahma Pyarry',
                'email'         => '12220510@bsi.ac.id',
                'phone'         => '+6287826348021',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 2,
            ],
            [
                'uid'           => '5',
                'first_name'    => 'Arya',
                'last_name'     => 'Dillah',
                'email'         => '12220383@bsi.ac.id',
                'phone'         => '+6289647352044',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 1,
            ],
            [
                'uid'           => '6',
                'first_name'    => 'Dani',
                'last_name'     => 'Saputra',
                'email'         => '12221446@bsi.ac.id',
                'phone'         => '+6285692785138',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 1,
            ],
            [
                'uid'           => '7',
                'first_name'    => 'Devi',
                'last_name'     => 'Syarani Yasmir',
                'email'         => '12221201@bsi.ac.id',
                'phone'         => '+6283872742269',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 2,
            ],
            [
                'uid'           => '8',
                'first_name'    => 'Febrian',
                'last_name'     => 'Sitorus',
                'email'         => '12220451@bsi.ac.id',
                'phone'         => '+6289630399769',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 1,
            ],
            [
                'uid'           => '9',
                'first_name'    => 'Heri',
                'last_name'     => 'Setiawan',
                'email'         => '12220035@bsi.ac.id',
                'phone'         => '+6285882864757',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 1,
            ],
            [
                'uid'           => '10',
                'first_name'    => 'Misbah',
                'last_name'     => 'Hayati',
                'email'         => '12220146@bsi.ac.id',
                'phone'         => '+6285359337121',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 2,
            ],
            [
                'uid'           => '11',
                'first_name'    => 'Muhammad',
                'last_name'     => 'Rifaldi',
                'email'         => '12220489@bsi.ac.id',
                'phone'         => '+6281517806597',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 1,
            ],
            [
                'uid'           => '12',
                'first_name'    => 'Muhammad',
                'last_name'     => 'Taufiq Rendradi',
                'email'         => '12220204@bsi.ac.id',
                'phone'         => '+6289637573537',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 1,
            ],
            [
                'uid'           => '13',
                'first_name'    => 'Nindita',
                'last_name'     => 'Ayu Aurilia',
                'email'         => '12221216@bsi.ac.id',
                'phone'         => '+6285692383733',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 2,
            ],
            [
                'uid'           => '14',
                'first_name'    => 'Petrus',
                'last_name'     => 'E.R Manullang',
                'email'         => '12221257@bsi.ac.id',
                'phone'         => '+6281213881088',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 1,
            ],
            [
                'uid'           => '15',
                'first_name'    => 'Renald',
                'last_name'     => 'Saputra Pangestu Nugroho',
                'email'         => '12221200@bsi.ac.id',
                'phone'         => '+6282249652464',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 1,
            ],
            [
                'uid'           => '16',
                'first_name'    => 'Ryan',
                'last_name'     => 'Ramahdan',
                'email'         => '12220098@bsi.ac.id',
                'phone'         => '+62895374774204',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 1,
            ],
            [
                'uid'           => '17',
                'first_name'    => 'Yustiana',
                'last_name'     => '',
                'email'         => '12220642@bsi.ac.id',
                'phone'         => '+6285921184411',
                'address'       => 'Tangerang',
                'date_of_birth' => '2024-01-01',
                'gender'        => 2,
            ],
            // Tambahkan data lainnya jika diperlukan
        ];

        // Masukkan data ke dalam tabel menggunakan model
        foreach ($data as $member) {
            $memberModel->insert($member);
        }
    }
}
