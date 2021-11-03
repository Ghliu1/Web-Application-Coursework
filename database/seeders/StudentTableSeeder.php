<?php

namespace Database\Seeders;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Student;
        $a->name = "Megan";
        $a->year_group = 3;
        $a->student_id = 986877;
        $a->save();
    }
}
