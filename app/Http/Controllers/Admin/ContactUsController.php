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
        $contacts = Contact::paginate(50);
        return response()->json(['resourceCode' => 100, 'resourceMessage' => 'success', 'data' => $contacts]);
    }
}
