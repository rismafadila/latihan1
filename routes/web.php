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
});

Route::get('about', function () {
    return '<h1>Hallo</h1>'
    .'selamat datang di webapp saya'
    .'<br>laravel,emang keren';
});

Route::get('profile', function () {
    $nama ="Risma Septiani Fadila";
    return "Nama saya adalah <b>$nama";

});

//route parameter
Route::get('post/{id}', function ($a) {
    return "Halaman post ke- <b>$a";

});

Route::get('bio/{nama}/{umur}/{alamat}', function ($a,$b,$c) {
    return "Nama : $a <br>
            Umur : $b <br>
            Alamat :$c";

});

//route optional parameter
Route::get('page/{page?}', function ($hal=1) {
    return "Halaman <b>$hal";

});

Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}', function ($a = null,$b= null,$c= null) {
    if($a = null && $b = null && $c = null){
        $pesan = "anda tidak pesan,silahkan pulang";
    }
    if($a != null){
        $pesan = "anda memesan"
        ."<br> makan : $a ";
    }
    if($a != null && $b != null){
        $pesan = "anda memesan"
        ."<br> makan : $a "
        ."<br> minum : $b ";
    }
    if($a != null && $b != null && $c != null){
        $pesan = "anda memesan"
        ."<br> makan : $a "
        ."<br> minum : $b "
        ."<br> cemilan : $c ";
    }
    return $pesan;
});

