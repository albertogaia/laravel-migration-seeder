<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++) {
            $newTrip = new Trip();
            $newTrip->destination = $faker->city();
            $newTrip->departure = $faker->numberBetween(10, 100);
            $newTrip->arrival = $faker->numberBetween(10, 100);
            $newTrip->price = $faker->randomFloat(2, 100, 1000);
            $newTrip->save();
        }
    }
}
