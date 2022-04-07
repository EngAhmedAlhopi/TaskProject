<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){
        $tasks = DB::table('tasks')->get();
        return view('tasks',compact('tasks'));
    }

    public function show($id){

    }

    public function store(){
        $name = $_POST['name'];
        DB::table('tasks')->insert([
            'name' => $name
        ]);
        return redirect()->to('/tasks');
        // return 'Store';
    }

}
