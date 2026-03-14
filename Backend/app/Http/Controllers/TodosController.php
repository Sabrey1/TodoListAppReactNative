<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todos::all();
        return response()->json($todos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'todo_category_id' => 'required',
            'title' => 'required',
            'due_date' => 'required',
        ]);

        $todo = new Todos();
        $todo->todo_category_id = $request->todo_category_id;
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->status = $request->status;
        $todo->due_date = $request->due_date;
        $todo->save();
        return response()->json([
            'message' => 'Todo created successfully!!',
            'data' => $todo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todos $todos, $id)
    {
        $todo = Todos::find($id);
        $todo = $request->validate([
            'todo_category_id' => 'required',
            'title' => 'required',
            'due_date' => 'required',
        ]);
        $todo->todo_category_id = $request->todo_category_id;
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->status = $request->status;
        $todo->due_date = $request->due_date;
        $todo->save();
        return response()->json([
            'message' => 'Todo updated successfully!!',
            'data' => $todo
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todos $todos, $id)
    {
        $todo = Todos::find($id);
        $todo->delete();
        return response()->json([
            'message' => 'Todo deleted successfully!!',
            'data' => $todo
        ]);
    }
}
