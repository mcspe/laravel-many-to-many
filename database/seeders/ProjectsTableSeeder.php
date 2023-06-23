<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use App\Models\Type;
use App\Helpers\FunctionHelper;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 25 ; $i++) {
        $new_project = new Project();
        $new_project->type_id = Type::inRandomOrder()->first()->id;
        $new_project->title = $faker->words(3, true);
        $new_project->slug = FunctionHelper::generateUniqueSlug($new_project->title, new Project());
        $new_project->image_path = 'uploads/img-placeholder.png';
        $new_project->summary = $faker->paragraph();
        $new_project->link = $faker->url();
        $new_project->save();
      }
    }
}
