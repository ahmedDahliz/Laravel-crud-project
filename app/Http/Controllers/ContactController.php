<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
class ContactController extends Controller
{
    public function newContact(){
    	$newContact = new Contact();
    	$newContact->name = "Dahliz Ahmed";
    	$newContact->email = "ahmed@gmail.com";
    	$newContact->message = "Bonjour voici un nouveaux Contact !";
    	$newContact->save();
    }

    public function listContact(){
    	$Contacts = Contact::all();
    	return view('contact', ['contacts' => $Contacts]);

    }
}
