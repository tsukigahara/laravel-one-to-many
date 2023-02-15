<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->count(20)->make()->each(function ($p) {

            $person = Person::inRandomOrder()->first();
            $p->person()->associate($person);

            $p->save();
        });
    }
}
