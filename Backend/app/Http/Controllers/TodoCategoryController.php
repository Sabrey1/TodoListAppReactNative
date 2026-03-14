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
        if(!TodoCategory::all()){
            return response()->json([
                'message' => 'Todo categories cannot be found!!',
            ]);
        }
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

        if(TodoCategory::where('name', $request->name)->exists()){
            return response()->json([
                'message' => 'Todo category already exists!!',
            ]);
        }

        $todoCategory = new TodoCategory();
        $todoCategory->name = $request->name;
        $todoCategory->save();
        return response()->json([
            'message' => 'Todo category created successfully!!',
            'data' => $todoCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TodoCategory $todoCategory, $id)
    {
        $todoCategory = TodoCategory::find($id);
        if(!TodoCategory::find($id)){
            return response()->json([
                'message' => 'Todo category not found!!',
            ]);
        }
        $validated = $request->validate([
            'name' => 'required'
        ]);
        $todoCategory->name = $request->name;
        $todoCategory->save();
        return response()->json([
            'message' => 'Todo category updated successfully!!',
            'data' => $todoCategory
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TodoCategory $todoCategory, $id)
    {
        $todo = TodoCategory::find($id);

        if(!TodoCategory::find($id)){
            return response()->json([
                'message' => 'Todo category not found!!',
            ]);
        }
        $todo->delete();
        return response()->json([
            'message' => 'Todo category deleted successfully!!',
            'data' => $todo
        ]);
    }
}
