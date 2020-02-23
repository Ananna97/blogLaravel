<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function getIndex() {
		/*process variable data or parameters
		talk to the model (update the database) and recive answers from the model
		compile and process data from the model
		pass data to the view
		*/

		return view('pages.welcome');
	} 

	public function getAbout() {
		return view('pages.about');
	}

	public function getContact() {
		return view('pages.contact');
	}

}