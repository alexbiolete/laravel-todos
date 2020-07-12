<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Session;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('pages.index')->with('todos', $todos);
    }

    public function store(Request $request)
    {
        $todo = new Todo;
        $todo->todo = $request->todo;
        $todo->save();

        Session::flash('success', 'Your task was added.');

        return redirect()->back();
    }

    public function complete($id)
    {
        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();

        Session::flash('success', 'Your task was marked as completed.');

        return redirect()->back();
    }

    public function update($id)
    {
        $todo = Todo::find($id);

        return view('pages.edit')->with('todo', $todo);
    }
    
    public function save(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();

        Session::flash('success', 'Your task was updated.');

        return redirect()->route('todo.index');
    }

    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        Session::flash('success', 'Your task was deleted.');

        return redirect()->back();
    }
}
