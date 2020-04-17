<?php

use Illuminate\Database\Seeder;
use App\lelang;

class lelangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        lelang::truncate();
         $lelang =[
        	[
        		'id_barang' => '2',
        		'tgl' => '2020-03-15',
                'harga_akhir' => '30000000',
        		'user_id'	=>	"3",
        	],

        	[
        		'id_barang' => '5',
        		'tgl' => '2020-02-15',
                'harga_akhir' => '1000000',
        		'user_id'	=>	"4",
        	],

        	[
        		'id_barang' => '9',
        		'tgl' => '2020-03-15',
                'harga_akhir' => '30000000',
        		'user_id'	=>	"6",
        	],

        	[
        		'id_barang' => '12',
        		'tgl' => '2020-02-08',
                'harga_akhir' => '1500000',
        		'user_id'	=>	"3",
        	],

        	[
        		'id_barang' => '16',
        		'tgl' => '2020-03-15',
                'harga_akhir' => '35000000',
        		'user_id'	=>	"5",
        	],

        	[
        		'id_barang' => '19',
        		'tgl' => '2020-03-25',
                'harga_akhir' => '1000000',
        		'user_id'	=>	"4",
        	],
        	
        ];

        	foreach ($lelang as $key => $value) {
            lelang::create($value);
        }
    }
}
