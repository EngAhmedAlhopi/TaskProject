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

Route::get('/about',function(){
    $name = 'AhmedAlhopi';
    $age = 22;
    // $tasks = [
    //      'task 1',
    //      'task2',
    //      'task3'
    // ];

    $tasks = [
        '1' => 'Task 1',
        '2' => 'Task 2',
        '3' => 'Task 3',
        '4' => 'Task 4',
        '5' => 'Task 5',
        '6' => 'Task 6',
        '7' => 'Task 7',
        '8' => 'Task 8',
        '9' => 'Task 9',
        '10' => 'Task 10'
    ];

    // return view('about',[
    //     'name' => $name,
    //     'age' => $age
    // ]);

    return view('about',compact('name','age','tasks'));
/*
في هذه الطريقة يجب ن يكون اسم المتغير المرسل نفس اسم المتغير اسم المتغير
الي حيوخد القيمة منه
*/
    // return view('about')->with('name',$name)->with('age',$age);

    // return view('about',compact('tasks'));

});

Route::get('/task/{id}',function($id){
    $tasks = [
        '1' => 'Task 1',
        '2' => 'Task 2',
        '3' => 'Task 3',
        '4' => 'Task 4',
        '5' => 'Task 5',
        '6' => 'Task 6',
        '7' => 'Task 7',
        '8' => 'Task 8',
        '9' => 'Task 9',
        '10' => 'Task 10'
    ];
    $task = $tasks[$id];
    return view('task',compact('task','id'));
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/mydata',function(){
    $datas = [
        'name' => 'Ahmed Iyad Alhopi',
        'age' => 22,
        'major' => 'Enginering',
        // 'phone' => [
        //     'j' => '0595421229',
        //     'w' => '0567441229'
        // ],
        'adderss' => 'Rafah'
    ];
    $phone = [
        'j' => '0595421229',
        'w' => '0567441229'
    ];
    return view('mydata',compact('datas' , 'phone'));
});

Route::post('/store',function(){
    $datas = [
        'name' => 'Ahmed Iyad Alhopi',
        'age' => 22,
        'major' => 'Enginering',
        // 'phone' => [
        //     'j' => '0595421229',
        //     'w' => '0567441229'
        // ],
        'adderss' => 'Rafah'
    ];
    $phone = [
        'j' => '0595421229',
        'w' => '0567441229'
    ];
    $name =request('name');
    return view('mydata',compact('name','datas','phone'));
});
