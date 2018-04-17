<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendAddEmployeeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $emailid,$useremail;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($emailid,$useremail)
    {
        $this->emailid=$emailid;
        $this->useremail=$useremail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = array('recruiter_email'=>$this->useremail, 'Employee_email'=>$this->emailid);
        // Path or name to the blade template to be rendered

        $template_path = 'email-template.add_employee_email';
//        $template_path = 'email-template.praposal_accept_email';

        Mail::send($template_path, $data, function($message)  {
            // Set the receiver and subject of the mail.
            $message->to($this->emailid, 'Welcome to Resource on Demand.')->subject('You Are added in Recruiter List');
            // Set the sender
            $message->from(env('MAIL_USERNAME'),'Resource On Demand');
        });
    }
}
