<?php

namespace Database\Seeders;

use Faker\Provider\HtmlLorem;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jenis_artikels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_artikels')->insert([
            [
               'kode'=>'aa',
               'jenis' => 'Olaraga'
            ],
            [
               'kode'=>'ab',
               'jenis' =>'Politik',    
            ],
            [
                'kode'=>'ac',
                'jenis' =>'Sosial',    
            ],
            [
                'kode'=>'ad',
                'jenis' =>'Ekonomi',    
            ],


           
        ]);
    }
}
