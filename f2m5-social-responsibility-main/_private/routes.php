<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;
use Website\Middleware\isAuthenticated;
use Website\Middleware\IsSuperAdmin;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

	// START: Zet hier al eigen routes (alle URL's die je op je website hebt) en welke controller en functie deze pagina afhandelt
	// Lees de docs, daar zie je hoe je routes kunt maken: https://github.com/skipperbent/simple-php-router#routes

	SimpleRouter::get( '/', 'WebsiteController@home' )->name( 'home' );
	SimpleRouter::get( '/con', 'WebsiteController@contact' )->name( 'con' );
	SimpleRouter::get( '/over', 'WebsiteController@over' )->name( 'over' );
	SimpleRouter::get( '/trans', 'WebsiteController@trans' )->name( 'trans' );
	
	
	SimpleRouter::group(['prefix' => '/login/aanmeld'], function(){
		SimpleRouter::get( '', 'WebsiteRegistratieController@aanmeld' )->name( 'aanmeld' );
		SimpleRouter::post( '/process', 'WebsiteRegistratieController@registerprocess' )->name( 'aanmeld.process' );
	});

	
	SimpleRouter::group(['prefix' => '/login'], function(){
	SimpleRouter::get( '/login', 'WebsiteLoginController@login' )->name( 'login' );
	SimpleRouter::post( '/process', 'WebsiteLoginController@loginprocess' )->name( 'login.handle' );
	});

	
	


	SimpleRouter::get( '/logout', 'WebsiteLoginController@logout' )->name( 'logout' );

	SimpleRouter::get('ingelogd/dashboard', 'WebsiteLoginController@userdashboard') ->name('login.dashboard');

	SimpleRouter::group(['prefix' => '/blog'], function(){
		SimpleRouter::get( '/blog-index', 'BlogController@index' )->name( 'blog-index' );
		SimpleRouter::get( '/blog', 'BlogController@blog' )->name( 'blog' );
		SimpleRouter::post( '/blog', 'BlogController@save' )->name( 'blog.save' );
	});
	
	SimpleRouter::group(['prefix' => '/ingelogd', 'middleware' => isAuthenticated::class], function(){
		SimpleRouter::get ('', 'SecureController@index')->name('secure.index');
		
	});

	
	SimpleRouter::group(['prefix' => '/admin', 'middleware' => IsSuperAdmin::class], function(){
		SimpleRouter::get ('', 'AdminController@index')->name('admin.index');

		SimpleRouter::group(['prefix' => '/topics'], function(){
			SimpleRouter::get ('', 'TopicController@index')->name('Topics.index');
			SimpleRouter::get ('/new', 'TopicController@new')->name('Topics.new');
			SimpleRouter::post ('/new', 'TopicController@save')->name('Topics.save');
			SimpleRouter::get ('/page', 'TopicController@page')->name('Topics.page');
		});

	});
	




	// STOP: Tot hier al je eigen URL's zetten, dit stukje laat de 4040 pagina zien als een route/url niet kan worden gevonden.
	SimpleRouter::get( '/not-found', function () {
		http_response_code( 404 );

		return '404 Page not Found';
	} );

} );


// Dit zorgt er voor dat bij een niet bestaande route, de 404 pagina wordt getoond (die hierboven als route staat ingesteld)
SimpleRouter::error( function ( Request $request, \Exception $exception ) {
	if ( $exception instanceof NotFoundHttpException && $exception->getCode() === 404 ) {
		response()->redirect( site_url() . '/not-found' );
	}

} );

