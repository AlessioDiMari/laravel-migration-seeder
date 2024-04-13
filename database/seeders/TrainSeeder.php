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
     */
    public function run(Faker $faker): void
    {


        for ($i = 0; $i < 10; $i++) {
            
            $newTrain = new Train();

            $newTrain->agency = $faker->company();
            $newTrain->departure = $faker->city();
            $newTrain->arrival = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 week','+1 week');
            $newTrain->arrival_time = $faker->dateTimeBetween('+1 week','+2 week');
            $newTrain->train_code = $faker->randomNumber(4, true);
            $newTrain->carriages = $faker->numberBetween(1, 10);
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->is_canceled = $faker->boolean();

            $newTrain->save();
        }



    }
}
