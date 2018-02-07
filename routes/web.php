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
use App\Client;


Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/getAllClients', function (){
    if(Request::ajax()){
        return 'okokokok';
    }
});

Route::get('/addNewClient', function (){
    if(Request::ajax()){
        return 'adada';
    }
});
*/
Route::resource('clients','ClientResourceController');
/*
Route::get('/clients', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    //var_dump('Client::all();', Client::all());
    return Client::all();
});
*/
