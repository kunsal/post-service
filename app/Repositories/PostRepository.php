<?php


namespace App\Repositories;


use App\Contracts\PostRepositoryInterface;
use App\Models\Post;

class PostRepository extends AbstractRepository implements PostRepositoryInterface
{
    public function __construct(Post $post)
    {
        parent::__construct($post);
    }
}
