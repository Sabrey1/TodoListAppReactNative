<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoCategotyMapping extends Model
{
    protected $table = 'todo_category_mapping';

    protected $fillable =[
        'todo_id',
        'todo_category_id'
    ];
}
