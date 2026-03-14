<?php

namespace App\Http\Controllers;

use App\Models\TodoCategotyMapping;
use Illuminate\Http\Request;

class TodoCategoryMappingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo_category_mapping = TodoCategotyMapping::all();
        return response()->json($todo_category_mapping);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'todo_id' => 'required',
            'category_id' => 'required'
        ]);

        $todo_category_mapping = new TodoCategotyMapping();
        $todo_category_mapping->todo_id = $request->todo_id;
        $todo_category_mapping->category_id = $request->category_id;
        $todo_category_mapping->save();
        return response()->json([
            'message' => 'Todo category mapping created successfully!!',
            'data' => $todo_category_mapping
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TodoCategotyMapping $todoCategotyMapping, $id)
    {
        $todo = TodoCategotyMapping::find($id);
        $todo = $request->validate([
            'todo_id' => 'required',
            'category_id' => 'required'
        ]);
        $todo->todo_id = $request->todo_id;
        $todo->category_id = $request->category_id;
        $todo->save();
        return response()->json([
            'message' => 'Todo category mapping updated successfully!!',
            'data' => $todo
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TodoCategotyMapping $todoCategotyMapping, $id)
    {
        $todo = TodoCategotyMapping::find($id);
        $todo->delete();
        return response()->json([
            'message' => 'Todo category mapping deleted successfully!!',
            'data' => $todo
        ]);
    }
}
