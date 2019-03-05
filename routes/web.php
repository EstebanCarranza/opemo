<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function ($showCarousel = true) {
    return view('pages.landingpage')->with('showCarousel',$showCarousel);
});
Route::match(['get','post'],'/dashboard', function()
{
    //Revisar el kernel, por ahora solo está desactivada la seguridad, pero no debe ser así
    //Se desactivó el middleware VerifyCsrfToken para peticiones POST seguras
    //Ruta de desactivación: app/Http/Kernel.php
    //Elemento comentarizado:  \App\Http\Middleware\VerifyCsrfToken::class,
    return view('pages.publist');
});
Route::get('/publication', function()
{
    return view('pages.publication');
});
Route::get('/login',function()
{
    return view('pages.login');
});
Route::get('/privacity',function()
{
    return view('pages.privacity');
});
Route::get('/termcon',function()
{
    return view ('pages.terminos-condiciones');
});
Route::get('/ubications', function()
{
    return view ('pages.ubications');
});
Route::get('/frequent-questions',function()
{
    return view('pages.frecuent-questions');
});
Route::get('/contact', function()
{
    return view('pages.contact');
});
Route::get('/signup', function()
{
    return view('pages.signup');
});
Route::get('/reclam',function()
{
    return view('pages.reclam');
});
Route::get('/dash',function()
{
    return view('pages.dash');
});
Route::post('/dash',function()
{
    return view('pages.dash');
});
Route::get('/report-users',function(){
    return view('pages.report-users');
});
//Route::controller('/publicacion','')