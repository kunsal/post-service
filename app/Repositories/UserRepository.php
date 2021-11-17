<?php


namespace App\Repositories;


use App\Contracts\UserRepositoryInterface;
use App\Models\User;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function createOrFetch($data)
    {
        $user = $this->findBy('email', $data['email'], true);
        if (!$user) {
            $user = $this->save($data);
        }
        return $user;
    }
}
