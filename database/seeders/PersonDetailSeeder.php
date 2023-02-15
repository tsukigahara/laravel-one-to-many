<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\PersonDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::all()->each(function ($p) {

            $personDetail = PersonDetail::factory()->make();
            $personDetail->person()->associate($p);

            $personDetail->save();
        });
    }
}
