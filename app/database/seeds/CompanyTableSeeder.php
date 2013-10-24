<?php

class CompanyTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('companies')->delete();
		
		Company::create(['name' => 'A Company']);
		Company::create(['name' => 'B Company']);
		Company::create(['name' => 'C Company']);
		Company::create(['name' => 'D Company']);
		Company::create(['name' => 'E Company']);
		Company::create(['name' => 'F Company']);
		Company::create(['name' => 'CHQ']);
	}

}
