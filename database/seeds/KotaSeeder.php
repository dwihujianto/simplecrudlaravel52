<?php

use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kotas')->insert([
        	[
        		'kota' 	=> 'Malang'
        	],
        	[
        		'kota'	=> 'Ponorogo'	
        	],
        	[
        		'kota'	=> 'Yogyakarta'
        	],
        	[
        		'kota'	=> 'Ngawi'
        	],
        	[
        		'kota'	=> 'Pati'
        	]
        ]);
    }
}
