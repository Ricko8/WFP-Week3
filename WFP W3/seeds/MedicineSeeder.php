<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Cate 1
        DB::table('medicines')->insert([
            'generic_name'=>'fentanil',
            'form'=>'inj',
            'restriction_formula'=>'-',
            'description'=>'5 amp/kasus',
            'category'=>1,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>0
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'hidromorfon',
            'form'=>'tab',
            'restriction_formula'=>'-',
            'description'=>'30 tab/bulan.',
            'category'=>1,
            'faskes_tk1'=>1,
            'faskes_tk2'=>0,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'kodein',
            'form'=>'tab',
            'restriction_formula'=>'-',
            'description'=>'30 tab/bulan.',
            'category'=>1,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>0
        ]);
        // End Cate 1

        // Cate 2
        DB::table('medicines')->insert([
            'generic_name'=>'asam mefenamat',
            'form'=>'tab',
            'restriction_formula'=>'-',
            'description'=>'30 tab/bulan.',
            'category'=>2,
            'faskes_tk1'=>0,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'ibuprofen',
            'form'=>'tab',
            'restriction_formula'=>'-',
            'description'=>'30 tab/bulan.',
            'category'=>2,
            'faskes_tk1'=>0,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'ketoprofen',
            'form'=>'tab',
            'restriction_formula'=>'-',
            'description'=>'30 tab/bulan.',
            'category'=>2,
            'faskes_tk1'=>0,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        // End Cate 2

        // Cate 3
        DB::table('medicines')->insert([
            'generic_name'=>'amoksisilin',
            'form'=>'tab 250 mg',
            'restriction_formula'=>'-',
            'description'=>'10 hari',
            'category'=>3,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'ampisilin',
            'form'=>'inj 250 mg',
            'restriction_formula'=>'-',
            'description'=>'10 hari',
            'category'=>3,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'benzatin benzilpenisilin',
            'form'=>'inj',
            'restriction_formula'=>'-',
            'description'=>'2 vial/bulan.',
            'category'=>3,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>0
        ]);
        // End Cate 3

        // Cate 2
        DB::table('medicines')->insert([
            'generic_name'=>'alopurinol',
            'form'=>'tab',
            'restriction_formula'=>'-',
            'description'=>'30 tab/bulan.',
            'category'=>4,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>0
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'kolkisin',
            'form'=>'tab',
            'restriction_formula'=>'-',
            'description'=>'30 tab/bulan.',
            'category'=>4,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'probenesid',
            'form'=>'tab',
            'restriction_formula'=>'-',
            'description'=>'30 tab/bulan.',
            'category'=>4,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        // End Cate 2

        // Cate 2
        DB::table('medicines')->insert([
            'generic_name'=>'amitriptilin',
            'form'=>'tab',
            'restriction_formula'=>'-',
            'description'=>'5 tab/bulan',
            'category'=>5,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'gabapentin',
            'form'=>'kaps 100 mg',
            'restriction_formula'=>'-',
            'description'=>'60 kaps/bulan',
            'category'=>5,
            'faskes_tk1'=>0,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'karbamazepin',
            'form'=>'tab',
            'restriction_formula'=>'-',
            'description'=>'60 tab/bulan.',
            'category'=>5,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>0
        ]);
        // End Cate 2

        // Cate 2
        DB::table('medicines')->insert([
            'generic_name'=>'etil klorida',
            'form'=>'spray',
            'restriction_formula'=>'-',
            'description'=>'-',
            'category'=>6,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>0
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'lidokain',
            'form'=>'inj',
            'restriction_formula'=>'-',
            'description'=>'-',
            'category'=>6,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'bupivakain',
            'form'=>'inj',
            'restriction_formula'=>'-',
            'description'=>'-',
            'category'=>6,
            'faskes_tk1'=>0,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        // End Cate 2

        // Cate 2
        DB::table('medicines')->insert([
            'generic_name'=>'deksametason',
            'form'=>'inj',
            'restriction_formula'=>'-',
            'description'=>'20 mg/hari.',
            'category'=>7,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'difenhidramin',
            'form'=>'inj',
            'restriction_formula'=>'-',
            'description'=>'30 mg/hari.',
            'category'=>7,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'hidrokortison',
            'form'=>'inj',
            'restriction_formula'=>'-',
            'description'=>'-',
            'category'=>7,
            'faskes_tk1'=>0,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        // End Cate 2

        // Cate 2
        DB::table('medicines')->insert([
            'generic_name'=>'atropin',
            'form'=>'inj',
            'restriction_formula'=>'-',
            'description'=>'-',
            'category'=>8,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'efedrin',
            'form'=>'inj',
            'restriction_formula'=>'-',
            'description'=>'-',
            'category'=>8,
            'faskes_tk1'=>0,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'nalokson',
            'form'=>'inj',
            'restriction_formula'=>'-',
            'description'=>'-',
            'category'=>8,
            'faskes_tk1'=>0,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        // End Cate 2

        // Cate 2
        DB::table('medicines')->insert([
            'generic_name'=>'diazepam',
            'form'=>'inj',
            'restriction_formula'=>'-',
            'description'=>'10 amp/kasus,kecuali untuk kasus di ICU.',
            'category'=>9,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'fenitoin',
            'form'=>'kaps 30 mg*',
            'restriction_formula'=>'-',
            'description'=>'90 kaps/bulan',
            'category'=>9,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'fenobarbital',
            'form'=>'tab',
            'restriction_formula'=>'-',
            'description'=>'120 tab/bulan.',
            'category'=>9,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        // End Cate 2

        // Cate 2
        DB::table('medicines')->insert([
            'generic_name'=>'albendazol',
            'form'=>'tab',
            'restriction_formula'=>'-',
            'description'=>'-',
            'category'=>10,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'mebendazol',
            'form'=>'tab',
            'restriction_formula'=>'-',
            'description'=>'-',
            'category'=>10,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        DB::table('medicines')->insert([
            'generic_name'=>'prazikuantel',
            'form'=>'tab',
            'restriction_formula'=>'-',
            'description'=>'-',
            'category'=>10,
            'faskes_tk1'=>1,
            'faskes_tk2'=>1,
            'faskes_tk3'=>1
        ]);
        // End Cate 2
    }
}
