<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryHasSubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
    {
    	DB::table('category_has_subcategory')->insert([
            'category_id' => 1,
            'subcategory_id' => 1,
        ]);

        DB::table('category_has_subcategory')->insert([
            'category_id' => 1,
            'subcategory_id' => 2,
        ]);

        DB::table('category_has_subcategory')->insert([
            'category_id' => 1,
            'subcategory_id' => 3,
        ]);

        DB::table('category_has_subcategory')->insert([
            'category_id' => 2,
            'subcategory_id' => 4,
        ]);

        DB::table('category_has_subcategory')->insert([
            'category_id' => 2,
            'subcategory_id' => 5,
        ]);

        DB::table('category_has_subcategory')->insert([
            'category_id' => 3,
            'subcategory_id' => 6,
        ]);

        DB::table('category_has_subcategory')->insert([
            'category_id' => 4,
            'subcategory_id' => 7,
        ]);
        DB::table('category_has_subcategory')->insert([
            'category_id' => 4,
            'subcategory_id' => 8,
        ]);
        DB::table('category_has_subcategory')->insert([
            'category_id' => 4,
            'subcategory_id' => 9,
        ]);
        DB::table('category_has_subcategory')->insert([
            'category_id' => 4,
            'subcategory_id' => 10,
        ]);

    }
}