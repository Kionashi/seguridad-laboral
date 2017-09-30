<?php

use Illuminate\Database\Seeder;
use App\Subcategory;

class SubcategoryHasEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
    {
    	DB::table('subcategory_has_event')->insert([
            'subcategory_id' => 1,
            'event_id' => 11,
        ]);

        DB::table('subcategory_has_event')->insert([
            'subcategory_id' => 1,
            'event_id' => 12,
        ]);

        DB::table('subcategory_has_event')->insert([
            'subcategory_id' => 1,
            'event_id' => 13,
        ]);

        DB::table('subcategory_has_event')->insert([
            'subcategory_id' => 2,
            'event_id' => 14,
        ]);

        DB::table('subcategory_has_event')->insert([
            'subcategory_id' => 2,
            'event_id' => 15,
        ]);

        DB::table('subcategory_has_event')->insert([
            'subcategory_id' => 3,
            'event_id' => 16,
        ]);

        DB::table('subcategory_has_event')->insert([
            'subcategory_id' => 4,
            'event_id' => 17,
        ]);
        DB::table('subcategory_has_event')->insert([
            'subcategory_id' => 4,
            'event_id' => 18,
        ]);
        DB::table('subcategory_has_event')->insert([
            'subcategory_id' => 4,
            'event_id' => 19,
        ]);
        DB::table('subcategory_has_event')->insert([
            'subcategory_id' => 4,
            'event_id' => 20,
        ]);

    }
}