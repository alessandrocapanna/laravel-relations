<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Artist;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
          $new_artist = new Artist();
          $new_artist->nome = $faker->name;
          $new_artist->sesso = $faker->randomElement(['uomo','donna']);
          $new_artist->anni = $faker->numberBetween(20, 99);
          $new_artist->save();
        }
    }
}
