<?php

namespace Ecom\Repo\Product;

interface ProductInterface {

    /**
     * Get all products
     *
     * @return mixed
     */
    public function getAllProducts();

    public function getById($id);

}