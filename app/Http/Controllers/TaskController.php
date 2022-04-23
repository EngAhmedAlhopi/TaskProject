<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\RequestStack;

class TaskController extends Controller
{
    public function index(){
        // $tasks = DB::table('tasks')->orderBy('name','DESC')->get();
        // $tasks = DB::table('tasks')->orderBy('name','ASC')->get();
        // $tasks = DB::table('tasks')->orderBy('name')->get();
        $tasks = Task::all();
        // dd($tasks);
        return view('tasks',compact('tasks'));
    }

    public function show(Request $request){
        // $task = DB::table('tasks')->find($request->id);
        $task = Task::find($request->id);
        return view('show',compact('task'));
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
        // DB::table('tasks')->insert([
        //     'name' => $reguest->name,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        $data = new Task();
        $data->name = $reguest->name;
        $data->created_at = now();
        $data->updated_at = now();
        $data->save();
        return redirect()->to('/tasks');
        // return 'Store';
    }

    public function destroy(Request $request){
        // DB::table('tasks')->where('id', '=', $request->id)->delete();
        $task = Task::find($request->id);
        $task->delete();
        return redirect()->to('/tasks');
    }

    public function updatedata(Request $request){
        $task = DB::table('tasks')->find($request->id);
        return view('updatedata',compact('task'));
    }

    public function update(Request $request){
        // DB::table('tasks')->where('id', $request->id)->update(['name' => $request->name, 'description' => $request->description,'updated_at' => now()]);

        /*
            First Method to update using save function
        */
        // $task = Task::find($request->id);
        // $task->name = $request->name;
        // $task->description = $request->description;
        // $task->created_at = now();
        // $task->save();

        /*
            Second method to updat data using update function
        */
        Task::where('id',$request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'updated_at' => now()
        ]);

        return redirect()->to('/tasks');
    }
}
