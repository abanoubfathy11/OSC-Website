<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\eventController@getAllCommittees')->name('homePage');
Route::post('/registration','App\Http\Controllers\eventController@store')->name('registration');
Route::get('/appointments','App\Http\Controllers\eventController@getAppointments')->name('appointmentsAjax');

Route::get('admin',function (){
    return view('admin');
});

Route::group(['prefix' => 'admin'], function () {

    Route::get('EventMembers','App\Http\Controllers\eventController@getAllMembers')->name('EventMembers');


    Route::get('ArtCommittee/{committee_id}','App\Http\Controllers\AppointmentsController@getAllAppoitments')->name('GetAll');
    Route::post('ArtCommittee/{committee_id}', 'App\Http\Controllers\AppointmentsController@insertAppoitment')->name('Insert');
    Route::get('ArtCommittee/{committee_id}/{id}', 'App\Http\Controllers\AppointmentsController@deleteAppointment')->name('Delete');


});

