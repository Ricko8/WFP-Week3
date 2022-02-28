<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'=>'ANALGESIK NARKOTIK',
            'description'=>'Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.'
        ]);
        DB::table('categories')->insert([
            'name'=>' ANALGESIK NON NARKOTIK',
            'description'=>'Ini obat'
        ]);
        DB::table('categories')->insert([
            'name'=>'ANTIBAKTERI',
            'description'=>' Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.'
        ]);
        DB::table('categories')->insert([
            'name'=>'ANTIPIRAI',
            'description'=>'Ini obat'
        ]);
        DB::table('categories')->insert([
            'name'=>' NYERI NEUROPATIK',
            'description'=>' Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.'
        ]);
        DB::table('categories')->insert([
            'name'=>'ANESTETIK',
            'description'=>'Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit;'
        ]);
        DB::table('categories')->insert([
            'name'=>'ANTIALERGI',
            'description'=>'Untuk nyeri berat yang memerlukan terapi opioid jangka panjang, around-the-clock.'
        ]);
        DB::table('categories')->insert([
            'name'=>'ANTIDOT',
            'description'=>'Ini obat'
        ]);
        DB::table('categories')->insert([
            'name'=>'ANTIEPILEPSI',
            'description'=>'Hanya untuk tindakan anestesi yang diberikan dokter anestesi.'
        ]);
        DB::table('categories')->insert([
            'name'=>'ANTIINFEKSI',
            'description'=>'Ini obat'
        ]);
    }
}
