<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;
use App\notice;
use App\logo;
use App\school_name;
use App\slideshow;
use App\change_message_and_history;
use App\about_us;
use App\map;
use App\footer_about_us;
use App\footer_contact_us;
use App\select_slideshow;
use App\select_latest_photo;

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
        Schema::defaultStringLength(191);

        

      //   view()->composer('layouts.home', function($view){

      //       $view_data2 = logo :: orderBy('id','desc')->take(1)->get();
      //       $view_data3 = school_name :: orderBy('id','desc')->take(1)->get();

      //   $view_data11 = footer_about_us :: orderBy('id','desc')->take(1)->get();

      // $view_data12 = footer_contact_us :: orderBy('id','desc')->take(1)->get();

      //       $view->with('view_data2', $view_data2)->with('view_data3', $view_data3)->with('view_data11', $view_data11)->with('view_data12', $view_data12);
      //   });

    }
}
