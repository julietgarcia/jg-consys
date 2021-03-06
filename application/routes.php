<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

/*Route::get('/', function()
{
	return View::make('home.index');
});*/


Route::group(array('before' => 'consulta'), function()
{
	Route::get('/','index@index');

	// authentication
	Route::post('login','login@index');
	Route::get('login','login@index');

	// dashboard
	Route::post('dashboard','dashboard@index');
	Route::get('dashboard','dashboard@index');

	// Register
	Route::post('register','register@index');
	Route::get('register','register@index');

	// statement of account
	Route::post('cuenta','account@index');
	Route::get('cuenta','account@index');

		Route::post('cuenta/pagos','account@pagos');
		Route::get('cuenta/pagos','account@pagos');

	Route::post('documentos','documents@index');
	Route::get('documentos','documents@index');

	Route::post('informar','inform@index');
	Route::get('informar','inform@index');

	Route::post('usuario','personal@index');
	Route::get('usuario','personal@index');

});

Route::group(array('before' => 'admin'), function()
{
	/*++ Administration ++*/

	// login
	Route::post('admin/login','admin/login@login');
	Route::get('admin/login','admin/login@login');

	// logout
	Route::post('admin/logout','admin/login@logout');
	Route::get('admin/logout','admin/login@logout');

	// print
	Route::post('admin/recibos/print','admin/print@recibos');
	Route::get('admin/recibos/print','admin/print@recibos');

	Route::post('admin/recibos/generar/print','admin/print@recibos_generar');
	Route::get('admin/recibos/generar/print','admin/print@recibos_generar');

	// index
	Route::post('admin','admin/administracion@index');
	Route::get('admin','admin/administracion@index');

	// CtasXCobrar
	Route::post('admin/ctasxcobrar','admin/ctasxcobrar@index');
	Route::get('admin/ctasxcobrar','admin/ctasxcobrar@index');

	Route::post('admin/ctasxcobrar/agregar','admin/ctasxcobrar@agregar');
	Route::get('admin/ctasxcobrar/agregar','admin/ctasxcobrar@agregar');
	
	Route::post('admin/ctasxcobrar/detalle','admin/ctasxcobrar@detalle');
	Route::get('admin/ctasxcobrar/detalle','admin/ctasxcobrar@detalle');

	// CtasXPagar
	Route::post('admin/ctasxpagar/','admin/ctasxpagar@index');
	Route::get('admin/ctasxpagar','admin/ctasxpagar@index');

	Route::post('admin/ctasxpagar/agregar','admin/ctasxpagar@agregar');
	Route::get('admin/ctasxpagar/agregar','admin/ctasxpagar@agregar');

	Route::post('admin/ctasxpagar/detalle','admin/ctasxpagar@detalle');
	Route::get('admin/ctasxpagar/detalle','admin/ctasxpagar@detalle');

	Route::post('admin/ctasxpagar/documento','admin/ctasxpagar@documento');
	Route::get('admin/ctasxpagar/documento','admin/ctasxpagar@documento');

	Route::post('admin/ctasxpagar/pagos','admin/ctasxpagar@pagos');
	Route::get('admin/ctasxpagar/pagos','admin/ctasxpagar@pagos');

	Route::post('admin/ctasxpagar/pagos/detalle','admin/ctasxpagar@detallePagos');
	Route::get('admin/ctasxpagar/pagos/detalle','admin/ctasxpagar@detallePagos');

	Route::post('admin/ctasxpagar/pagos/registro','admin/ctasxpagar@pagar');
	Route::get('admin/ctasxpagar/pagos/registro','admin/ctasxpagar@pagar');

	// Recibos
	Route::post('admin/recibos','admin/recibos@index');
	Route::get('admin/recibos','admin/recibos@index');

	Route::post('admin/recibos/generar','admin/recibos@generar');
	Route::get('admin/recibos/generar','admin/recibos@generar');

	Route::post('admin/recibos/detalle','admin/recibos@detalle');
	Route::get('admin/recibos/detalle','admin/recibos@detalle');

		Route::post('admin/recibos/generar/2','admin/recibos@generar_pago');
		Route::get('admin/recibos/generar/2','admin/recibos@generar_pago');

		Route::post('admin/recibos/generar/3','admin/recibos@generar_imprimir');
		Route::get('admin/recibos/generar/3','admin/recibos@generar_imprimir');

	Route::post('admin/recibos/bancos','admin/recibos@bancos');
	Route::get('admin/recibos/bancos','admin/recibos@bancos');

	Route::post('admin/recibos/formaspay','admin/recibos@formaspay');
	Route::get('admin/recibos/formaspay','admin/recibos@formaspay');

	// Conceptos
	Route::post('admin/conceptos','admin/conceptos@index');
	Route::get('admin/conceptos','admin/conceptos@index');

	// Parcelas
	Route::post('admin/parcelas','admin/parcelas@index');
	Route::get('admin/parcelas','admin/parcelas@index');

	Route::post('admin/parcelas/agregar','admin/parcelas@agregar');
	Route::get('admin/parcelas/agregar','admin/parcelas@agregar');

	Route::post('admin/parcelas/calles','admin/parcelas@calles');
	Route::get('admin/parcelas/calles','admin/parcelas@calles');

	// Propietarios
	Route::post('admin/propietarios','admin/propietarios@index');
	Route::get('admin/propietarios','admin/propietarios@index');

	Route::post('admin/propietarios/detalle','admin/propietarios@detalle');
	Route::get('admin/propietarios/detalle','admin/propietarios@detalle');

	Route::post('admin/propietarios/agregar','admin/propietarios@agregar');
	Route::get('admin/propietarios/agregar','admin/propietarios@agregar');

	// Usuarios
	Route::post('admin/usuarios','admin/usuarios@index');
	Route::get('admin/usuarios','admin/usuarios@index');

	Route::post('admin/usuarios/detalle','admin/usuarios@detalle');
	Route::get('admin/usuarios/detalle','admin/usuarios@detalle');
	
	Route::post('admin/usuarios/agregar','admin/usuarios@agregar');
	Route::get('admin/usuarios/agregar','admin/usuarios@agregar');

	// Personal
	Route::post('admin/personal','admin/personal@index');
	Route::get('admin/personal','admin/personal@index');

	Route::post('admin/personal/detalle','admin/personal@detalle');
	Route::get('admin/personal/detalle','admin/personal@detalle');
	
	Route::post('admin/personal/agregar','admin/personal@agregar');
	Route::get('admin/personal/agregar','admin/personal@agregar');

	Route::post('admin/personal/cargos','admin/personal@cargos');
	Route::get('admin/personal/cargos','admin/personal@cargos');

	// Proveedores
	Route::post('admin/proveedores','admin/proveedores@index');
	Route::get('admin/proveedores','admin/proveedores@index');

	Route::post('admin/proveedores/detalle','admin/proveedores@detalle');
	Route::get('admin/proveedores/detalle','admin/proveedores@detalle');
	
	Route::post('admin/proveedores/agregar','admin/proveedores@agregar');
	Route::get('admin/proveedores/agregar','admin/proveedores@agregar');
});

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application. The exception object
| that is captured during execution is then passed to the 500 listener.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function($exception)
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});


