<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contact;
use App\Phone;


class ContactsController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->has('search_string')) {
            $contacts = Contact::all();
        } else {
            $query = $request->search_string;
            $contacts = Contact::where('surname','like','%'.$query.'%')
                ->orWhere('name','like','%'.$query.'%')
                ->orWhere('patronymic','like','%'.$query.'%')
                ->orWhereHas('phones', function($q) use ($query) {
                    $q->where('phone', 'like','%'.$query.'%');
                })
                ->get();
        }

        return view('index', [
            'contacts' => $contacts
        ]);
    }

    public function newContact(Request $request)
    {
        return view('new_user');
    }

    public function editContact(Request $request, $id)
    {
        $contact = Contact::find($id);

        return view('edit_user', [
            'contact' => $contact,
        ]);
    }

    public function delete(Request $request)
    {
        $id = $request->id;

        Phone::where('contact_id','=', $id)->delete();
        Contact::where('id','=', $id)->delete();

        return redirect('/');
    }

    public function add(Request $request)
    {
        $contact = Contact::create([
            'surname' => $request->surname,
            'name' => $request->name,
            'patronymic' => $request->patronymic,
            'created_at' => new \Datetime(),
            'updated_at' => new \Datetime(),
        ]);

        if ($request->has('phones')) {
            $phones = explode(',', $request->phones);

            foreach($phones as $phone){
                Phone::create([
                    'contact_id' => $contact->id,
                    'phone' => trim($phone),
                    'created_at' => new \Datetime(),
                    'updated_at' => new \Datetime(),                         
                ]);
            }
        }

        return redirect('/');
    }

    public function update(Request $request)
    {   
        $id = $request->id;

        $contact = Contact::find($id);

        Contact::where('id', $id)
            ->update([
            'surname' => $request->surname,
            'name' => $request->name,
            'patronymic' => $request->patronymic,
            'updated_at' => new \Datetime(),
        ]);

        if ($request->has('phones')) {
            $phones = explode(',', $request->phones);

            Phone::where('contact_id','=', $id)->delete();

            foreach($phones as $phone){
                Phone::create([
                    'contact_id' => $id,
                    'phone' => trim($phone),
                    'created_at' => new \Datetime(),
                    'updated_at' => new \Datetime(),                    
                ]);
            }
        }

        return redirect('/');
    }

}

