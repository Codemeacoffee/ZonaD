<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', [Controller::class, 'index']);

Route::get('cumpleaños', function () {
    return view('birthdays');
});

Route::get('paintball-adultos', function () {
    return view('paintball-adults');
});

Route::get('paintball-junior-infantil', function () {
    return view('paintball-kids');
});

Route::get('campamento-urbano', function () {
    return view('urban-camp');
});

Route::get('grupos-escolares', function () {
    return view('school-groups');
});

Route::get('team-building', function () {
    return view('team-building');
});

Route::get('otros-grupos', function () {
    return view('other-groups');
});

Route::get('tarifas-y-reservas', function () {
    return view('rates-and-reservations');
});

Route::get('contacto', function () {
    return view('contact');
});

Route::get('faq-zona-d', function () {
    return view('faq-zona-d');
});

Route::get('faq-paintball', function () {
    return view('faq-paintball');
});

Route::get('protocolo-covid', function () {
    return view('covid-protocol');
});

//----------------------------------------------------------- ADMIN -----------------------------------------------------------//

Route::get('admin', [Controller::class, 'admin']);

Route::post('login', [Controller::class, 'login']);

Route::get('createAdmin', function (){return view('createAdmin');})->middleware('validateAdmin');

Route::post('createAdmin', [Controller::class, 'createAdmin'])->middleware('validateAdmin');

Route::get('admin/home', [Controller::class, 'home'])->middleware('validateAdmin');

Route::post('createNew', [Controller::class, 'createNew'])->middleware('validateAdmin');

Route::post('editNew/{id}', [Controller::class, 'editNew'])->middleware('validateAdmin');

Route::get('deleteNew/{id}', [Controller::class, 'deleteNew'])->middleware('validateAdmin');

Route::get('closeSession', [Controller::class, 'logout'])->middleware('validateAdmin');
