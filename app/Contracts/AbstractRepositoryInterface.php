<?php


namespace App\Contracts;


interface AbstractRepositoryInterface
{
    public function getList($key, $value);

    public function findBy($key, $value, $single = false);

    public function save($data);
}
