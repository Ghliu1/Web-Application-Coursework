<?php

namespace Database\Seeders;
use App\Models\StudentRep;
use Illuminate\Database\Seeder;

class StudentRepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studentReps = Studentrep::factory()->count(5)->create();
    }
}
