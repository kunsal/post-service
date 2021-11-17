<?php


namespace App\Services;


use App\Contracts\UserRepositoryInterface;

class UserService
{
    /**
     * @var UserRepositoryInterface
     */
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function get($data)
    {
        return $this->userRepository->save($data);
    }
}
