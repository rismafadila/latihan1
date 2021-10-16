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

Route::get('profilee', function () {
    $nama ="Risma Septiani Fadilaa";
    return "Nama saya adalah <b>$nama";

});

//route parameter
Route::get('post/{id}', function ($a) {
    return view('post',['post' => $a]);

});

Route::get('bio/{nama}/{umur}/{alamat}', function ($a,$b,$c) {
    return "Nama : $a <br>
            Umur : $b <br>
            Alamat :$c";

});

Route::get('bioo/{nama}/{umur}/{alamat}', function ($a,$b,$c) {
    return view('bio',compact('a','b','c'));

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

//route basic
Route::get('/about', function () {
    return view('about');
});

Route::get('profile', function () {
    $nama ="Risma Septiani Fadila";
    return view('profile',compact('nama'));
//array assosiatof ["namaa" => $mood]
});

Route::get('biodata', function () {
    $nama ="Risma Septiani Fadila";
    $umur ="18 tahun";
    $alamat ="Jl.Ciparay tengah";
    $sekolah ="Smk Assalaam Bandung";
    $kelas ="XII RPL 1";
    $hobi ="Memasak";
    return view('biodata',compact('nama','umur','alamat','sekolah','kelas','hobi'));
});

Route::get('blog', function(){
    $posts =[
        ['id' => 1, 'title' => 'Lorem Ipsum 1','content' => 'Content kesatu'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2','content' => 'Content kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3','content' => 'Content ketiga']
    ];
    return view ('blog' , compact('posts'));
});

Route::get('format', function(){
    $data =[
        ['id' => 1, 'name' => 'Risma','username' => 'risma','email' => 'risma@gmail.com' ,'alamat' => 'bandung','mapel'=>[
            'mapel1' => 'Matematika',
            'mapel2' => 'Fisika',
            'mapel3' => 'Kimia'

        ]],
        ['id' => 2, 'name' => 'Lira','username' => 'lira','email' => 'lira@gmail.com' ,'alamat' => 'bandung','mapel'=>[
            'mapel1' => 'Matematika',
            'mapel2' => 'Fisika',
            'mapel3' => 'Kimia'

        ]],
        ['id' => 3, 'name' => 'Seni','username' => 'seni','email' => 'seni@gmail.com' ,'alamat' => 'bandung','mapel'=>[
            'mapel1' => 'Matematika',
            'mapel2' => 'Fisika',
            'mapel3' => 'Kimia'

        ]],
        ['id' => 4, 'name' => 'kayla','username' => 'kayla','email' => 'kayla@gmail.com' ,'alamat' => 'bandung','mapel'=>[
            'mapel1' => 'Matematika',
            'mapel2' => 'Fisika',
            'mapel3' => 'Kimia'

        ]],
        ['id' => 5, 'name' => 'Syifa','username' => 'syifa','email' => 'syifa@gmail.com' ,'alamat' => 'bandung','mapel'=>[
            'mapel1' => 'Matematika',
            'mapel2' => 'Fisika',
            'mapel3' => 'Kimia'

        ]],

    ];
    return view ('format' , compact('data'));
});

    Route::get('/testmodel', function() {
    $query = App\Models\Post::all() ;
    return $query;
    });

    Route::get('/testmodel2', function() {
    $query = App\Models\Post::find(1) ;
    return $query;
        });

    Route::get('/testmodel3', function() {
    $query = App\Models\Post::where('title','like','%Juz Amma%')->get();
    return $query;
            });

    Route::get('/testmodel4', function() {
    $post = App\Models\Post::find(1);
    $post->title = "hijaiyah";
    $post->save();
    return $post;

                });

    Route::get('/testmodel5', function() {
    $post = App\Models\Post::find(1);
    $post->delete();
                   // check data di database

                    });

    Route::get('/testmodel6', function() {
    $post = new App\Models\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
                        // check record baru di database

                        });

                        Route::get('/dosen', function() {
                            $query = App\Models\dosen::all();
                            return view('dosens',compact('query'));
                                    });

                                    Route::get('/mhs', function() {
                                        $query = App\Models\mahasiswa::all();
                                        return view('mahasiswas',compact('query'));
                                                });
