<?php


namespace App\Products;


class ProductRepository
{
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->with('options')->paginate();
    }

}
