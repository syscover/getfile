<?php namespace Syscover\Forms;

use Illuminate\Support\ServiceProvider;

class GetfileServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		// include route.php file
		if (!$this->app->routesAreCached())
			require __DIR__ . '/../../routes.php';

		// register views
		$this->loadViewsFrom(__DIR__ . '/../../views', 'getfile');

        // register translations
        $this->loadTranslationsFrom(__DIR__ . '/../../lang', 'getfile');

		// register public files
		$this->publishes([
			__DIR__ . '/../../../public' 			=> public_path('/packages/syscover/getfile')
		]);

		// register config files
		$this->publishes([
			__DIR__ . '/../../config/getfile.php' 	=> config_path('getfile.php')
		]);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
        //
	}
}