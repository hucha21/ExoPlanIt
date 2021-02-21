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
    return view('pages.pocetna');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view("pocetna",'pages.pocetna')->name('pocetna');
Route::view("vijesti",'pages.vijesti');
Route::view("profil",'pages.profil');
Route::view("slika_api",'pages.slika_api');
Route::view("isslokacija",'pages.isslokacija');
Route::view("galerija",'pages.galerija');
Route::view("literatura_korisnik",'pages.literatura');
Route::get("literatura",'LiteraturaController@index');
Route::view("admin",'pages.admin');
Route::view("kontakt",'pages.kontakt');
Route::post('/kontakt', 'KontaktController@send_mail')->name('addContact');
//preuzimanje fajla
Route::get('downloadFile/{file}', 'DownloadsController@downloadFile');
//upload fajla
Route::get('file-upload', 'DownloadsController@fileUpload')->name('file.upload');
Route::post('file-upload', 'DownloadsController@fileUploadPost')->name('file.upload.post');
Route::get('picture-upload', 'DownloadsController@pictureUpload')->name('picture.upload');
Route::post('picture-upload', 'DownloadsController@pictureUploadPost')->name('picture.upload.post');
//insert literature
Route::get('insert','LiteraturaController@insert')->name('literatura.upload');;
Route::post('create','LiteraturaController@create')->name('literatura.upload.post');
Route::resource('/literatura','LiteraturaController');