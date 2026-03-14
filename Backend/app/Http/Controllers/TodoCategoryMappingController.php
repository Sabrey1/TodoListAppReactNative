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
    public function show(TodoCategotyMapping $todoCategotyMapping)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TodoCategotyMapping $todoCategotyMapping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TodoCategotyMapping $todoCategotyMapping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TodoCategotyMapping $todoCategotyMapping)
    {
        //
    }
}
