<?php


namespace App\Repositories;


use App\Contracts\AbstractRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class AbstractRepository
{
    /**
     * @var Model
     */
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getList($key, $value)
    {
        return $this->model->query()->pluck($value, $key);
    }

    public function findBy($key, $value, $single = false)
    {
        $model = $this->model->query()->where($key, $value);
        return $single ? $model->first() : $model->get();
    }

    public function save($data)
    {
        return $this->model->query()->create($data);
    }

}
