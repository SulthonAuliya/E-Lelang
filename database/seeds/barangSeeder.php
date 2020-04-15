<?php

use Illuminate\Database\Seeder;
use App\homeUSer;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        homeUser::truncate();
         $user =[
        	[
        		'user_id' => '3',
        		'nama_barang' => 'Asus ROG STRIX III',
                'tgl' => '2020-04-04',
        		'harga_awal'	=>	"15000000",
        		'desc' => 'Dijual Rugi Gan sudah mau upgrade ke seri high end',
        		'image' => '502088569.png',
        		'status' => 'pending'
        	],

        	[
        		'user_id' => '4',
        		'nama_barang' => 'Asus ROG Glacier Blue',
                'tgl' => '2020-03-08',
        		'harga_awal'	=>	"25000000",
        		'desc' => 'Deskripsi ASUS ROG Zephyrus S GX502 Gaming Laptop RTX2070 Special GLACIER BLUE
							Handcarry from Taipei, BOX diusahakan!!! SUPER RARE IN INDONESIA!
							Kelengkapan komplit!
							Harga sangat miring unit 100% BARU not refurbished.
							Sangat MURAH dengan RTX2070 i7-9750H dan LAYAR SUPER CEPAT 240Hz bukan 144Hz.

							RARE ITEM Asus ROG Zephyrus S GX502 Special Color GLACIER BLUE. Laptop gaming tipis super powerful di kelasnya! Design tipis dengan warna spesial GLACIER BLUE gak hanya keren buat gaming tapi sangat kece buat dipake nongkrong produktif sambil nugas.

							SPEC :

							Processor : Intel 9th Gen i7-9750H
							Graphics : NVIDIA GERFORCE RTX2070 8GB VRAM GDDR6
							Memory : 16GB 2666mhz
							Display : FHD 15.6inch with “240hz” Refresh rate and 3ms response time. 100% sRGB
							Storage : 512GB SSD

							Feel free to ask me for more details.',
        		'image' => '521026710.jpg',
        		'status' => 'finished'
        	],

        	[
        		'user_id' => '5',
        		'nama_barang' => 'Asus ROG Glacier Blue',
                'tgl' => '2020-03-08',
        		'harga_awal'	=>	"25000000",
        		'desc' => 'Deskripsi ASUS ROG Zephyrus S GX502 Gaming Laptop RTX2070 Special GLACIER BLUE
							Handcarry from Taipei, BOX diusahakan!!! SUPER RARE IN INDONESIA!
							Kelengkapan komplit!
							Harga sangat miring unit 100% BARU not refurbished.
							Sangat MURAH dengan RTX2070 i7-9750H dan LAYAR SUPER CEPAT 240Hz bukan 144Hz.

							RARE ITEM Asus ROG Zephyrus S GX502 Special Color GLACIER BLUE. Laptop gaming tipis super powerful di kelasnya! Design tipis dengan warna spesial GLACIER BLUE gak hanya keren buat gaming tapi sangat kece buat dipake nongkrong produktif sambil nugas.

							SPEC :

							Processor : Intel 9th Gen i7-9750H
							Graphics : NVIDIA GERFORCE RTX2070 8GB VRAM GDDR6
							Memory : 16GB 2666mhz
							Display : FHD 15.6inch with “240hz” Refresh rate and 3ms response time. 100% sRGB
							Storage : 512GB SSD

							Feel free to ask me for more details.',
        		'image' => '521026710.jpg',
        		'status' => 'accepted'
        	],

        	[
        		'user_id' => '3',
        		'nama_barang' => 'Minion Figure',
                'tgl' => '2020-04-01',
        		'harga_awal'	=>	"300000",
        		'desc' => 'Dijual Rugi Gan mau pensiun',
        		'image' => '1320968566.jpg',
        		'status' => 'accepted'
        	],

        	

        	[
        		'user_id' => '5',
        		'nama_barang' => 'Lukisan cantik',
                'tgl' => '2020-02-01',
        		'harga_awal'	=>	"300000",
        		'desc' => 'Dijual masih baru jadi',
        		'image' => '485495042.jpg',
        		'status' => 'finished'
        	],

        	[
        		'user_id' => '6',
        		'nama_barang' => 'Lukisan cantik',
                'tgl' => '2020-03-21',
        		'harga_awal'	=>	"300000",
        		'desc' => 'Dijual masih baru jadi',
        		'image' => '485495042.jpg',
        		'status' => 'accepted'
        	],

        	[
        		'user_id' => '4',
        		'nama_barang' => 'Minion Figure',
                'tgl' => '2020-04-01',
        		'harga_awal'	=>	"300000",
        		'desc' => 'Dijual Rugi Gan mau pensiun',
        		'image' => '1320968566.jpg',
        		'status' => 'pending'
        	],
        	
        	[
        		'user_id' => '3',
        		'nama_barang' => 'Asus ROG STRIX III',
                'tgl' => '2020-04-04',
        		'harga_awal'	=>	"15000000",
        		'desc' => 'Dijual Rugi Gan sudah mau upgrade ke seri high end',
        		'image' => '502088569.png',
        		'status' => 'pending'
        	],

        	[
        		'user_id' => '4',
        		'nama_barang' => 'Asus ROG Glacier Blue',
                'tgl' => '2020-03-08',
        		'harga_awal'	=>	"25000000",
        		'desc' => 'Deskripsi ASUS ROG Zephyrus S GX502 Gaming Laptop RTX2070 Special GLACIER BLUE
							Handcarry from Taipei, BOX diusahakan!!! SUPER RARE IN INDONESIA!
							Kelengkapan komplit!
							Harga sangat miring unit 100% BARU not refurbished.
							Sangat MURAH dengan RTX2070 i7-9750H dan LAYAR SUPER CEPAT 240Hz bukan 144Hz.

							RARE ITEM Asus ROG Zephyrus S GX502 Special Color GLACIER BLUE. Laptop gaming tipis super powerful di kelasnya! Design tipis dengan warna spesial GLACIER BLUE gak hanya keren buat gaming tapi sangat kece buat dipake nongkrong produktif sambil nugas.

							SPEC :

							Processor : Intel 9th Gen i7-9750H
							Graphics : NVIDIA GERFORCE RTX2070 8GB VRAM GDDR6
							Memory : 16GB 2666mhz
							Display : FHD 15.6inch with “240hz” Refresh rate and 3ms response time. 100% sRGB
							Storage : 512GB SSD

							Feel free to ask me for more details.',
        		'image' => '521026710.jpg',
        		'status' => 'finished'
        	],

        	[
        		'user_id' => '5',
        		'nama_barang' => 'Asus ROG Glacier Blue',
                'tgl' => '2020-03-08',
        		'harga_awal'	=>	"25000000",
        		'desc' => 'Deskripsi ASUS ROG Zephyrus S GX502 Gaming Laptop RTX2070 Special GLACIER BLUE
							Handcarry from Taipei, BOX diusahakan!!! SUPER RARE IN INDONESIA!
							Kelengkapan komplit!
							Harga sangat miring unit 100% BARU not refurbished.
							Sangat MURAH dengan RTX2070 i7-9750H dan LAYAR SUPER CEPAT 240Hz bukan 144Hz.

							RARE ITEM Asus ROG Zephyrus S GX502 Special Color GLACIER BLUE. Laptop gaming tipis super powerful di kelasnya! Design tipis dengan warna spesial GLACIER BLUE gak hanya keren buat gaming tapi sangat kece buat dipake nongkrong produktif sambil nugas.

							SPEC :

							Processor : Intel 9th Gen i7-9750H
							Graphics : NVIDIA GERFORCE RTX2070 8GB VRAM GDDR6
							Memory : 16GB 2666mhz
							Display : FHD 15.6inch with “240hz” Refresh rate and 3ms response time. 100% sRGB
							Storage : 512GB SSD

							Feel free to ask me for more details.',
        		'image' => '521026710.jpg',
        		'status' => 'accepted'
        	],

        	[
        		'user_id' => '3',
        		'nama_barang' => 'Minion Figure',
                'tgl' => '2020-04-01',
        		'harga_awal'	=>	"300000",
        		'desc' => 'Dijual Rugi Gan mau pensiun',
        		'image' => '1320968566.jpg',
        		'status' => 'accepted'
        	],

        	

        	[
        		'user_id' => '5',
        		'nama_barang' => 'Lukisan cantik',
                'tgl' => '2020-02-01',
        		'harga_awal'	=>	"300000",
        		'desc' => 'Dijual masih baru jadi',
        		'image' => '485495042.jpg',
        		'status' => 'finished'
        	],

        	[
        		'user_id' => '6',
        		'nama_barang' => 'Lukisan cantik',
                'tgl' => '2020-03-21',
        		'harga_awal'	=>	"300000",
        		'desc' => 'Dijual masih baru jadi',
        		'image' => '485495042.jpg',
        		'status' => 'accepted'
        	],

        	[
        		'user_id' => '4',
        		'nama_barang' => 'Minion Figure',
                'tgl' => '2020-04-01',
        		'harga_awal'	=>	"300000",
        		'desc' => 'Dijual Rugi Gan mau pensiun',
        		'image' => '1320968566.jpg',
        		'status' => 'pending'
        	],
        	
        	[
        		'user_id' => '3',
        		'nama_barang' => 'Asus ROG STRIX III',
                'tgl' => '2020-04-04',
        		'harga_awal'	=>	"15000000",
        		'desc' => 'Dijual Rugi Gan sudah mau upgrade ke seri high end',
        		'image' => '502088569.png',
        		'status' => 'pending'
        	],

        	[
        		'user_id' => '4',
        		'nama_barang' => 'Asus ROG Glacier Blue',
                'tgl' => '2020-03-08',
        		'harga_awal'	=>	"25000000",
        		'desc' => 'Deskripsi ASUS ROG Zephyrus S GX502 Gaming Laptop RTX2070 Special GLACIER BLUE
							Handcarry from Taipei, BOX diusahakan!!! SUPER RARE IN INDONESIA!
							Kelengkapan komplit!
							Harga sangat miring unit 100% BARU not refurbished.
							Sangat MURAH dengan RTX2070 i7-9750H dan LAYAR SUPER CEPAT 240Hz bukan 144Hz.

							RARE ITEM Asus ROG Zephyrus S GX502 Special Color GLACIER BLUE. Laptop gaming tipis super powerful di kelasnya! Design tipis dengan warna spesial GLACIER BLUE gak hanya keren buat gaming tapi sangat kece buat dipake nongkrong produktif sambil nugas.

							SPEC :

							Processor : Intel 9th Gen i7-9750H
							Graphics : NVIDIA GERFORCE RTX2070 8GB VRAM GDDR6
							Memory : 16GB 2666mhz
							Display : FHD 15.6inch with “240hz” Refresh rate and 3ms response time. 100% sRGB
							Storage : 512GB SSD

							Feel free to ask me for more details.',
        		'image' => '521026710.jpg',
        		'status' => 'finished'
        	],

        	[
        		'user_id' => '5',
        		'nama_barang' => 'Asus ROG Glacier Blue',
                'tgl' => '2020-03-08',
        		'harga_awal'	=>	"25000000",
        		'desc' => 'Deskripsi ASUS ROG Zephyrus S GX502 Gaming Laptop RTX2070 Special GLACIER BLUE
							Handcarry from Taipei, BOX diusahakan!!! SUPER RARE IN INDONESIA!
							Kelengkapan komplit!
							Harga sangat miring unit 100% BARU not refurbished.
							Sangat MURAH dengan RTX2070 i7-9750H dan LAYAR SUPER CEPAT 240Hz bukan 144Hz.

							RARE ITEM Asus ROG Zephyrus S GX502 Special Color GLACIER BLUE. Laptop gaming tipis super powerful di kelasnya! Design tipis dengan warna spesial GLACIER BLUE gak hanya keren buat gaming tapi sangat kece buat dipake nongkrong produktif sambil nugas.

							SPEC :

							Processor : Intel 9th Gen i7-9750H
							Graphics : NVIDIA GERFORCE RTX2070 8GB VRAM GDDR6
							Memory : 16GB 2666mhz
							Display : FHD 15.6inch with “240hz” Refresh rate and 3ms response time. 100% sRGB
							Storage : 512GB SSD

							Feel free to ask me for more details.',
        		'image' => '521026710.jpg',
        		'status' => 'accepted'
        	],

        	[
        		'user_id' => '3',
        		'nama_barang' => 'Minion Figure',
                'tgl' => '2020-04-01',
        		'harga_awal'	=>	"300000",
        		'desc' => 'Dijual Rugi Gan mau pensiun',
        		'image' => '1320968566.jpg',
        		'status' => 'accepted'
        	],

        	

        	[
        		'user_id' => '5',
        		'nama_barang' => 'Lukisan cantik',
                'tgl' => '2020-02-01',
        		'harga_awal'	=>	"300000",
        		'desc' => 'Dijual masih baru jadi',
        		'image' => '485495042.jpg',
        		'status' => 'finished'
        	],

        	[
        		'user_id' => '6',
        		'nama_barang' => 'Lukisan cantik',
                'tgl' => '2020-03-21',
        		'harga_awal'	=>	"300000",
        		'desc' => 'Dijual masih baru jadi',
        		'image' => '485495042.jpg',
        		'status' => 'accepted'
        	],

        	[
        		'user_id' => '4',
        		'nama_barang' => 'Minion Figure',
                'tgl' => '2020-04-01',
        		'harga_awal'	=>	"300000",
        		'desc' => 'Dijual Rugi Gan mau pensiun',
        		'image' => '1320968566.jpg',
        		'status' => 'pending'
        	],
        	
        ];

        	foreach ($user as $key => $value) {
            homeUser::create($value);
        }
    } 
}
