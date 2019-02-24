<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendEmailResetPassword implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email=$email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = array('user_email'=>$this->email);
        // Path or name to the blade template to be rendered

        $template_path = 'email-template.reset_password_email';
//        $template_path = 'email-template.praposal_accept_email';

        Mail::send($template_path, $data, function($message)  {
            dd($message);
            // Set the receiver and subject of the mail.
            $message->to($this->email, 'Welcome to Resource on Demand.')->subject('Reset Password');
            // Set the sender
            $message->from(env('MAIL_USERNAME'),'Resource On Demand');
        });
    }
}
