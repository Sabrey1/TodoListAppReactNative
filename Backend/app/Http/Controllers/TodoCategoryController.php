<?php

namespace App\Http\Controllers;

use App\Models\TodoCategory;
use Illuminate\Http\Request;

class TodoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo_categories = TodoCategory::all();
        return response()->json($todo_categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        $todo = new TodoCategory();
        $todo->name = $request->name;
        $todo->save();
        return response()->json([
            'message' => 'Todo category created successfully!!',
            'data' => $todo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TodoCategory $todoCategory, $id)
    {
        $todo = TodoCategory::find($id);
        $todo = $request->validate([
            'name ' => 'required'
        ]);
        $todo->name = $request->name;
        $todo->save();
        return response()->json([
            'message' => 'Todo category updated successfully!!',
            'data' => $todo
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TodoCategory $todoCategory, $id)
    {
        $todo = TodoCategory::find($id);
        $todo->delete();
        return response()->json([
            'message' => 'Todo category deleted successfully!!',
            'data' => $todo
        ]);
    }
}
