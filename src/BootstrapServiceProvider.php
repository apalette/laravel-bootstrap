<?php namespace Codeuz\Bootstrap;
 
use Illuminate\Support\ServiceProvider;
 
class BootstrapServiceProvider extends ServiceProvider{
 
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
 

 	/**
     * No action on boot.
     *
     * @return void
     */
    public function boot()
    {
    }
	
	/**
     * Publish views and assets.
	 * Called by artisan command.
     *
     * @return void
     */
    public function register()
    {
    	$this->publishes([
            __DIR__.'/../views' => base_path('resources/views')
        ]);
		
		$this->publishes([
            __DIR__.'/../public/assets' => base_path('public/assets')
        ]);
    }
}