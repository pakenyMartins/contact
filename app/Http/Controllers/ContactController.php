<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateContact;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public  function index()
    {
        $contacts = Contact::get();

        return view('contact.index', compact('contacts'));
    }

    public  function create()
    {
        return view('contact.create');
    }

    public  function store(StoreUpdateContact $request)
    {
        Contact::create($request->all());
        return redirect()->route('contact.index');
    }
}
