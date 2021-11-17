<?php


namespace App\Contracts;


interface UserRepositoryInterface extends AbstractRepositoryInterface
{
    public function createOrFetch($data);
}
