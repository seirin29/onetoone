<?php
use App\User;
use App\Address;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {
    return view('welcome');
});

Route::get('/insert', function() {
    $user = User::findOrFail(1);
	$address = new address(['name'=>'Jl. Panjang Sekali Gak Nyampe2']);
	$user->address()->save($address);
});

Route::get('/update', function() {
    $address = Address::whereUserId(1)->first();
	$address ->name = "Jl. Pendek Sekali langsung Nyampe";
	$address->save();
});

Route::get('/read', function() {
	$user = User::findOrFail(1);
    echo $user->name;
	echo $user->address->name;
});

Route::get('/delete', function() {
	$user = User::findOrFail(1);
	$user->address()->delete();
});

