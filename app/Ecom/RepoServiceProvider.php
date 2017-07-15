<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 25/4/17
 * Time: 17:42
 */
    namespace Ecom\Repo;

    use Ecom\Category;
    use Ecom\Repo\Category\EloquentCategory;
    use Ecom\Product;
    use Ecom\Repo\Product\EloquentProduct;
    use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider {

    /**
     * Register the binding
     *
     * @return void
     */
    public function register() {

        $this->app->bind('Ecom\Repo\Category\CategoryInterface', function ($app) {
            return new EloquentCategory(new Category);
        });

        $this->app->bind('Ecom\Repo\Product\ProductInterface', function ($app) {
            return new EloquentProduct(new Product);
        });

    }
}