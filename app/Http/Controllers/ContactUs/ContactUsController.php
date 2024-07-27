<?php

namespace App\Http\Controllers\ContactUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs(){
        return view('pages.contact-us.index');
    }
}
