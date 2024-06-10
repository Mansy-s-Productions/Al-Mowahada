<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContactRequestController extends Controller {
    public function store(Request $r) {
        // Validate the incoming request
        $errors = $r->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'service_id' => 'required|integer',
            'message' => 'required',
            'source' => Rule::in(['HOMEPAGE', 'CONTACT_US']),
        ]);
        // Store the information
        ContactRequest::create($r->all());

        // Return a success message
        return back()->withSuccess('Your contact request has been recived!');
    }

    // Admin
    public function getAdminAll() {
        $ContactRequests = ContactRequest::latest()->get();

        return view('admin.contact-requests.all', compact('ContactRequests'));
    }

    public function getAdminSingle(ContactRequest $ContactRequest) {
        return view('admin.contact-requests.single', compact('ContactRequest'));
    }
}
