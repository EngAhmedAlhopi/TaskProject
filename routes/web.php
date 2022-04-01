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

Route::get('/about', function () {
    // $name = 'AhmedAlhopi';
    // $name = request('name');
    // $age = 22;
    // $tasks = [
    //      'task 1',
    //      'task2',
    //      'task3'
    // ];

    // $tasks = [
    //     'name1' => 'Task 1',
    //     'name2' => 'Task 2',
    //     'name3' => 'Task 3',
    //     'name4' => 'Task 4',
    //     'name5' => 'Task 5',
    //     'name6' => 'Task 6',
    //     'name7' => 'Task 7',
    //     'name8' => 'Task 8',
    //     'name9' => 'Task 9',
    //     'name10' => 'Task 10'
    // ];

    // return view('about',[
    //     'name' => $name,
    //     'age' => $age
    // ]);
    $tasks = DB::table('table1')->get();
    return view('about', compact(/*'name','age',*/'tasks'));
    /*
في هذه الطريقة يجب ن يكون اسم المتغير المرسل نفس اسم المتغير اسم المتغير
الي حيوخد القيمة منه
*/
    // return view('about')->with('name',$name)->with('age',$age);

    // return view('about',compact('tasks'));

});

Route::get('/task/{id}', function ($id) {
    // $tasks = [
    //     'name1' => 'Task 1',
    //     'name2' => 'Task 2',
    //     'name3' => 'Task 3',
    //     'name4' => 'Task 4',
    //     'name5' => 'Task 5',
    //     'name6' => 'Task 6',
    //     'name7' => 'Task 7',
    //     'name8' => 'Task 8',
    //     'name9' => 'Task 9',
    //     'name10' => 'Task 10'
    // ];
    // $task = $tasks[$id];
    // return view('task',compact('task','id'));
    $tasks = DB::table('table1')->find($id);
    $name = $tasks->name;
    return view('task', compact('tasks', 'name'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/mydata', function () {
    $name = '';
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
    return view('mydata', compact('datas', 'phone', 'name'));
});

Route::post('/store', function () {
    // $name = request('fname');
    $name = $_POST['fname'];
    $datas = [
        // 'name' => 'Ahmed Iyad Alhopi',
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
    // $name = request('name');
    return view('mydata', compact('name', 'datas', 'phone'));
});

// Route::post('/mydata',function(){
//     $name = $_POST['fname'];///////مههههههههههههههههههههمة بدل requst تستخدم
//     return view('task',compact('name'));
// });

// Route::post('/store',function(){
//     $fname = request('fname');
//     return view('contact','fname');
// });

Route::get('/newview', function () {
    // $name = $_POST['name'];
    return view('newview'/*,compact('name')*/);
});

Route::post('/send', function () {
    $name = $_POST['name'];
    return view('print', compact('name'));
});
//php name resolver  لاستدعاء المكتبات ل php
