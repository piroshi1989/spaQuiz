<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory;

    protected $fillable = 
    ['initial', 'keyword', 'description', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
