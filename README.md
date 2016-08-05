## Laravel Bootstrap Template ##

### Description ###

This package will create a basic Blade template with [Bootstrap](http://getbootstrap.com/) for **Laravel 5.2**
 
### Installation ###
 
Add Bootstrap Package to your **composer.json** file to require Bootstrap :
```
    require : {
        "laravel/framework": "5.2.*",
        "codeuz/bootstrap": "dev-master"
    }
```
 
Update Composer :
```
    composer update
```
 
The next required step is to add the service provider to **config/app.php** :
```
    Codeuz\Bootstrap\BootstrapServiceProvider::class
```
 
### Publish ###
 
The next required step is to publish views and assets in your application with :
```
    php artisan vendor:publish
```
 
### Render ###

The last required step is to configure your **app/Http/routes.php** file to render the view :
```
    Route::get('/', function () {
	    return view('welcome-bootstrap');
	});
```
 
Congratulations, you have successfully installed Bootstrap Package !