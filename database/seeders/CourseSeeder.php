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
    /*$course = new Course();
    $course->name = "Laravel";
    $course->description = "Framework de PHP";
    $course->category = "Desarrollo web";
    $course->save();*/

    Course::factory(50)->create(); //se crean 50 cursos aleatorios
  }
}
