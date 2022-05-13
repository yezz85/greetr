<?php

namespace Yezzdesign\TestModule;

use Illuminate\Support\ServiceProvider;

class TestmoduleServiceProvider extends ServiceProvider
{
	public function register()
	{
		//
        include __DIR__.'/routes/routes.php';
	}

	public function boot()
	{
		//
	}
}
