<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    //
    public function index(){

        //select * form Task where iscompleted = false
        $tasks = Task::where("iscompleted",false)->orderBy("id","desc")->get();
        $completed_tasks = Task::where("iscompleted",true)->get();
        return view('welcome',compact('tasks','completed_tasks'));
    }
}
