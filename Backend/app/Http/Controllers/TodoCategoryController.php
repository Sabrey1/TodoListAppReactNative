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
        $todo_categorycategory = TodoCategory::all();
        return response()->json($todo_categorycategory);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TodoCategory $todoCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TodoCategory $todoCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TodoCategory $todoCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TodoCategory $todoCategory)
    {
        //
    }
}
