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
        $validated =$request->validate([

            'title' => 'required|min:3'
        ]);
        
        // $todo = new Todo();
        // $todo->title = $request->title;
        // $todo->save();

        return Todo::create($validated);

        return redirect('index');
    }
    public function destroy(Request $request, Todo $todo)
    {
        $todo->delete();
        return redirect('todo');
    }

}
