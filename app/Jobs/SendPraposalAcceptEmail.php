<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendPraposalAcceptEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $emailid, $companyemail;
    /**
     * Create a new job instance.
     *
     * @return void
     */


    public function __construct($emailid,$companyemail)
    {
        $this->emailid=$emailid;
        $this->companyemail=$companyemail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = array('recruiter_email'=>$this->emailid, 'company_email'=>$this->companyemail);
        // Path or name to the blade template to be rendered

        $template_path = 'email-template.praposal_accept_email';

        Mail::send($template_path, $data, function($message)  {
            // Set the receiver and subject of the mail.
            $message->to('machhijanki282@gmail.com', 'fvds')->subject('Praposal Accepted');
            // Set the sender
            $message->from(env('MAIL_USERNAME'),'fds');
        });
    }
}
