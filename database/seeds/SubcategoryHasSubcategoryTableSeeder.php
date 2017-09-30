<?php

use Illuminate\Database\Seeder;
use App\Category;

class SubcategoryHasSubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
    {
    	DB::table('subcategory_has_subcategory')->insert([
            'subcategory_id1' => 1,
            'subcategory_id2' => 11,
        ]);

        DB::table('subcategory_has_subcategory')->insert([
            'subcategory_id1' => 2,
            'subcategory_id2' => 12,
        ]);

        DB::table('subcategory_has_subcategory')->insert([
            'subcategory_id1' => 2,
            'subcategory_id2' => 13,
        ]);

        DB::table('subcategory_has_subcategory')->insert([
            'subcategory_id1' => 3,
            'subcategory_id2' => 14,
        ]);

    }
}