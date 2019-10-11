<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;


class UsersTableSeeder extends Seeder
{
	public function run()
	{
		$role_user = Role::where('name', 'user')->first();
		$role_admin = Role::where('name', 'admin')->first();

		$user = new User();
		$user->name = "mario";
		$user->email = "roland350under@gmail.com";
		$user->password = bcrypt('user123');
		$user->save();
		$user->roles()->attach($role_user);

		$user = new User();
		$user->name = "Chejo";
		$user->email = "makryounderground@hotmail.com";
		$user->password = bcrypt('admin123');
		$user->save();
		$user->roles()->attach($role_admin);



	#$users = 
	#	[
	#		'email' => 'chejoadmin@hvictoria.com',
	#		'password' => bcrypt('admin123'),
	#
	#	[
	#		'name' => 'user',
	#		'email' => 'user@hvictoria.com',
	#		'password' => bcrypt('user1234'),
	#	],

	#];
	#DB::table('users')->insert($users);
	}

}
