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
            DB::table('members')->insert([ 
                'nomor_anggota' => $faker->unique()->numberBetween($min = 1, $max = 50), 
                'nama'=> $faker->name,
                'nomor_identitas' => $faker->unique()->randomDigit(10),
                'jabatan' => $faker->randomElement(['Guru','Siswa']),
                'jurusan_gurumapel' => $faker->name,
                'kelas' => $faker->randomElement(['X','XI','XII','-']),
                'jenis_kelamin' => $faker->randomElement(['Laki-laki','Perempuan']),
                'tempat_lahir' => $faker->country,
                'tanggal_lahir' => $faker->dateTimeBetween('1970-01-01', '2019-12-31')->format('Y-m-d H:i:s'),
                'alamat' => $faker->country
            ]);
        }
    }
}
