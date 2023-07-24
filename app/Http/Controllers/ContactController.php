<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactScreen()
    {
        $contacts = Contact::where("deleted", 0)->get();

        return view("Admin.contact.list", ["contacts" => $contacts]);
    }
}
