<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

use function Laravel\Prompts\form;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return '<h1>welcome to laravel 10</h1>';
// });
// Route::get('/go', function () {
//     return "<h1>go to laravel 10</h1>";
// });
// Route::get('/', function () {
//     return '<form action="data" method="post">
//     // <input type="hidden" name=" _token" value="' . csrf_token() . '"/>
//     ' . csrf_field() . '
//     <input type="submit" value="go"/></form>';
// });
// Route::post('/data', function () {
//     return 'go';
// // });

//put


// Route::get('/', function () {
//     return '<form action="/my/data" method="post">
//      <input type="hidden" name=" _method" value="put"/>
//     ' . csrf_field() . '
//     <input type="submit" value="go"/></form>';
// });
// Route::put('/my/data', function () {
//     return 'welcome to put route';
// });


//patch

// Route::get('/', function () {
//     return '<form action="/my/patch" method="post">
//     <input type="hidden" name= "_method" value="PATCH"/>
//     ' . csrf_field() . '
//     <input type= "submit" value="go"/></form>';
// });
// Route::patch('/my/patch', function () {
//     return 'my patch route';
// });

//
