<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable =
    ['title', 'image_src', 'answer_id', 'category_id'];

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}