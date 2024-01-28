<?php

namespace App\Livewire;

use App\Models\Request as ModelFormRequest;
use App\Mail\FormRequestsMail;

use Livewire\Component;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormRequests extends Component
{
    public function render()
    {
        return view('livewire.form-requests');
    }

    public function sendMail(Request $request)
    {
        // $request->validate([
        //     'first_name' => 'required',
        //     'last_name'  => 'required',
        //     'email'      => 'email',
        //     'company'    => 'required',
        //     'phone'      => 'required',
        // ]);

        $email_user = $request['email'];
        $mail       = new FormRequestsMail($request);

        Mail::to($email_user)->send($mail);

        ModelFormRequest::create([
            'first_name' => $request['first_name'],
            'last_name'  => $request['last_name'],
            'email'      => $request['email'],
            'company'    => $request['company'],
            'phone'      => $request['phone'],
            'reference'  => $request['reference'],
        ]);

        return redirect()->route('landing')->with('info', 'enviado');
    }
}
