<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Models\Product;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
	function run()
	{
		DB::table('products')->truncate();
		$faker 										= Factory::create();

		try
		{
			$ctr = 0;
			$max = 150;
			
			foreach(range(0, $max) as $index)
			{
				$data = new product;
				$data->fill([
					'kode_barang'				=> $faker->username,
					'merk' 						=> $faker->username,
					'size'						=> rand(0,7),
					'base'						=> rand(0,1000),
				]);

				$data->save();

				print_r('Writing data product : ' . $ctr . ' from '. $max . "\n");
				$ctr+=1;
			}
		}
		catch (Exception $e) 
		{
    		echo 'Caught exception: ',  $e->getMessage(), "\n";
		}		
	}
}