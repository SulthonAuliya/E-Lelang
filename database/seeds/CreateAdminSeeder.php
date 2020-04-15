<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::truncate();
         $user =[
        	[
        		'name' => 'admin',
        		'email' => 'admin@gmail.com',
                'alamat' => 'Bandung',
        		'telp'	=>	"082115100177",
        		'isAdmin' => '1',
        		'password' => bcrypt('123456789')
        	],
        	[
        		'name' => 'petugas',
        		'email' => 'petugas@gmail.com',
                'alamat' => 'Bandung',
        		'telp'	=>	"082115100222",
        		'isPetugas' => '1',
        		'password' => bcrypt('123456789')
        	],
        	[
        		'name' => 'user',
        		'email' => 'user@gmail.com',
                'alamat' => 'Bandung',
        		'telp'	=>	"082115100333",
        		'password' => bcrypt('123456789')
        	]
        ];

        	foreach ($user as $key => $value) {
            User::create($value);
        }

    }
    }

