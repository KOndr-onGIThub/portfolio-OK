<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactsRequest;
use App\Mail\ContactMessage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;


class ContactsController extends Controller
{


    /**
     * Zobraz kontaktní formulář.
     *
     * @return View
     */
    public function show(): View
    {
        return view('kontakty');
    }

    /**
     * Zpracuj kontaktní formulář a odešli email.
     *
     * @param  ContactsRequest $request
     * @return RedirectResponse
     */
    public function send(ContactsRequest $request): RedirectResponse
    {
        Mail::to(env('MAIL_TO'))->send(new ContactMessage($request->input('email'), $request->input('message')));

        return redirect('/kontakty');
    }

}
