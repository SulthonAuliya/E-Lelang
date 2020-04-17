<?php

use Illuminate\Database\Seeder;
use App\harga;

class hargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        harga::truncate();
         $harga =[
        	[
        		'id_barang' => '2',
                'harga' => '30000000',
        		'user_id'	=>	"3",
        	],

        	[
        		'id_barang' => '5',
                'harga' => '1000000',
        		'user_id'	=>	"4",
        	],

        	[ 
        		'id_barang' => '9',
                'harga' => '30000000',
        		'user_id'	=>	"6",
        	],

        	[
        		'id_barang' => '12',
                'harga' => '1500000',
        		'user_id'	=>	"3",
        	],

        	[
        		'id_barang' => '16',
                'harga' => '35000000',
        		'user_id'	=>	"5",
        	],

        	[
        		'id_barang' => '19',
                'harga' => '1000000',
        		'user_id'	=>	"4",
        	],
        	
        ];

        	foreach ($harga as $key => $value) {
            harga::create($value);
        }
    }
}
