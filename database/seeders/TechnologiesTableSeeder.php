<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use App\Helpers\FunctionHelper;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $technologies = ['HTML', 'CSS', 'JavaScript', 'Bootstrap', 'VueJS', 'Vite', 'PHP', 'MySQL', 'Laravel', 'Blade'];

      foreach($technologies as $technology) {
        $new_technology = new Technology();
        $new_technology->name = $technology;
        $new_technology->slug = FunctionHelper::generateUniqueSlug($new_technology->name, new Technology());
        $new_technology->save();
      }
    }
}
