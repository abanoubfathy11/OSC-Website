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

Route::get('/', function () {
    return view('welcome');
})->name('homePage');
Route::post('/registration','App\Http\Controllers\eventController@store')->name('registration');

Route::get('admin',function (){
    return view('admin');
});

Route::group(['prefix' => 'admin'], function () {

    Route::get('EventMembers','App\Http\Controllers\eventController@getAllMembers')->name('EventMembers');

    Route::get('ArtCommittee',function (){
        return view('Committees.ArtCommittee');
    })->name('ArtCommittee');

    Route::get('BlenderCommittee',function (){
        return view('Committees.BlenderCommittee');
    })->name('BlenderCommittee');

    Route::get('cccCommittee',function (){
        return view('Committees.cccCommittee');
    })->name('cccCommittee') ;

    Route::get('EnglishCommittee',function (){
        return view('Committees.EnglishCommittee');
    })->name('EnglishCommittee');

    Route::get('GameCommittee',function (){
        return view('Committees.GameCommittee');
    })->name('GameCommittee');

    Route::get('HRCommittee',function (){
        return view('Committees.HRCommittee');
    })->name('HRCommittee');

    Route::get('LinuxCommittee',function (){
        return view('Committees.LinuxCommittee');
    })->name('LinuxCommittee');

    Route::get('LRCommittee',function (){
        return view('Committees.LRCommittee');
    })->name('LRCommittee');

    Route::get('PRCommittee',function (){
        return view('Committees.PRCommittee');
    })->name('PRCommittee');

    Route::get('ProjectsCommittee',function (){
        return view('Committees.ProjectsCommittee');
    })->name('ProjectsCommittee');

    Route::get('WebCommittee',function (){
        return view('Committees.WebCommittee');
    })->name('WebCommittee');


});

