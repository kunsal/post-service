<?php

namespace App\Listeners;

use App\Events\PostCreateEvent;
use App\Mail\NewPostCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class PostCreatedListener implements ShouldQueue
{
    public $delay = 5;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PostCreateEvent  $event
     * @return void
     */
    public function handle(PostCreateEvent $event)
    {
        // Get all subscribers
        $post = $event->post;
        $website = $post->website;
        $users = $website->users;
        foreach ($users as $user) {
            Mail::to($user->email)->send(new NewPostCreated($user->name, $post));
        }
    }
}
