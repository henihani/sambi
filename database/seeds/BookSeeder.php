<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
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
            DB::table('books')->insert([ 
                'inventaris' => $faker->unique()->name, 
                'tanggal_terima'=> $faker->dateTime,
                'judul' => $faker->name,
                'pengarang' => $faker->randomElement(['Butet','Andrea']),
                'penerbit' => $faker->name,
                'tahun_terbit' => $faker->randomElement(['2001','2019','2020','2004']),
                'semester' => $faker->randomElement(['Genap','Ganjil']),
                'kelas' => $faker->randomElement(['X','XI','XII','-']),
                'asal' => $faker->name,
                'harga' => $faker->name,
                'isbn' => $faker->randomDigit(20),
                'callnumber' => $faker->randomDigit(20),
                'lokasi' => $faker->name,
                'deskripsi'=> $faker->name,
                'sampul' => $faker->imageUrl($width = 120, $heigh=160),
                'categories_id' => $faker->randomDigitNot(0)

            ]);

            

        }
    }
}
