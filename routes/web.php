<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\User;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/hello', function () {
    $user = new User;
    $user->name = 'maratib';
    $user->email = 'maratib@gmail.com';
    $user->password = 'abc';
    $user->save();

    return "All Done";
});

$router->get('user/{id}', function ($id) {
    return User::findOrFail($id);
    // return $id;
});


$router->get('/key', function () {
    return \Illuminate\Support\Str::random(32);
});
