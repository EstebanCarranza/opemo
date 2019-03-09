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
Route::get('/publication-list', function()
{
    return view('pages.publist');
});
Route::get('/publication', function()
{
    return view('pages.publication');
});

Route::get('/ubications', function()
{
    return view ('pages.ubications');
});
Route::match(['get','post'],'/dashboard', function()
{
    //Revisar el kernel, por ahora solo está desactivada la seguridad, pero no debe ser así
    //Se desactivó el middleware VerifyCsrfToken para peticiones POST seguras
    //Ruta de desactivación: app/Http/Kernel.php
    //Elemento comentarizado:  \App\Http\Middleware\VerifyCsrfToken::class,
    return view('pages.dashboard');
});
//</------------------------------------ FORMS ------------------------------------\>
Route::get('/login',    function(){return view('forms.login');});
Route::get('/signup',   function(){return view('forms.signup');});
Route::get('/contact',  function(){return view('forms.contact');});
Route::get('/reclam',   function(){return view('forms.reclam');});
//<\------------------------------------ FORMS ------------------------------------/>
//</------------------------------------ INFO -------------------------------------\>
Route::get('/privacity',            function(){return view('info.privacity');});
Route::get('/termcon',              function(){return view('info.terminos-condiciones');});
Route::get('/frequent-questions',   function(){return view('info.frecuent-questions');});
Route::get('/report-users',         function(){return view('info.report-users');});
//<\------------------------------------ INFO -------------------------------------/>
Route::any('/test',                 function(){return view('pages.test');});
//</------------------------------------ ACTIONS ------------------------------------\>
Route::match(['get','post'],'/send-reclam', function(){return view('pages.dashboard');});
Route::match(['get','post'],'/send-login',  function(){return view('pages.dashboard');});
Route::match(['get','post'],'/send-signup', function(){return view('pages.dashboard');});
Route::match(['get','post'],'/send-contact', function(){return view('pages.dashboard');});
//<\------------------------------------ ACTIONS ------------------------------------/>
//</------------------------------------ CONTROL-PANEL ---------------------------------\>
Route::get('/my-profile',               function(){return view('pages.profile');});
Route::get('/my-publications',          function(){return view('pages.dashboard');});
Route::get('/my-ubications',            function(){return view('pages.dashboard');});
Route::get('/my-recovery-objects',      function(){return view('pages.dashboard');});
Route::get('/my-user-reports',          function(){return view('pages.dashboard');});

//<\------------------------------------ CONTROL-PANEL ---------------------------------/>
