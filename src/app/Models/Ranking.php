<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    use HasFactory;

    protected $fillable = 
    ['user_id', 'percentage_correct_answer'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function insertScore(int $correctRatio, int $userId)
    {
      $ranking = new Ranking();
      $ranking->percentage_correct_answer = $correctRatio;
      $ranking->user_id = $userId;
      $ranking->save();
    }
}
