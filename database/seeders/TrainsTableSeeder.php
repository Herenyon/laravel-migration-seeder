<?php

namespace Database\Seeders;

use App\Models\Trains;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $newTrain = new Trains();

        // $newTrain->id = 4;
        // $newTrain->azienda = 'Trenitalia';
        // $newTrain->stazione_di_partenza = 'Bologna';
        // $newTrain->stazione_di_arrivo = 'Milano';
        // $newTrain->orario_di_partenza = '2023-05-09 09:55:00';
        // $newTrain->orario_di_arrivo = '2023-05-09 11:05:00';
        // $newTrain->codice_treno = 38290;
        // $newTrain->numero_carrozze = 5;
        // $newTrain->in_orario = 1;
        // $newTrain->cancellato = 0;
        // $newTrain->save();
        for ($i = 1; $i < 20; $i++) {
            $newTrain = new Trains();

            $newTrain->id = $i;
            $newTrain->azienda =
                $faker->randomElement([
                    'Trenitalia', 'Italo', 'Frecciarossa', 'Frecciargento', 'Eurocity'
                ]);

            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();

            $newTrain->orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');

            $newTrain->orario_di_arrivo = $faker->dateTimeBetween('-1 week', '+1 week');

            $newTrain->codice_treno = $faker->numerify('#####');
            $newTrain->numero_carrozze = $faker->numberBetween(2, 12);
            $newTrain->in_orario = $faker->numberBetween(0, 1);;
            $newTrain->cancellato = $faker->numberBetween(0, 1);;
            $newTrain->save();
        }
    }
}
