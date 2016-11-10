<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

	    for($i = 0; $i < 1000; $i++) {
	        App\Post::create([
	            'title' => $faker->sentence,
	            'summary' => $faker->text,
	            'description' => $faker->realText
	        ]);
	    }
    }
}
