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
                'barang_kode' => 'ELK001',
                'barang_nama' => 'AC',
                'harga_beli' => 3000000,
                'harga_jual' => 5000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'ELK002',
                'barang_nama' => 'Kipas Angin',
                'harga_beli' => 350000,
                'harga_jual' => 400000,
            ],  
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'PKN001',
                'barang_nama' => 'Kemeja',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],  
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'PKN002',
                'barang_nama' => 'Hoodie',
                'harga_beli' => 240000,
                'harga_jual' => 300000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'MKN001',
                'barang_nama' => 'Nasi Padang',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],   
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'MKN002',
                'barang_nama' => 'Soto',
                'harga_beli' => 10000,
                'harga_jual' => 13000,
            ],   
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'MNM001',
                'barang_nama' => 'Nutrisari',
                'harga_beli' => 2000,
                'harga_jual' => 4000,
            ],   
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'MNM002',
                'barang_nama' => 'Indomilk',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
            ],   
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'PRB001',
                'barang_nama' => 'Kasur',
                'harga_beli' => 2000000,
                'harga_jual' => 3000000,
            ],   
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'PRB002',
                'barang_nama' => 'Lemari',
                'harga_beli' => 250000,
                'harga_jual' => 300000,
            ],    
        ];
        DB::table('m_barang')->insert($data);
    }
}
