<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Symfony\Component\HttpFoundation\Response;

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

        try {
            Todo::create([
                'title' => $request->title,
                'description' => $request->description,
                'is_completed' => 0,

            ]);

            $request->session()->flash('alert-success', 'Item criado com sucesso');

            return to_route('todo');
        } catch (\Throwable $th) {
            return response()->json([
                'info' => 'error',
                'result' => 'Não foi possível capturar os dados do usuário!.',
                'error' => $th->getMessage(),
                'Linha' => $th->getLine(),
                'Arquivo' => $th->getFile()
            ], Response::HTTP_BAD_REQUEST);
        }
    }
    public function show($id)
    {
        try {
            $todo = Todo::find($id);

            if (!$todo) {
                request()->session()->flash('alert-error', 'O item não pode ser criado com sucesso. Por favor, tente novamente');
                return to_route('todo')->withErrors([
                    'error' => 'error no sistema'
                ]);
            }
            request()->session()->flash('alert-success', 'Item criado com sucesso');
            return view('auth.showTodo', ['todo' => $todo]);
        } catch (\Throwable $th) {
            return response()->json([
                'info' => 'error',
                'result' => 'Não foi possível capturar os dados do usuário!.',
                'error' => $th->getMessage(),
                'Linha' => $th->getLine(),
                'Arquivo' => $th->getFile()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function editTodo($id)
    {

        try {
            $todo = Todo::find($id);
            if (!$todo) {
                request()->session()->flash('alert-error', 'EXISTE UM ERRO NA LISTA');
                return to_route('todo')->withErrors([
                    'error' => 'EXISTE UM ERRO NA LISTA'
                ]);
            }
            request()->session()->flash('alert-success', 'Item foi editado com sucesso');
            return view('auth.edit-todo', ['todo' => $todo]);
        } catch (\Throwable $th) {
            return response()->json([
                'info' => 'error',
                'result' => 'Não foi possível capturar os dados do usuário!.',
                'error' => $th->getMessage(),
                'Linha' => $th->getLine(),
                'Arquivo' => $th->getFile()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function update(TodoRequest $request)
    {
        try {
            $todo = Todo::find($request->todo_id);

            if (!$todo) {
                request()->session()->flash('alert-error', 'Não conseguimos atualiza sua atividade. Por favor, tente novamente');
                return to_route('todo')->withErrors([
                    'error' => 'Existe um erro que deve ser avaliado'
                ]);
            }
            $todo->update([
                'title' => $request->title,
                'description' => $request->description,
                'is_completed' => $request->is_completed
            ]);
            request()->session()->flash('alert-success', 'Item atualizado com sucesso');

            return view('auth.showTodo', ['todo' => $todo]);
        } catch (\Throwable $th) {
            return response()->json([
                'info' => 'error',
                'result' => 'Não foi possível capturar os dados do usuário!.',
                'error' => $th->getMessage(),
                'Linha' => $th->getLine(),
                'Arquivo' => $th->getFile()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function dropTodo(Request $request)
    {

        $todo = Todo::find($request->todo_id);

        if (!$todo) {
            request()->session()->flash('error', 'Não foi possivel deletar o item existente');
            return to_route('todo')->withErrors([
                'error' => 'EXISTE UM ERRO NA LISTA'
            ]);
        }

        $todo->delete();
        $request->session()->flash('alert-success', 'Item deletado com sucesso');
        return to_route('todo');
    }
}
