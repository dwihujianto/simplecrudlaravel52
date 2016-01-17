<?php

use Illuminate\Database\Seeder;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penduduks')->insert([
        	[
        		'nama'			=> 'Dwi Hujianto',
        		'jenis_kelamin'	=> 'L',
        		'alamat'		=> 'Ngrayun,Dkh Jati',
        		'id_kota'		=> 1
        	],
        	[
        		'nama'			=> 'Mufit Apriliani',
        		'jenis_kelamin'	=> 'P',
        		'alamat'		=> 'Ngrayun,Dkh Jati',
        		'id_kota'		=> 2
        	],
        	[
        		'nama'			=> 'Candra Puspitoyono',
        		'jenis_kelamin'	=> 'L',
        		'alamat'		=> 'Muyungan,Geneng',
        		'id_kota'		=> 5
        	],
        	[
        		'nama'			=> 'Tri Haryono',
        		'jenis_kelamin'	=> 'L',
        		'alamat'		=> 'Pondok Indah Baru',
        		'id_kota'		=> 1
        	]
        ]);
    }
}
