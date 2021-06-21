<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $course = new Course();
    $course->name = "Laravel";
    $course->description = "Framework de PHP";
    $course->category = "Desarrollo web";
    $course->save();

    $course2 = new Course();
    $course2->name = "Java";
    $course2->description = "Lenguaje de programación";
    $course2->category = "Programación";
    $course2->save();

    $course3 = new Course();
    $course3->name = "React.js";
    $course3->description = "Framework de JS";
    $course3->category = "Desarrollo web";
    $course3->save();
  }
}
