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

    public function create(){
        return view('create');
    }

    public function store(){
        //dd(request()->all());
        $this->validate(request(),[
            'name' => 'required',
            'description' => 'required'
        ]);
        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data["name"];
        $todo->description = $data["description"];
        $todo->save();

        session()->flash('success','Todo Created Successfully');
        return redirect('/todo');

    }

    public function edit($todo){
        $get = Todo::find($todo);
        return view('edit')->with('todos',$get);
    }

    public function update($id){
        $this->validate(request(),[
            "name" => "required",
            "description" => "required"
        ]);
        
        $all = request()->all();

        $todo = Todo::find($id);
        $todo->name = $all['name'];
        $todo->description = $all['description'];
        $todo->save();
        
        return redirect('todo');
    }

    public function destroy($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('todo');
    }
}
