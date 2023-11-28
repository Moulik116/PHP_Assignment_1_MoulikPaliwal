<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello/{num1}/{num2}', function ($num1,$num2=0) {
    return 'Addition: '.($num1+$num2);
})->where('num1','[0-9]+')
->where('num2','[0-9]+');

Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
});

Route::get('/hello', function () {
    return view('hello',['name'=>'Moulik']); //view funtion used to access hello.blades.php
});

Route::get('/name/{name}', function ($name) {
    return view('name',['name'=>$name]); //view funtion used to access hello.blades.php
});

Route::get('/sum/{num1}/{num2}', function ($num1,$num2=0) {
    return view('sum',['sum'=>$num1+$num2]);
})->where('num1','[0-9]+')
->where('num2','[0-9]+');

Route::get('/date', function () {
         return view('date',['date'=>date('D, jS M, Y')]); //view funtion used to access hello.blades.php
     });

Route::get('/time', function () {
    $time = date('G');
    return view('time',['time'=>$time]); //view funtion used to access hello.blades.php
    });     

Route::get('/loop',function(){
    $tasks=[
        'First Task',
        'Second Task'
    ];
    return view('loop',['tasks'=>$tasks]);
});

Route ::get('/dashboard',function(\Illuminate\Http\Request $request){
    //dd($request->input('name'));
    //dd($request->ip);
    //return redirect ('/about')
    $name=$request->input('name');
    return view('home',['name'=>$name]); //http://localhost/demo1/public/dashboard?name=Moulik   
})->name('dashboard');

Route ::get('/about',function(){
    return view('about');    
});