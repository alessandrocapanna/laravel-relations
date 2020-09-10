<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Song;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 4; $i++) {
          for ($j=0; $j < 8; $j++) {
            $new_song = new Song();
            $new_song->titolo = $faker->name;
            $new_song->genere = $faker->randomElement([
              'pop',
              'jax',
              'rock',
              'blues',
              'reggae',
              'rap',
              'metal',
              'emo',
              'indie',
            ]);
            $new_song->album_id = $i + 1;
            $new_song->save();
          }
      }
    }
}
