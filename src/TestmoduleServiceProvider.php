<?php

namespace Yezzdesign\TestModule;

use Illuminate\Support\ServiceProvider;

class TestmoduleServiceProvider extends ServiceProvider
{
	public function register()
	{

	}

	public function boot()
	{
        //
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
	}
}
