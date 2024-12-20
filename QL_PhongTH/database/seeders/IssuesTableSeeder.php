<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('issues')->insert([
                'computer_id' => $faker->numberBetween(1,50),
                'reported_by' => $faker->name,
                'reported_date' => $faker->dateTime,
                'description' => $faker->text,
                'urgency' => $faker->randomElement(['Low', 'Medium', 'Hight']), // RAM
                'status' => $faker->randomElement(['Open','In Progress','Resolved'])
            ]);
        }
    }
}
