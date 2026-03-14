<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    protected $fillable = [
        'todo_category_id',
        'title',
        'description',
        'status',
        'due_date'
    ];
}
