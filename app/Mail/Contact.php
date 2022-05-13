<?php
 
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
 
class Contact extends Mailable
{
    use Queueable, SerializesModels;
 
    /**
     * Elements de contact
     * @var array
     */
    public $contact;
 
    /**
     * Create a new message instance.
     *
     * @return void
     */ use Queueable, SerializesModels;
  
    public $filename;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($filename)
    {
        $this->filename = $filename;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $filename=$this->filename;
    
        return $this->view('emails.contact',compact('filename'))
        ->subject('Checklist created successfully')
        ->attach($this->filename);
                    
    }
}