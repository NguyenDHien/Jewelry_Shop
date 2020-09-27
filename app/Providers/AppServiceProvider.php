<?php

namespace App\Providers;

use App\Models\category;
use App\Models\color;
use App\Models\product;
use App\Models\cart;
use App\Models\size;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer("*", function ($view) {
            $highestPrice = product::orderBy('price', 'DESC')->first();
            $prodSale = product::prodsale();
            $cates5 = category::paginate(5);
            $cateList = category::all();
            $colorAll = color::all();
            $cart = new cart();
            $sizeAll = size::all();
            $view->with(compact('colorAll', 'cateList', 'prodSale', 'cates5', 'highestPrice', 'cart', 'sizeAll'));
        });

        //
    }
}
