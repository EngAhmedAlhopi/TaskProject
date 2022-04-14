<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\RequestStack;

class TaskController extends Controller
{
    public function index(){
        $tasks = DB::table('tasks')->get();
        return view('tasks',compact('tasks'));
    }

    public function show($id){

    }

    // public function store(){
    //     $name = $_POST['name'];
    //     DB::table('tasks')->insert([
    //         'name' => $name
    //     ]);
    //     return redirect()->to('/tasks');
    //     // return 'Store';
    // }

    public function store(Request $reguest){
        // $name = $_POST['name'];
        DB::table('tasks')->insert([
            'name' => $reguest->name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->to('/tasks');
        // return 'Store';
    }

    public function destroy(Request $request){
        DB::table('tasks')->where('id', '=', $request->id)->delete();
        return redirect()->to('/tasks');
    }

    public function displaydata(Request $request){
        $task = DB::table('tasks')->find($request->id);
        return view('displaydata',compact('task'));
    }

    public function update(Request $request){
        DB::table('tasks')->where('id', $request->id)->updateOrInsert(['id' => $request->id,'name' => $request->name, 'description' => $request->description,'updated_at' => now()]);
        return redirect()->to('displaydata');
    }
}
