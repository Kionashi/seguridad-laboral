<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryHasEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
    {
    	DB::table('category_has_event')->insert([
            'category_id' => 1,
            'event_id' => 1,
        ]);

        DB::table('category_has_event')->insert([
            'category_id' => 1,
            'event_id' => 2,
        ]);

        DB::table('category_has_event')->insert([
            'category_id' => 1,
            'event_id' => 3,
        ]);

        DB::table('category_has_event')->insert([
            'category_id' => 2,
            'event_id' => 4,
        ]);

        DB::table('category_has_event')->insert([
            'category_id' => 2,
            'event_id' => 5,
        ]);

        DB::table('category_has_event')->insert([
            'category_id' => 3,
            'event_id' => 6,
        ]);

        DB::table('category_has_event')->insert([
            'category_id' => 4,
            'event_id' => 7,
        ]);
        DB::table('category_has_event')->insert([
            'category_id' => 4,
            'event_id' => 8,
        ]);
        DB::table('category_has_event')->insert([
            'category_id' => 4,
            'event_id' => 9,
        ]);
        DB::table('category_has_event')->insert([
            'category_id' => 4,
            'event_id' => 10,
        ]);

    }
}