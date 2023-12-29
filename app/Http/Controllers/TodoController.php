<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todoList = Todo::all();
        return view('auth.todo', [
            'todoList' => $todoList
        ]);
    }
    public function create()
    {
        return view('auth.create-todo');
    }

    public function store(TodoRequest $request)
    {

        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'is_completed' => 0
        ]);

        $request->session()->flash('alert-success', 'Item criado com sucesso');

        return to_route('todo');
    }
    public function show($id)
    {
        $todo = Todo::find($id);

        if (!$todo) {
            request()->session()->flash('alert-success', 'Item criado com sucesso');
            return to_route('todo')->withErrors([
                'error' => 'EXISTE UM ERRO NA LISTA'
            ]);
        }

        return view('auth.showTodo', ['todo' => $todo]);
    }

    public function edit($id)
    {
        $todo = Todo::find($id);

        if (!$todo) {
            request()->session()->flash('alert-success', 'Item criado com sucesso');
            return to_route('todo')->withErrors([
                'error' => 'EXISTE UM ERRO NA LISTA'
            ]);
        }
        return view('auth.edit-todo', ['todo' => $todo]);
    }

    public function update(TodoRequest $request)
    {


        return $request->all();
    }
}
