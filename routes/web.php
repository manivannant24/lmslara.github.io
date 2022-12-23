<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('auth/login');
})->name('login')->middleware('prevent-back-history');
Route::get('/tes', function () {
    return view('tes');
})->middleware('prevent-back-history');
    Route::get('/newtest', function () {
        return view('newtest');
    })->middleware('prevent-back-history');
   // Route::get('/upload-file',[App\Http\Controllers\HomeController::class, 'filter2']);
Route::post('/upload-file', [App\Http\Controllers\HomeController::class, 'fileUpload'])->name('fileUpload')->middleware('prevent-back-history');
Route::get('/profile', function () {
    return redirect('password/confirm');
})->middleware('prevent-back-history');

Route::get('/leadsearch', [App\Http\Controllers\HomeController::class, 'filter2'])->name('filter2')->middleware('prevent-back-history');

Route::get('/pros', [App\Http\Controllers\HomeController::class, 'pro'])->name('pros')->middleware('prevent-back-history');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home')->middleware('prevent-back-history');
Route::post('/leadsearch', [App\Http\Controllers\HomeController::class, 'filter'])->name('filter')->middleware('prevent-back-history');
// Route::get('/ls', [App\Http\Controllers\HomeController::class, 'ls'])->name('ls');

Route::get('/addcountry', function () {
    return view('addcountry');
})->middleware('prevent-back-history');
Route::Post('/addcountry', [App\Http\Controllers\HomeController::class, 'addcountry'])->name('addcountry')->middleware('prevent-back-history');
Route::get('/addcategory', function () {
    return view('addcategory');
})->middleware('prevent-back-history');
Route::Post('/addcategory', [App\Http\Controllers\HomeController::class, 'addcategory'])->middleware('prevent-back-history');
Route::get('/importForm',[App\Http\Controllers\HomeController::class, 'importForm'])->middleware('prevent-back-history');
Route::post('/importForm',[App\Http\Controllers\HomeController::class, 'import'])->name('import.file')->middleware('prevent-back-history');

Route::get('/exportintoexcel',[App\Http\Controllers\HomeController::class, 'exportintoexcel'])->middleware('prevent-back-history');
Route::get('/update/{id}',[App\Http\Controllers\HomeController::class, 'update'])->middleware('prevent-back-history');
// Route::get('/filteranddownload',function(){
//     return view('filterpage');
// });
Route::get('/filteranddownload',[App\Http\Controllers\HomeController::class,'filteranddownload'])->middleware('prevent-back-history');
Route::post('/updatesave',[App\Http\Controllers\HomeController::class, 'updatesave'])->middleware('prevent-back-history');
Route::get('/delete/{id}',[App\Http\Controllers\HomeController::class,'delete'])->middleware('prevent-back-history');
Route::get('/prac',[App\Http\Controllers\HomeController::class,'prac'])->middleware('prevent-back-history');

Auth::routes();
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/leadtakenanalysis',[App\Http\Controllers\HomeController::class,'map']
)->name('admin.leadtakenanalysis')->middleware('is_admin');
Route::get('/lta',[App\Http\Controllers\HomeController::class,'Chartjs']
)->middleware('is_admin','prevent-back-history');  