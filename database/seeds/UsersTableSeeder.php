<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	public function run()
	{
	$users = 
	[
		[
			'name' => 'chejo',
			'email' => 'chejoadmin@hvictoria.com',
			'password' => bcrypt('admin123'),
		],

		[
			'name' => 'user',
			'email' => 'user@hvictoria.com',
			'password' => bcrypt('user1234'),
		],

	];
	DB::table('users')->insert($users);
	}

}
