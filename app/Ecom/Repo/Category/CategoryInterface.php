<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 25/4/17
 * Time: 17:16
 */
    namespace Ecom\Repo\Category;

    interface Category {

        /**
         * Get all categories
         *
         * @return mixed
         */
        public function getAllCategories();

    }