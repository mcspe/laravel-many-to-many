<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
      $this->call([
        TechnologiesTableSeeder::class,
        TypesTableSeeder::class,
        ProjectsTableSeeder::class, //commentare in produzione
        ProjectsTechnologiesTableSeeder::class  //commentare in produzione
      ]);
    }
}