Route::filter('consulta', function()
{
	// Styles
	Asset::add('bootstrap','css/bootstrap.min.css');
	Asset::add('bootstrap-responsive','css/bootstrap-responsive.min.css');
	Asset::add('styles','css/style.css');
	Asset::add('slides','css/slides.css');
	Asset::add('masonry','css/masonry.css');
	Asset::add('fancybox','css/fancybox.css');
	Asset::add('custom','css/colors/custom.css');
	Asset::add('water','css/colors/green.css');
	Asset::add('font_oswald','css/fonts/font_oswald.css');
	Asset::add('style_custom','css/style_custom.css');

	// Javascripts files
	Asset::add('jquery','js/jquery.js');
	Asset::add('bootstrap','js/bootstrap.min.js');
	Asset::add('slides','js/slides.min.js');
	Asset::add('masonry','js/masonry.min.js');
	Asset::add('fancybox','js/fancybox.js');
	Asset::add('functions','js/functions.js');
});

Route::filter('admin', function()
{
	// Styles
	Asset::add('bootstrap','consys/css/bootstrap.min.css');
	Asset::add('bootstrap-responsive','consys/css/bootstrap-responsive.min.css');
	Asset::add('style_custom','consys/css/style_custom.css');
	//Asset::add('docs','css/docs.css');

	// Javascripts files
	Asset::add('jquery','consys/js/jquery.js');
	Asset::add('bootstrap','consys/js/bootstrap.min.js');
});