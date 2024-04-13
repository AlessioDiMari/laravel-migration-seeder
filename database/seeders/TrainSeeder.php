<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 
        $newTrain = new Train();

        $newTrain->agency = "TrenItalia";
        $newTrain->departure = "Rosolini";
        $newTrain->arrival = "Torino Porta Susa";
        $newTrain->departure_time = " 2024-04-13 05:30:00";
        $newTrain->arrival_time = " 2024-04-13 22:30:00";
        $newTrain->train_code = "18st09";
        $newTrain->carriages = 5;
        $newTrain->is_on_time = true;
        $newTrain->is_canceled = false;

        $newTrain->save();

    }
}
