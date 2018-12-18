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
Route::get('/', function(){
    return view('login');
});
Route::resource('relawan','relawan');
Route::resource('tim','timController');
Route::resource('bencana','bencana');
Route::resource('user','userController');
Route::get('/anggota', 'timController@anggota');
Route::get('/relawan/{relawan}/editRelawanTim', 'relawan@editRelawanTim')->name('relawan.editRelawanTim');
Route::get('/login', 'userController@login');
Route::post('/loginPost', 'userController@loginPost');
Route::get('/register', 'userController@register');
Route::post('/registerPost', 'userController@registerPost');
Route::get('/logout', 'userController@logout')->name('logout');
Route::post('/relawan/{relawan}', 'relawan@updateTim')->name('relawan.updateTim');
Route::post('/tim/{tim}', 'timController@update')->name('tim.update');
Route::get('/tampilrelawan', function () {
    $relawan = DB::table('relawans')->paginate(8);

    return view('tabelrelawan', compact('relawan'));
})->name('tabelrelawan');

Route::get('/pilihtim', function () {
    $tim = DB::table('tims')->get();

    return view('pilihtim', ['tim' => $tim]);
})->name('pilihtim');

Route::get('/tampilbencana', function () {
    $bencana = DB::table('bencanas')->get();

    return view('keloladatabencana', ['bencana' => $bencana]);
})->name('tabelbencana');

Route::get('/timrha', function () {
    $tim = DB::table('tims')->get();

    return view('tabeltimrha', ['tim' => $tim]);
})->name('tabeltimrha');

Route::get('/timtrc', function () {
    $tim = DB::table('tims')->get();

    return view('tabeltimtrc', ['tim' => $tim]);
})->name('tabeltimtrc');

Route::get('/timtbk', function () {
    $tim = DB::table('tims')->get();

    return view('tabeltimtbk', ['tim' => $tim]);
})->name('tabeltimtbk');

Route::get('/buattim', function () {
     $relawan = DB::table('relawans')->paginate(15);

    return view('buattim', compact('relawan'));
})->name('buattim');

Route::get('/indexpengelola', function () {
    return view('indexpengelola');
})->name('indexpengelola');

Route::get('/kelola', function () {
    $relawan = DB::table('relawans')->paginate(8);

    return view('keloladatarelawan', compact('relawan'));
})->name('kelola');

Route::get('/tambah',function(){
	return view('tambahdatarelawan');
})->name('tambahrelawan');

Route::get('/register',function(){
    return view('registernewaccount');
})->name('register');

Route::get('/tambahbencana',function(){
    return view('tambahdatabencana');
})->name('tambahbencana');

Route::get('/homekoor',function(){
	return view('indexkoor');
})-> name('homekoor');


Route::get('/siapkantimform',function(){
    $relawan = DB::table('relawans')->get();

    return view('siapkantimform', ['relawan' => $relawan]);
})->name('siapkantimform');

Route::get('/indexstaffit',function(){

      $user = DB::table('users')->get();

    return view('indexstaffit', ['user' => $user]);
})->name('indexstaffit');


Route::get('/mobilisasirha', function(){
    $tim = DB::table('tims')->get();

    return view('mobilisasirha', ['tim' => $tim]);
})->name('mobilisasirha');

Route::get('/mobilisasitrc', function(){
    $tim = DB::table('tims')->get();

    return view('mobilisasitrc', ['tim' => $tim]);
})->name('mobilisasitrc');
Route::get('/mobilisasitbk', function(){
    $tim = DB::table('tims')->get();

    return view('mobilisasitbk', ['tim' => $tim]);
})->name('mobilisasitbk');

Route::get('/formmobilisasi', function(){
    $bencana = DB::table('bencanas')->get();

    return view('formmobilisasi', ['bencana' => $bencana]);
})->name('formmobilisasi');