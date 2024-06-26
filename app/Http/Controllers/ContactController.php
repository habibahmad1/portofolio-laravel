<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataContact = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email",
            "message" => "required|max:255"
        ]);

        Contact::create($dataContact);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact, $name)
    {
        $contact = Contact::where('name', $name)->firstOrFail();
        return view('homepage.detail', compact("contact"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact, $name)
    {
        $contact = Contact::where('name', $name)->firstOrFail();
        return view('homepage.edit', compact("contact"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $contact->update($request->validated());

        return redirect('/')->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->back()->with('success', 'Deleted Successfull');
    }
}
