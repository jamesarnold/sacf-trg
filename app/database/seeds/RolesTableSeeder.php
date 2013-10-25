<?php

class RolesTableSeeder extends Seeder
{

	public function run()
	{

		Db::table('roles')->delete();

		Role::create(['name' => 'Administrator']);
		Role::create(['name' => 'Detachment Staff']);
		Role::create(['name' => 'Detachment Commander']);
		Role::create(['name' => 'Company Training Officer']);
		Role::create(['name' => 'Company Commander']);
		Role::create(['name' => 'CFATO']);
		Role::create(['name' => 'County Training Officer']);
		Role::create(['name' => 'QM']);
		Role::create(['name' => 'CAA']);
		Role::create(['name' => 'FCO']);
	}

}
