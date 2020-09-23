<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    //get contact
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(50);
        return response()->json(['resourceCode' => 100, 'resourceMessage' => 'success', 'data' => $contacts]);
    }

    // change status
    public function changeStatus($id)
    {
        $contact = $this->findContact($id);
        $contact->active = ($contact->active == 1) ? 0 : 1 ;
        $contact->update();
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'active' => $contact->active]);
    }

    //find contact 
    public function findContact($id)
    {
        $contact = Contact::find($id);
        return $contact;
    }
}
