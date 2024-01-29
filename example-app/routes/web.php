<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\C_titles;
use App\Model\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*-------------------------------------------------15/01/2024------------------------------------------------------------------------*/
Route::get('/my-controller', [MyController::class, 'index']);
Route::get('/my-controller2', 'App\Http\Controllers\MyController@index');
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller3', 'MyController@index');
    Route::post('/my-controller3-post', 'MyController@index');
});
Route::resource('/my-controller4', MyController::class);

Route::resource('titles', C_titles::class);
/*----------------------------------------------29/01/2024---------------------------------------------------------------------------*/

Route::get('/login',[MyAuth::class, 'login_view'])->name('login');
Route::get('/register',[MyAuth::class, 'register_view']);
Route::get('/logout',[MyAuth::class, 'login_view']);
Route::post('/login',[MyAuth::class, 'login_view']);
Route::post('/register',[MyAuth::class, 'register_view']);


Route::resource('titles', C_titles::class);
Route::middleware('auth')->group(function(){
    //auth first
});

/*-------------------------------------------------------------------------------------------------------------------------*/


Route::get('/', function () {
    // return view('welcome');
    return 'hi';
});

Route::get('/my-route', function () {
    //echo "<h1> My Route Page</h1>";
    //return view('')
    //return viem('myroute');
    $data = ['val_a' => 'Hello World!'];
    $data['val_b'] = "Lalaval";
    return view('myfolder.mypage',$data);
});

Route::post('/my-route',function(Request $req){
    $data['myinput'] = $req -> input('myinput');
    return view ('myroute',$data);
});

Route::get('/my-display', function () {
    return view('myfolder.input');
});

Route::post('/my-display',function(Request $req) {
    $data['myinputnumber'] = $req -> input('myinputnumber');
    return view('mydisplay', $data);
});

