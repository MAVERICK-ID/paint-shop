<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Models\Employee;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
	function run()
	{
		DB::table('employees')->truncate();
		$faker 										= Factory::create();

		$akses 										= ['admin', 'supervisor', 'cashier'];

		try
		{
			$ctr = 0;
			$max = 50;
			
			foreach(range(0, $max) as $index)
			{
				$data = new employee;
				$data->fill([
					'username'					=> $faker->username,
					'password' 					=> bcrypt('admin'),
					'nama'						=> $faker->name,
					'akses'						=> $akses[rand(0,count($akses) - 1)],
				]);

				$data->save();

				print_r('Writing data employee : ' . $ctr . ' from '. $max . "\n");
				$ctr+=1;
			}
		}
		catch (Exception $e) 
		{
    		echo 'Caught exception: ',  $e->getMessage(), "\n";
		}		
	}
}