<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodosController extends Controller
{
    //
    public function index(){
        $todos =  Todo::all();
        //dd($todos);
        return view('todo.index')->with('todos',$todos);
    }
}
