<?php

namespace Database\Seeders;

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
    public function run()
    {
        $new_train = new Train();
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
        $new_train->
    }
}
