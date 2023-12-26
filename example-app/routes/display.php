<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::post('/my-display',function(Request $req){
    $data['myinputnumber'] = $req -> input('myinputnumber');
    return view ('mydisplay',$data);
});
