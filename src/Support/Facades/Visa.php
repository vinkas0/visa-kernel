<?php

namespace Vinkas\Visa\Support\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;

class Visa extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'visa';
    }

    /**
     * Register the typical authentication routes for an application.
     *
     * @return void
     */
    public static function routes()
    {
      Route::get('/users/activate-account/{token}', 'Auth\EmailConfirmationController@showConfirmation')->name('confirm-email');
      Route::post('/users/activate-account', 'Auth\EmailConfirmationController@confirm');
    }
}
