<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    //test login fast 
    public  function loginSet()
    {
        Auth::loginUsingId(1);
        return redirect()->route('contact.index');
    }
    public  function logout()
    {
        Auth::logout();
        return redirect()->route('contact.index');
    }
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

        if (Contact::create($request->all())) {
            return redirect()->route('contact.index')->with('type', 'success')->with('message', 'Contact created successfully');
        };

        return redirect()->route('contact.index');
    }

    public  function show($id)
    {
        $contact = Contact::find($id);
        if ($contact) return view('contact.show', compact('contact'));
        return redirect()->route('contact.index');
    }
    public  function destroy($id)
    {
        if (Contact::find($id)->delete()) {
            return redirect()->route('contact.index')->with('type', 'success')->with('message', 'Contact deleted successfully');
        };
        return redirect()->route('contact.index');
    }

    public  function edit($id)
    {

        if ($contact = Contact::find($id)) return view('contact.edit', compact('contact'));
        return redirect()->back();
    }

    public  function update(StoreUpdateContact $request, $id)
    {
        if ($contact = Contact::find($id)) {

            if ($contact->update($request->all())) {
                return redirect()->route('contact.index')->with('type', 'success')->with('message', 'Contact updated successfully');
            };
        }
        return redirect()->back();
    }
}
