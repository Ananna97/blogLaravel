<?php

namespace App\Http\Controllers; 

class PagesController extends Controller {

	public function getIndex() {
		/*process variable data or parameters
		talk to the model (update the database) and recive answers from the model
		compile and process data from the model
		pass data to the view
		*/

		reuturn 'About me';
	} 

	public function getAbout() {
		reuturn 'About me';
	}

	public function getContact() {
		reuturn 'About me';
	}

}