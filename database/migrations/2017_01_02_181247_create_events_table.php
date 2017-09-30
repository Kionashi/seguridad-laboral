<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            // Identifier
            $table->increments('id');
            
            // Fields
            $table->string('description');
            $table->string('keywords');
            $table->string('name');
            $table->decimal('penalty_charge');
            $table->decimal('recidivist_charge');
            
            // Foreign keys
            
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
        Schema::dropIfExists('events');
    }
}
