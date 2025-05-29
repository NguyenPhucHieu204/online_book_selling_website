<?php

namespace App\Http\Controllers\Admin;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('admin.contact.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'city' => 'required|string|max:255',
            'phone' => 'required|digits:10',
            'address' => 'nullable|string|max:255',
        ]);
        $contact = new Contact();
        $contact->city = $request->city;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
       
    
        return redirect()->route('admin.contact.index')->with('success', 'Blog created successfully.');
    }
    
    public function edit(Contact $contact)
    {
        return view('admin.contact.edit', compact('contact'));
    }

   
    public function update(Request $request, $id)
    {
        $validated=$request->validate([
            'city' => 'required|string|max:255',
            'phone' => 'required|digits:10',
            'address' => 'nullable|string|max:255',
        ]);

  
    $contact = Contact::findOrFail($id);

    $contact->update($validated);
    
        return redirect()->route('admin.contact.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contact.index')->with('success', 'Blog deleted successfully.');
    }

    public function show(Contact $contact)
    {
        return view('admin.contact.show', compact('contact'));
    }
}
