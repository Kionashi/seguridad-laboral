<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Contact;


class ContactController extends Controller
{
    public function index(){
    	return view('pages.frontend.contact');
    }

    public function saveContact(Request $request){
    	
    	$email = $request->input('email');
    	$name = $request->input('name');
    	$subject = $request->input('subject');
    	$message = $request->input('message');

    	$contact = new Contact();
    	$contact->name = $name;
    	$contact->email = $email;
    	$contact->subject = $subject;
    	$contact->message = $message;
    	$contact->save();

    	// Get contact email 		
     	$email= $contact['email'];
     	
     	$data = array();
		$data['name'] = $contact['name'];
		$data['email'] = $contact['email']; 
		$data['subject'] = $contact['subject'];
     	$data['message'] = $contact['message'];
     	$data['date'] = $contact['created_at'];
 
    	// Send notification mail to admin
    	Mail::send('pages.frontend.emails.contact-admin', $data, function ($m){
    		$m->from('cardozo.anibal@gmail.com', 'Edgar Cardozo');
    		$m->to('cardozo.anibal@gmail.com', 'Edgar-Admin')->subject('Ha recibido una nueva solicitud de contacto');
    	});

    	// // Send confirmation mail to user
    	// Mail::send('pages.frontend.emails.contact-user', $data, function ($m) use ($email){
    	// 	$m->from($this->configItems['medprozone.contact.from'], 'Medprozone');
    	// 	$m->to($email, 'Contact-Medprozone')->subject('[Medprozone]'. trans('frontend/pages/contact.index.thanks-for-contacting'));
    	// });

    	return view('pages.frontend.contact')->with('response-contact','Su mensaje fue enviado exitosamente'); 
    }
}
