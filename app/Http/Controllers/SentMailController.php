<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SentMailController extends Controller
{
    public function send_attach_mail(Request $request)
    {
        $details=[
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'brand'=>$request->brand,
            'model'=>$request->model,
            'variant'=>$request->variant,
            'message'=>$request->message,
            /*'image1'=>$request->image1,
            'image2'=>$request->image2,
            'image3'=>$request->image3,*/
        ];

         


        Mail::to('info@moryacars.in')->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been sent successfully!');
    }

    public function send_mail(Request $request)
    {
        $details=[
            'name'=>$request->name,
            'location'=>$request->location,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'message'=>$request->message,
           
        ];

        Mail::to('info@moryacars.in')->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been sent successfully!');
    }
}
