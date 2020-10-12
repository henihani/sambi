<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<10; $i++)
        { 
            DB::table('categories')->insert([ 
                'kategori' => $faker->unique()->name, 
                'nomor_kategori'=> $faker->randomDigit(10)
            ]);
        }
    }
}