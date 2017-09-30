<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
    {
    	$keys = ['salud','seguridad','vigas','filtracion','casco','keyword'];
    	for( $i = 1; $i < 21; $i++){

	    	$event = new Event();
	    	$event->name = "Evento $i";
	    	$event->description = "Descripcion $i";
	    	$event->keywords = $keys[mt_rand(0,count($keys)-1)]. ', ' .$keys[mt_rand(0,count($keys)-1)];
            $event->penalty_charge = mt_rand(1,50);
            $event->recidivist_charge = $event->penalty_charge + mt_rand(1,10);
	    	$event->save();
    	}
    }
}