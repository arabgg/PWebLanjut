<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'S01',
                'barang_nama' => 'Harddisk',
                'harga_beli' => '400000',
                'harga_jual' => '500000',
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'S02',
                'barang_nama' => 'Memory Card',
                'harga_beli' => '200000',
                'harga_jual' => '300000',
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'S03',
                'barang_nama' => 'Monitor',
                'harga_beli' => '900000',
                'harga_jual' => '1100000',
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'S04',
                'barang_nama' => 'Kijang',
                'harga_beli' => '40000000',
                'harga_jual' => '50000000',
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 2,
                'barang_kode' => 'S05',
                'barang_nama' => 'Trooper',
                'harga_beli' => '60000000',
                'harga_jual' => '75000000',
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'S06',
                'barang_nama' => 'Innova',
                'harga_beli' => '250000000',
                'harga_jual' => '300000000',
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 3,
                'barang_kode' => 'S07',
                'barang_nama' => 'Indomie Goreng',
                'harga_beli' => '2300',
                'harga_jual' => '3500',
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'S08',
                'barang_nama' => 'Indomie Kriuk',
                'harga_beli' => '2300',
                'harga_jual' => '3500',
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 3,
                'barang_kode' => 'S09',
                'barang_nama' => 'Indomie Soto',
                'harga_beli' => '2200',
                'harga_jual' => '3000',
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 'S10',
                'barang_nama' => 'Coca-Cola',
                'harga_beli' => '4500',
                'harga_jual' => '5500',
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 4,
                'barang_kode' => 'S11',
                'barang_nama' => 'Fanta',
                'harga_beli' => '4500',
                'harga_jual' => '5500',
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 4,
                'barang_kode' => 'S12',
                'barang_nama' => 'Cimory Marie Biskuit',
                'harga_beli' => '5800',
                'harga_jual' => '6500',
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 5,
                'barang_kode' => 'S13',
                'barang_nama' => 'Sepatu hiking',
                'harga_beli' => '230000',
                'harga_jual' => '300000',
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 5,
                'barang_kode' => 'S14',
                'barang_nama' => 'Kemeja Putih',
                'harga_beli' => '50000',
                'harga_jual' => '70000',
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'barang_kode' => 'S15',
                'barang_nama' => 'Celana Chinos',
                'harga_beli' => '50000',
                'harga_jual' => '70000',
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
