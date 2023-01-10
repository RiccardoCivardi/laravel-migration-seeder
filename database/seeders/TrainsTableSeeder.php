<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        /*
        $table->string('company', 30)->nullable();
        $table->string('departure_station', 30);
        $table->string('arrival_station', 30);
        $table->time('departure_time');
        $table->time('arrival_time');
        $table->string('train_code',10);
        $table->tinyInteger('number_carriages')->unsigned();
        $table->boolean('is_on_time')->default(1);
        $table->boolean('is_delete')->default(0);
        */


        for($i=0; $i<30; $i++){

            $new_train = new Train();

            $new_train->company = $faker->randomElement(['trenitalia', 'italo', 'freccia']);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->bothify('?????#####');
            $new_train->number_carriages = $faker->numberBetween(2,30);
            $new_train->is_on_time = $faker->boolean();
            $new_train->is_delete = $faker->boolean();

            // dump($new_train);
            $new_train->save();

        }
    }
}
