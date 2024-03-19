<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = 'information';

/**
 * キャストする属性
 *
 * @var array
 */
protected $casts = [
    'created_at' => 'datetime:Y/m/d',
];


}
