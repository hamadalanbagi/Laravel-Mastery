<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index(){
        // return view('welcome', [
            //     'name' => 'Tio',
            //     'age' => 24
            // ]);
            // return view('welcome')->with('name', 'world');
            // $name = 'Tio Saputra';
        // return view('welcome', compact('name'));

        $tasks = Task::all();


        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task){
        // $task = DB::table('tasks')->find($id);

        // Using Eloquent
        //$task = Task::find($id);
        return view('tasks.show', compact('task'));
    }
}
