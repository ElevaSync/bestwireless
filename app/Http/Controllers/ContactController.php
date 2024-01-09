<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:100',
            'message' => 'required|string|max:500',
        ]);

        $contact = \App\Models\Contact::create($request->all());

        return response()->json([
            'message' => 'Contact created successfully',
            'contact' => $contact,
        ], 201);
    }
}
