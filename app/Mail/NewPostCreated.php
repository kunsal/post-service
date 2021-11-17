<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewPostCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $post)
    {
        $this->name = $name;
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.new-post-created')->subject($this->post->title);
    }
}
