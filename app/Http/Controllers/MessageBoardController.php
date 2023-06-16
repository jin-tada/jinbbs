<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MessageBoardController extends Controller
{
    public function add()
    {
        return view('MessageBoard.add');
    }

    public function confirm(Request $request)
    {
        if ($request->has('back')) {
            return redirect('/MessageBoard/add')->withInput();
        }
        if ($request->has('send')) {
            $new_contact = new Contact();
            $new_contact->name = $request->name;
            $new_contact->tel = $request->tel;
            $new_contact->address = $request->address;
            $new_contact->detail = $request->detail;

            $new_contact->save();
            return redirect('/MessageBoard/complete');
        }
        return view('MessageBoard.confirm', compact('request'));
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('MessageBoard.index', compact('contacts'));
    }

    public function delete($id)
    {
        $contact_to_delete = Contact::find($id);
        $contact_to_delete->delete();
        return redirect('/MessageBoard/index');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);

        return view('MessageBoard.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {

        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->tel = $request->tel;
        $contact->address = $request->address;
        $contact->detail = $request->detail;

        $contact->save();

        return redirect('/MessageBoard/index');
    }
}
