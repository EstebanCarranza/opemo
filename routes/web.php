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
Route::get('/publication-list', function($cardTitle = 'Publicaciones')
{
    return view('pages.publist')->with('cardTitle',$cardTitle);
});
Route::get('/publication', function()
{
    return view('pages.publication');
});

Route::get('/ubications', function($cardTitle = 'Ubicaciones')
{
    return view ('pages.ubications')->with('cardTitle',$cardTitle);
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
Route::get('/login',        function(){return view('forms.login');});
Route::get('/signup',       function(){return view('forms.signup');});
Route::get('/contact',      function(){return view('forms.contact');});
Route::get('/reclam',       function(){return view('forms.reclam');});
Route::get('/profile-edit', function(){return view('forms.profile-edit');});
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
Route::get('/my-publications',          function($cardTitle = 'Mis publicaciones', $login = true){return view('pages.publist')->with('cardTitle',$cardTitle);});
Route::get('/my-ubications',            function($cardTitle = 'Mis ubicaciones', $login = true){return view('pages.ubications')->with('cardTitle',$cardTitle);});
Route::get('/my-recovery-objects',      function(){return view('pages.dashboard');});
Route::get('/my-user-reports',          function(){return view('pages.report-users');});
Route::get('/messages',          function(){return view('pages.answers');});
Route::get('/descartar',          function(){return view('pages.answers');});

//<\------------------------------------ CONTROL-PANEL ---------------------------------/>
//</------------------------------------ EDITS -----------------------------------------\>
Route::get('/edit-publication',          function(){return view('forms.edit-publication');});
Route::get('/results',                   function($cardTitle = 'Resultados de busqueda', $login = true){return view('pages.results')->with('cardTitle',$cardTitle);});
//<\------------------------------------ EDITS -----------------------------------------/>
Route::get('/profile',                   function(){return view('pages.profile');});


//Route::get('/test-01','Ciudad@index');

Route::resource('Ciudad', 'Ciudad');



