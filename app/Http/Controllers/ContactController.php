<?php

namespace App\Http\Controllers;

use PSpell\Config;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $search = $request->query('search');

        $contacts = Contact::search($search)->orderBy('created_at')->get();
        // $contacts = $user->contacts()->orderBy('created_at')->get();
        return view('contacts.index', compact('contacts'));
    }


    public function create()
    {
        return view('contacts.create', [
            'contact' => new Contact()
        ]);
    }


    public function store(ContactRequest $request)
    {
        $validated = $request->validated();

        $validated['user_id'] =  Auth::id();

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $path = Contact::uploadImage($file);
            $validated['image'] =  $path;
        }

        $contact = Contact::create($validated);

        return redirect()->route('contacts.index');
    }


    public function show(Contact $contact)
    {

        return view('contacts.show', compact('contact'));
    }


    public function edit(Contact $contact)
    {
        return view('contacts.edit', [
            'contact' => $contact,
        ]);
    }


    public function update(ContactRequest $request, Contact $contact)
    {
        $validated = $request->validated();

        $old_image = $contact->image;

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $path = Contact::uploadImage($file);
            $validated['image'] =  $path;
        }
        $contact->update($validated);

        if ($old_image && $old_image != $contact->image) {
            Contact::deleteImage($old_image);
        }

        return redirect()->route('contacts.index');
    }


    public function destroy(Contact $contact)
    {
        $contact->delete();

        if ($contact->image) {
            Contact::deleteImage($contact->image);
        }

        return redirect()->route('contacts.index');
    }
}
