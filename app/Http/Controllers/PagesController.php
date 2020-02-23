<?php

namespace App\Http\Controllers; 

class PagesController extends Controller {

	public function getIndex() {
		/*process variable data or parameters
		talk to the model (update the database) and recive answers from the model
		compile and process data from the model
		pass data to the view
		*/

		reuturn view('welcome');
	} 

	public function getAbout() {
		reuturn view('about');
	}

	public function getContact() {
		reuturn view('contact');
	}

}