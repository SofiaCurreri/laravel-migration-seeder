<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       $train = new Train;

       $train->azienda = $faker->company();
       $train->stazione_partenza = $faker->city();
       $train->stazione_arrivo = $faker->city();
       $train->orario_partenza = $faker->time();
       $train->orario_arrivo = $faker->time();
       $train->codice_treno = $faker->numberBetween(9000, 10000);
       $train->num_carrozze = $faker->numberBetween(4, 17);
       $train->in_orario = $faker->boolean(); 
       $train->cancellato = $faker->boolean();

       $train->save();
    }
}