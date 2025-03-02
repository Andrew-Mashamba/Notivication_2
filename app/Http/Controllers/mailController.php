<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\LimitEmail;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function send(){
        $data = 'Hello';
        Mail::to('gadafijaphaly10@gmail.com')->send(new LimitEmail($data));
    }
}
