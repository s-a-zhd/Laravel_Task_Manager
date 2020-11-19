<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    //
    public function index(){
        $todo = Todo::all();
        return view ('index')->with('todos',$todo);
    }

    public function show($todo){
       $todo = Todo::find($todo);
       return view ('show')->with('todos',$todo);
       
    }
}
