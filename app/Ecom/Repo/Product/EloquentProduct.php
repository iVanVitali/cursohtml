<?php

/**
 * Created by PhpStorm.
 * User: web
 * Date: 6/7/17
 * Time: 23:01
 */

namespace Ecom\Repo\Product;

use Illuminate\Database\Eloquent\Model;

class EloquentProduct implements ProductInterface
{
    protected $product;

    public function __construct(Model $product)
    {
        $this->product = $product;
    }

    public function getAllProducts() {

        $query = $this->product;

        $products = $query->all();

        return $products;
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
        $query = $this->product;

        $result = $query->find($id);

        return $result;
    }


}