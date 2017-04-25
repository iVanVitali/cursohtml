<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 25/4/17
 * Time: 17:42
 */
    namespace Ecom\Repo;

    use App\Models\Category;
    use Ecom\Repo\Category\EloquentCategory;
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

    }
}