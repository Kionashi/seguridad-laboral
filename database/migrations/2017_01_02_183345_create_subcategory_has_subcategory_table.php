<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoryHasSubcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategory_has_subcategory', function (Blueprint $table) {
            // Fields
                      
            // Foreign keys
            $table->integer('subcategory_id1')->unsigned();
            $table->foreign('subcategory_id1')->references('id')->on('subcategories');
            $table->integer('subcategory_id2')->unsigned();
            $table->foreign('subcategory_id2')->references('id')->on('subcategories');
            
            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategory_has_subcategory');
    }
}
