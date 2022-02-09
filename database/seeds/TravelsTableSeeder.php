<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $NewTravel = new Travel();
            $NewTravel->title = $faker->sentence(5);
            $NewTravel->destination = $faker->country();
            $NewTravel->departure_date = $faker->dateTimeThisMonth();
            $NewTravel->return_date = $faker->dateTimeThisMonth('+10days');
            $NewTravel->travelers = $faker->randomDigit();
            $NewTravel->price = $faker->randomFloat(2, 50, 5000);
            $NewTravel->save();
        }
    }
}