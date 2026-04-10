<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $departure = $faker->dateTimeBetween('+1 day', '+10 days');
            $arrival = (clone $departure)->modify('+' . rand(1, 6) . ' hours');

            $newTrain = new Train();
            $newTrain->company = $faker->company;
            $newTrain->leaving_from = $faker->city;
            $newTrain->arriving_to = $faker->city;
            $newTrain->departure = $departure;
            $newTrain->arrival = $arrival;
            $newTrain->train_id = strtoupper($faker->bothify('??####'));
            $newTrain->carriages = rand(4, 15);
            $newTrain->on_time = $faker->boolean;
            $newTrain->cancelled = $faker->boolean;
            $newTrain->save();
        }
    }
}
