<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 1,
                'supplier_nama' => 'Samsung',
                'supplier_alamat' => 'Seoul',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 2,
                'supplier_nama' => 'Toyota',
                'supplier_alamat' => 'Hiroshima',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 3,
                'supplier_nama' => 'Indomie',
                'supplier_alamat' => 'Bandulan ',
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
