<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function call(Request $request)
    {
        $data = $request->all();
        $email = setting('contact-us.email');
        Mail::send('email.call', [ 'data' => $data], function ($message) use ($data, $email) {
            $message->from('no-reply@carewaynepal.com')
                    ->to($email)
                    ->subject('Phone Call Request From Website');
        });
        return redirect()->back()->with('success','Request Sent Successfully.');
    }
}
