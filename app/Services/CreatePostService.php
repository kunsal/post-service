<?php


namespace App\Services;


use App\Contracts\PostRepositoryInterface;
use App\Events\PostCreateEvent;

class CreatePostService
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function create($data)
    {
        $post = $this->postRepository->save($data);
        event(new PostCreateEvent($post));
        return $post;
    }
}
