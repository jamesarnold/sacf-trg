<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();

		User::create(
			array(
				'email' => 'jamesarnolduk@gmail.com',
				'forename' => 'James',
				'surname' => 'Arnold',
				'rank' => 'LT',
				'telephone' => '0123456789',
				'password' => Hash::make('password'),
			)
		);
	}

}
