<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Cart;
use Illuminate\Support\Facades\Auth;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        

        Schema::defaultStringLength(191);

        //view()->composer('layouts.app', function($view){
           // $view->with('user', Auth::user());
         // });
     
       //$obj=app(Cart::class);
       //$obj::content()->count(5);
       //$aantal= $obj::content()->count();
       //View::share('countt', $aantal);



        //view()->composer('layouts.app', function($view)
        //{
        //    $view->with('countt','1');
        //});
      
       

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
