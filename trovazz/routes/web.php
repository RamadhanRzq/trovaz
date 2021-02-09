<?php

use Illuminate\Support\Facades\Route;
use App\Berita;
use App\Destinasi;
use App\Event;
use App\Penginapan;
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
  $data['berita']= Berita :: all();
  $data['destinasi']= Destinasi :: all();
  $data['event']= Event :: all();
  $data['penginapan']= Penginapan :: all();
    return view('welcome',$data);
});

Route::group(['middleware' => 'prevent-back-history','is_admin'],function () {
  Auth::routes();
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
});

//DASHBOARD ADMIN
Route::get('/admin/home/dashboard', 'HomeController@adminDashboard')->name('admin.index')->middleware('is_admin');


//Detail
Route::get('/home/{id}', 'HomeController@detailevent')->name('detail.event');
Route::get('/home/berita/{id}', 'HomeController@detailberita')->name('detail.berita');


//FORM USER
Route::get('admin/index/indexuser','UserController@index')->name('user.index');
Route::get('admin/forms/formuser','UserController@create')->name('user.create');
Route::post('admin/forms/formuser','UserController@store')->name('user.store');
Route::get('admin/forms/formedituser/{id}','UserController@edit')->name('user.edit');
Route::put('admin/forms/formedituser/{id}','UserController@update')->name('user.update');
Route::delete('admin/forms/hapususer/{id}','UserController@destroy')->name('user.destroy');

//FORM DESTINASI
Route::get('admin/index/indexdestinasi', 'DestinasiController@index')->name('destinasi.index');
Route::get('admin/forms/formdestinasi', 'DestinasiController@create')->name('destinasi.create');
Route::post('admin/forms/formdestinasi','DestinasiController@store')->name('destinasi.store');
Route::get('admin/forms/formeditdestinasi/{id}','DestinasiController@edit')->name('destinasi.edit');
Route::put('admin/forms/formeditdestinasi/{id}','DestinasiController@update')->name('destinasi.update');
Route::delete('admin/forms/hapusdestinasi/{id}','DestinasiController@destroy')->name('destinasi.destroy');

//FORM EVENT
Route::get('admin/index/indexevent', 'EventController@index')->name('event.index');
Route::get('admin/forms/formevent', 'EventController@create')->name('event.create');
Route::post('admin/forms/formevent','EventController@store')->name('event.store');
Route::get('admin/forms/formeditevent/{id}','EventController@edit')->name('event.edit');
Route::put('admin/forms/formeditevent/{id}','EventController@update')->name('event.update');
Route::delete('admin/forms/hapusevent/{id}','EventController@destroy')->name('event.destroy');

//FORM BERITA
Route::get('admin/index/indexberita', 'BeritaController@index')->name('berita.index');
Route::get('admin/forms/formberita', 'BeritaController@create')->name('berita.create');
Route::post('admin/forms/formberita','BeritaController@store')->name('berita.store');
Route::get('admin/forms/formeditberita/{id}','BeritaController@edit')->name('berita.edit');
Route::put('admin/forms/formeditberita/{id}','BeritaController@update')->name('berita.update');
Route::delete('admin/forms/hapusberita/{id}','BeritaController@destroy')->name('berita.destroy');

//FORM PENGINAPAN
Route::get('admin/index/indexpenginapan', 'PenginapanController@index')->name('penginapan.index');
Route::get('admin/forms/formpenginapan', 'PenginapanController@create')->name('penginapan.create');
Route::post('admin/forms/formpenginapan','PenginapanController@store')->name('penginapan.store');
Route::get('admin/forms/formeditpenginapan/{id}','PenginapanController@edit')->name('penginapan.edit');
Route::put('admin/forms/formeditpenginapan/{id}','PenginapanController@update')->name('penginapan.update');
Route::delete('admin/forms/hapuspenginapan/{id}','PenginapanController@destroy')->name('penginapan.destroy');