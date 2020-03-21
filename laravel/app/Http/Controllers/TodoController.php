<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        
        

        return view('index',[

            'todos' => $todos

        ]);
    }
    public function update(Request $request)
    {
        // $todo = new Todo();
        // $todo->title = $request->title;
        // $todo->save();

        return Todo::create($request->all());

        return redirect('todo');
    }
    public function destroy(Request $request, Todo $todo)
    {
        return $todo;
    }

}
