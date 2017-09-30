<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EventsTableSeeder::class);
	    $this->call(CategoriesTableSeeder::class);
        $this->call(SubcategoriesTableSeeder::class);
        $this->call(CategoryHasEventTableSeeder::class);
        $this->call(SubcategoryHasEventTableSeeder::class);
        $this->call(CategoryHasSubcategoryTableSeeder::class);
        $this->call(SubcategoryHasSubcategoryTableSeeder::class);
    }
}

