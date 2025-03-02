<?php

namespace App\Mail;

use http\Url;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class EmployeeRegisterMail extends Mailable
{
    use Queueable, SerializesModels;
    public  $employeeId;
    public $user_email;
    public $name;
    public $password;



    public function __construct($user_email,$name,$password)
    {
        $this->user_email=$user_email;
        $this->name=$name;
        $this->password=$password;

    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
//    public function envelope()
//    {
//        return new Envelope(
//            subject: 'Employee Register Mail',
//        );
//    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
//    public function content()
//    {
//        return new Content(
//            view: 'view.name',
//        );
//    }

    /**
     * Get the attachments for the message.
     *
     * @return EmployeeRegisterMail
     */
//    public function attachments()
//    {
//        return [];
//    }

public function build(){

    $link=url('');



    return $this->from('AgroLoan@gmail.com','agroLoan')->subject('Login Information')
            ->view('emails.employeeRegister')->with(['link'=>$link,
             'email'=>$this->user_email,'password'=>$this->password,'name'=>$this->name

            ]);
}
}
