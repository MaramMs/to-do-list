<?php

namespace App\Http\Controllers\Admin;
use App\Models\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TasksController extends Controller
{
public function index(){
    $tasks = Task::all();
 return view('admin.tasks.index',[
     'tasks'=>$tasks,
    //  'title'=>,
 ]);
}
public function create(){
 return view('admin.tasks.create');
}
public function store( Request $request){
   
}
}

