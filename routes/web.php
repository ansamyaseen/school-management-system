<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('/', function () {
    return view('dashboard');
});
Route::resource('students', StudentController::class);

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function()
    {
        return view('/dashboard');
    });

});
