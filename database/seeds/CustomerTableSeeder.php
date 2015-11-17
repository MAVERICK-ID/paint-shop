<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Models\Customer;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
	function run()
	{
		DB::table('customers')->truncate();
		$faker 										= Factory::create();

		try
		{
			$ctr = 0;
			$max = 150;
			foreach(range(0, $max) as $index)
			{
				$data = new customer;
				$data->fill([
					'kode_customer'					=> $faker->name,
					'nama'							=> $faker->name,
					'alamat'						=> $faker->streetAddress,
					'nomor_hp'						=> $faker->phoneNumber,
					'nomor_rumah'					=> $faker->phoneNumber,
					'nama_toko'						=> $faker->word
				]);

				$data->save();

				print_r('Writing data customer : ' . $ctr . ' from '. $max . "\n");
				$ctr+=1;
			}
		}
		catch (Exception $e) 
		{
    		echo 'Caught exception: ',  $e->getMessage(), "\n";
		}		
	}
}