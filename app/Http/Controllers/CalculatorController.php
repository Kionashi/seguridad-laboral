<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Event;
use App\Subcategory;

class CalculatorController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
    	// Find alcategories
    	$categories = Category::with('events')->get();

    	// Show view
    	return view('pages.frontend.calculator.index')
	    	->with('categories', $categories)
    	;	
    }

    public function detail($id){
    	// Find category
    	$category = Category::where('id',$id)->with('events')->first();
    	$category2 = Category::where('id',$id)->with('subcategories')->first();
    	// echo 1234;die;
    	// foreach ($category->subcategories as $key => $value) {
    	// 	 dump($value);die;
    	// }

    	// Show view
    	return view('pages.frontend.calculator.detail')
    		->with('category', $category)->with('category2',$category2);
    }
    public function subdetail($id){
    	// Find category
    	$subcategory = Subcategory::where('id',$id)->with('events')->first();
    	
    	// foreach ($category->subcategories as $key => $value) {
    	// 	 dump($value);die;
    	// }

    	// Show view
    	return view('pages.frontend.calculator.subdetail')
    		->with('subcategory', $subcategory);
    }
    public function search(Request $request){

    	$value = $request->input('value');
    	$events = Event::where('keywords','like','%'.$value.'%')->get();
    	// dump($events);die;

    	// foreach ($events as $event) {
    	// 	echo $event->name;
    	// }
    	return view('pages.frontend.calculator.results')
    		->with('events', $events);
	    }
	public function eventdetail($id){

		$event = Event::where('id',$id)->first();
		return view('pages.frontend.calculator.event')->with('event',$event);
	}

	public function addpenalty(Request $request){
		$id = $request->input('id');
		$event = Event::where('id',$id)->first();
		if($request->session()->has('penalty_charge_total')){
			// echo ("tiene penalty_charge_total");
			$total = $request->session()->pull('penalty_charge_total');
			$total = $total + $event->penalty_charge;
			$request->session()->put('penalty_charge_total',$total);
		}
		else{
			// echo ("no tiene penalty_charge_total");
			$request->session()->put('penalty_charge_total',$event->penalty_charge);
		}
		if($request->session()->has('charged_events')){
			// echo ("tiene charged_events");
			$request->session()->push('charged_events',$event);
		}else{
			// echo ("no tiene charged_events");
			$request->session()->put('charged_events',[$event]);
		}
		return view('pages.frontend.calculator.event')->with('event',$event)->with('response','Sancion agregada exitosamente :)');
	}

	public function showTotal(Request $request){

		if(!isset($events) || !isset($total)){

			$total = 0;
			$events = array();
		}
		if($request->session()->has('penalty_charge_total')){
			// echo ("tiene penalty_charge_total");
			$total = $request->session()->get('penalty_charge_total');

		}
		else{
			echo ("no tiene penalty_charge_total");
		}
		if($request->session()->has('charged_events')){
			// echo ("tiene charged_events");
			$events = $request->session()->get('charged_events');
		}else{
			echo ("no tiene charged_events");
		}
		return view('pages.frontend.calculator.total')->with('total',$total)->with('events',$events);
	}

	public function newCalc(Request $request){
		$request->session()->pull('penalty_charge_total');
		$request->session()->pull('charged_events');
		$categories = Category::with('events')->get();

    	// Show view
    	return view('pages.frontend.calculator.index')
	    	->with('categories', $categories)
    	;	
	}

	public function destroy(Request $request, $index){

		$total = $request->session()->pull('penalty_charge_total');
		$events = $request->session()->pull('charged_events');
		$total-= $events[$index]->penalty_charge;
		unset($events[$index]);
		$request->session()->put('charged_events',$events);
		$request->session()->put('penalty_charge_total',$total);
		return redirect()->route('calculator/total');

	}
}
