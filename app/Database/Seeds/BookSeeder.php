<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        // populate racks & categories table first, avoid foreign key constraint fail
        // isi data tabel rak dan kategori dahulu, menghindari kegagalan fk contstraint
        $this->call('RackSeeder');
        $this->call('CategorySeeder');

        $this->call('BookFabricatorSeeder');

        $this->call('BookStockSeeder');
    }
}
