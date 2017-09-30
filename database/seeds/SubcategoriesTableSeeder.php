<?php

use Illuminate\Database\Seeder;
use App\Subcategory;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
    {
    	for( $i = 1; $i < 15; $i++){

	    	$category = new Subcategory();
	    	$category->name = "Subcategoria $i";
	    	$category->description = "Descripcion de subcategoria $i"; 
	    	$category->save();
    	}
    }
}