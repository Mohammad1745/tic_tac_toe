<?php


namespace App\Http\Services;


use App\Http\Repositories\Repository;

class Service
{
    /**
     * @var Repository
     */
    private Repository $repository;

    /**
     * BaseService constructor.
     * @param $repository
     */
    public function __construct ($repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $method
     * @param $args
     * @return mixed
     */
    public function __call ($method, $args)
    {
        return $this->repository->{$method}(...$args);
    }
}
