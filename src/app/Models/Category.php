<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = 'name';

    public function quiz()
    {
        return $this->hasOne(Quiz::class);
    }

    public function keyword()
    {
        return $this->hasOne(Keyword::class);
    }
}