<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class kameraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 100 ; $i++) { 
            DB::table('kamera')->insert([
                'merk' => $faker->word(),
                'jenis' => $faker->word(),
                'foto' => $faker->imageUrl(640, 480, 'animals', true),
                'harga' => $faker->randomNumber(9, true)
            ]);
        }
    }
}
