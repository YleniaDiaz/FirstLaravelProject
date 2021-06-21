<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    User::factory(10)->create();
    // $this->call(CourseSeeder::class);
    Course::factory(20)->create(); //se crean 50 cursos aleatorios
  }
}
