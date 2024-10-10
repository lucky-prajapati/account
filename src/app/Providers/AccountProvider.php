<?php

namespace Lucky\Account\Providers;

use Illuminate\Support\ServiceProvider;

class AccountProvider extends ServiceProvider{
   /**   
   * Bootstrap services.
   * 
    *@return void
    */

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../../'resources/views','account' );
    }

}
