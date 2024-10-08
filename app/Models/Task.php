<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = [
        'title', 'is_done', 'description', 'due_date', 'user_id', 'category_id'
    ];

    protected $hidden = [

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
