<?php

namespace Joydip\Laravel5_database_utilities\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendBackupMail extends Mailable {

	use Queueable, SerializesModels;

		 public $data;   // Property of mailable class is anything define public is available to views

		/**
	     * Create a new message instance.
	     *
	     * @return void
	     */
	    public function __construct($data)
	    {
	        $this->data = $data;
	    }

	    /**
	     * Build the message.
	     *
	     * @return $this
	     */
	    public function build()
	    {
	        return $this->markdown('laravel5_database_utilities.SendBackupMailTemplate')
	        			 ->from($this->data['to_email'])
		                // ->cc($address, $name)
		                // ->bcc($address, $name)
		                // ->replyTo($address, $name)
		                // ->subject($this->data['subject'])
	                     ->with('data', $this->data);
                        //->attach($path);
	    }
	
}
