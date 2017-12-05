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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
	return 'nama saya gilang';
});

Route::get('g/{ikan}',function($a){
		return 'selamat datang <br>'
    		   .'nama saya adalah <b>' .$a.'<b>';
});

//ROUTE PARAMETER

Route::get('user/{nama}', function ($a) {
    return 
    'selamat datang <br>'
    .'nama saya adalah <b>' .$a.'<b>'
    		;
});

Route::get('kantin/{nama}/{minum}/{ngemil}', function ($a,$b,$c) {
    return 'Makan nya <b>'.$a.'</b><br>'
    		.'Minum nya <b>'.$b.'</b><br>'
    		.'Ngemil nya <b>' .$c.'</b><br>'
    		;
});

//ROUTE OPSIONAL PARAMETER
Route::get('ada/{nama?}',function ($a = "dadang jebred"){
		return $a;
});

Route::get('/ali',function (){
    //mengeluarkan semua data yang ada di table siswa melalui modelsiswa
    $a=App\PostModel::all();
    return $a;
});

Route::get('ab',function(){
    //hanya mengeluarkan yang no id nya 2
    $a = App\PostModel::find(2);
    return $a;
});

Route::get('ac',function(){
    //
    $a = App\PostModel::Where('kelas','xi')->get();
    return $a;
});